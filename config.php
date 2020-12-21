<?php

use Illuminate\Support\Str;

return [
    'baseUrl' => 'http://lccbldr.com',
    'production' => true,
    'siteName' => 'LCC Builders',
    'siteDescription' => 'Our goal at LCC Builders is to lend our construction knowledge and management expertise to our clients for continuous and successful relationships.',
    'siteAuthor' => 'Brett Forath',

    // collections
    'collections' => [
        'projects' => [
            'author' => 'LCC Builders',
            'sort' => '-date',
            'path' => 'projects'
        ],
        'categories' => [
            'path' => '/blog/categories/{filename}',
            'posts' => function ($page, $allPosts) {
                return $allPosts->filter(function ($post) use ($page) {
                    return $post->categories ? in_array($page->getFilename(), $post->categories, true) : false;
                });
            },
        ],
    ],


    // helpers
    'getDate' => function ($page) {
        return Datetime::createFromFormat('U', $page->date);
    },
    'isActive' => function ($page, $path) {
        return Str::endsWith(trimPath($page->getPath()), trimPath($path));
    },
];
