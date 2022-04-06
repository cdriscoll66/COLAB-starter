<?php

/**
 * Color Palette
 *
 * @requires /assets/styles/config/_colors.scss $color-palette
 * @requires /assets/styles/shared/constructs/_color-palette.scss
 *
 * @link https://developer.wordpress.org/block-editor/developers/themes/theme-support/#block-color-palettes
 */

/**
 * Disable Custom Editor Colors
 */
// add_theme_support('disable-custom-colors');

/**
 * Define Custom Editor Colors
 */

add_theme_support('editor-color-palette', [
    [
        'name' => esc_attr__('Red', 'colab'),
        'slug' => 'red',
        'color' => '#ca202c',
    ],
    [
        'name' => esc_attr__('orange', 'colab'),
        'slug' =>  'orange',
        'color' => '#fdba74',
    ],
    [
        'name' => esc_attr__('Yellow', 'colab'),
        'slug' =>  'yellow',
        'color' => '#fef08a',
    ],
    [
        'name' => esc_attr__('Green', 'colab'),
        'slug' =>  'green',
        'color' => '#65a30d',
    ],
    [
        'name' => esc_attr__('Blue', 'colab'),
        'slug' =>  'blue',
        'color' => '#0ea5e9',
    ],
    [
        'name' => esc_attr__('Indigo', 'colab'),
        'slug' =>  'indigo',
        'color' => '#818cf8',
    ],
    [
        'name' => esc_attr__('Violet', 'colab'),
        'slug' =>  'violet',
        'color' => '#6b21a8',
    ],
    [
        'name' => esc_attr__('Dark Gray', 'colab'),
        'slug' =>  'dark-gray',
        'color' => '#333',
    ],
    [
        'name' => esc_attr__('Medium Gray', 'colab'),
        'slug' =>  'medium-gray',
        'color' => '#93a1bb',
    ],
    [
        'name' => esc_attr__('Light Gray', 'colab'),
        'slug' =>  'light-gray',
        'color' => '#DDD',
    ],
    [
        'name' => esc_attr__('Black', 'colab'),
        'slug' => 'black',
        'color' => '#000',
    ],
    [
        'name' => esc_attr__('White', 'colab'),
        'slug' => 'white',
        'color' => '#ffffff',
    ],
    [
        'name' => esc_attr__('Transparent', 'colab'),
        'slug' => 'transparent',
        'color' => 'transparent',
    ],
]);
