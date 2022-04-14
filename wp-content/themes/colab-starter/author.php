<?php

/**
 * The template for displaying Author Archive pages
 */

namespace App;

use App\Http\Controllers\Controller;
use Rareloop\Lumberjack\Http\Responses\TimberResponse;
use Rareloop\Lumberjack\QueryBuilder;
use App\PostTypes\Post;
use Timber\Timber;
use Timber\User as TimberUser;

class AuthorController extends Controller
{
    public function handle()
    {
        QueryBuilder::macro('author', function ($author_id) {
            $this->params['author'] = $author_id;

            return $this;
        });

        global $wp_query;

        $context = Timber::get_context();
        $author = new TimberUser($wp_query->query_vars['author']);

        $context['author'] = $author;
        $context['title'] = 'Author Archives: ' . $author->name();

        $context['posts'] = Post::builder()
            ->author($author->ID)
            ->limit($context['posts_per_page'])
            ->offset($context['posts_per_page'] * ($context['paged'] > 1 ? $context['paged'] - 1 : 0))
            ->get();

        $context['paginate_links'] = paginate_links();

        return new TimberResponse('templates/posts.twig', $context);
    }
}
