<?php

add_theme_support(
    'editor-gradient-presets',
    array(
        array(
            'name'     => __('Transparent to Black 40', 'colab'),
            'gradient' => 'linear-gradient(to bottom, rgba(0, 0, 0, 0) 0%, rgba(0, 0, 0, 0.4) 100%)',
            'slug'     => 'transparent-to-black-40',
        ),
        array(
            'name'     => __('Yellow to Green', 'colab'),
            'gradient' => 'linear-gradient(#fef08a 0%, #65a30d 100%)',
            'slug'     => 'yellow-to-green',
        ),
        array(
            'name'     => __('Green to Blue', 'colab'),
            'gradient' => 'linear-gradient(226.38deg, #65a30d 11.89%, #0ea5e9 100%)',
            'slug'     => 'green-to-blue',
        ),
        array(
            'name'     => __('Red to Indigo', 'colab'),
            'gradient' => 'linear-gradient(#ca202c 0%, #6b21a8 50%, #818cf8 100%)',
            'slug'     => 'red-to-indigo',
        ),
        array(
            'name'     => __('Blue to Indigo', 'colab'),
            'gradient' => 'linear-gradient(129.23deg, #0ea5e9 27.89%, #818cf8 77.04%)',
            'slug'     => 'blue-to-indigo',
        ),
    )
);
