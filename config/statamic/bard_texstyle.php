<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Styles
    |--------------------------------------------------------------------------
    |
    | List of toggleable styles.
    |
    */

    'styles' => [

        'brand_color' => [
            'type'   => 'span',
            'level'  => 1,
            'name'   => 'Brand color',
            'ident'  => 'C',
            'class'  => 'text-primary',
            'cp_css' => 'color: blue',
        ],

        'large_text' => [
            'type'   => 'paragraph',
            'name'   => 'Text large',
            'ident'  => 'L',
            'class'  => 'text-400',
            'cp_css' => 'font-size: 1.25em;',
        ],

        'title' => [
            'type'   => 'paragraph',
            'name'   => 'Title Text',
            'ident'  => 'T',
            'class'  => 'title-text tracking-widest uppercase text-100',
            'cp_css' => 'letter-spacing: 0.1em; text-transform: uppercase; font-size: .8em;',
        ],

    ],

    /*
    |--------------------------------------------------------------------------
    | Default Classes
    |--------------------------------------------------------------------------
    |
    | Default classes that will be applied to elements with no style set.
    |
    */

    'default_classes' => [
        // 'heading' => [
        //     1 => 'heading-1',
        //     2 => 'heading-2',
        //     3 => 'heading-3',
        //     4 => 'heading-4',
        //     5 => 'heading-5',
        //     6 => 'heading-6',
        // ],
        // 'paragraph' => 'paragraph',
    ],

    /*
    |--------------------------------------------------------------------------
    | Store
    |--------------------------------------------------------------------------
    |
    | By default the class names are saved to your content. If you would prefer
    | to save the style keys instead you can change this option to "key".
    |
    */

    'store' => 'class',

];
