![COLAB ICON](https://github.com/teamcolab/COLAB-starter-theme/blob/develop/wp-content/themes/colab-starter/dist/images/logo-dark.png?raw=true)

## COLAB Starter Theme.

This is a bones build based on the tools and templates that we at COLAB have decided to use.

1.  [Lumberjack](https://lumberjack.rareloop.com/) - by Rareloop - a powerful MVC framework for modern WordPress Development. Lumberjack uses the [Timber framework](https://timber.github.io/docs/) and [Twig Templating](https://twig.symfony.com/doc/3.x/) to build easy to maintain, object oriented code.
2.  [The TwentyTwentyOne](https://wordpress.org/themes/twentytwentyone/) - CSS theme system by [WordPress](https://wordpress.org/)
3.  [Timber ACF WP Blocks](https://github.com/palmiak/timber-acf-wp-blocks) - system for building custom blocks
4.  [Webpack](https://webpack.js.org/) - For Bundling
5.  [Lando](https://lando.dev/) - For Local Development

The intention of this bare bones build is to be able to effect the colors, fonts, and a handful of global variables and have a working and usable block editor site. The Theme starts you off with base styles, a basic header, navigation, footer, mobile menu and basic page template.

---

[![framework](https://img.shields.io/github/release/rareloop/lumberjack-core.svg)](https://github.com/Rareloop/lumberjack/releases)
[![GitHub license](https://img.shields.io/github/license/rareloop/lumberjack.svg)](https://github.com/Rareloop/lumberjack/blob/master/LICENSE.txt)
![Downloads](https://img.shields.io/packagist/dt/rareloop/lumberjack-core.svg)
[![Trees Planted](https://img.shields.io/ecologi/trees/rareloop.svg?label=trees%20planted)](https://ecologi.com/rareloop?r=60618d1bcdd7a4001d7b86f2)


<img src="https://lumberjack.rareloop.com/app/themes/lumberjack/assets/img/logo.svg" alt="Lumberjack Logo" />

# Supercharge your WordPress Development

Lumberjack is a powerful MVC framework for the modern WordPress developer. Write better, more expressive and easier to maintain code.

## Who is Lumberjack for?

Coming from another PHP framework such as Laravel, have experience using Timber with WordPress but want more, or are just getting started with modern WordPress? Then Lumberjack is for you.

Use as little or as much as you need, it's beginner friendly!

## Documentation

The Lumberjack documentation can be found here:

[https://docs.lumberjack.rareloop.com](https://docs.lumberjack.rareloop.com)

For more information, check out the website:

[https://lumberjack.rareloop.com](https://lumberjack.rareloop.com)

*Note: This repository is just the starter theme used for the project and doesn't require updating very often. The majority of the development work, and where progress can be seen if you're interested, is in the [framework repository](https://github.com/Rareloop/lumberjack-core)*

## Getting Started

See the documentation for details on how to get started: [https://docs.lumberjack.rareloop.com/getting-started/installation](https://docs.lumberjack.rareloop.com/getting-started/installation)

## Built on strong foundations

Standing on the shoulders of giants, Lumberjack proudly builds on the great work of other open source WordPress projects.

- [Bedrock](https://roots.io/bedrock/docs/installing-bedrock/)
- [Timber](https://timber.github.io/docs/)

## Beautiful code. Easy to maintain

Object orientated and MVC patterns help keep your code structured and DRY.

**index.php**

```php
class IndexController
{
    public function handle()
    {
        $context = Timber::get_context();
        $context['posts'] = Post::whereStatus('publish')
            ->limit(5)
            ->get();

        return new TimberResponse('index.twig', $context);
    }
}
```

**index.twig**

```html
{% if posts is not empty %}
    <h4>Recent Articles</h4>
    <ul>
        {% for post in posts %}
            <li class="article">
                <h3>{{ $post->title }}</h3>
                {{ $post->preview }}
                <a href="{{ $post->link }}">Read the full story</a>
            </li>
        {% endfor %}
    </ul>
{% endif %}
```

## You're in good company

> Lumberjack is the deluxe version of what Modern WordPress should look like today. The team has done a great job of making it easy to build complicated custom applications while taking advantage of the best parts of WordPress.
>
> **_- Jared Novack - Timber creator_**

## Made by [Rareloop](https://rareloop.com)

We're a Digital Product Studio based in Southampton (UK) with many years experience working on modern WordPress websites. We design and build digital products for a range of clients, take a look at what else we can do.

[Find out more](https://rareloop.com)

## Licence & Giving Back
Lumberjack is available under the [MIT license](https://github.com/Rareloop/lumberjack/blob/master/LICENSE.txt) and you're free to use it for personal or commercial projects.

**If you've recieved value from Lumberjack we'd hugely appreciate it if you could donate to our [Ecologi forest](https://ecologi.com/rareloop?r=60618d1bcdd7a4001d7b86f2) and help us plant real life trees to combat the climate crisis. Compared to the cost of developing a framework like Lumberjack, a few trees per project is a bargain and makes a positive difference to the environment.**

[![Trees Planted](https://img.shields.io/ecologi/trees/rareloop.svg?label=trees%20planted&style=for-the-badge)](https://ecologi.com/rareloop?r=60618d1bcdd7a4001d7b86f2)

[Help us plant real life trees 🌱](https://ecologi.com/rareloop?r=60618d1bcdd7a4001d7b86f2)
