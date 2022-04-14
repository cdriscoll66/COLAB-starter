<?php

/**
 * The main template file
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists
 */

namespace App;

use App\Http\Controllers\Controller;
use Rareloop\Lumberjack\Http\Responses\TimberResponse;
use App\PostTypes\Post;
use Timber\Timber;

class IndexController extends Controller
{
    public function handle()
    {
        $context = Timber::get_context();
        $context['title'] = 'Index';

        $context['posts'] = Post::builder()
            ->limit($context['posts_per_page'])
            ->offset($context['posts_per_page'] * ($context['paged'] > 1 ? $context['paged'] - 1 : 0))
            ->get();

        $context['paginate_links'] = paginate_links();

        return new TimberResponse('templates/posts.twig', $context);
    }
}
