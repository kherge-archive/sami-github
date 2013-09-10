<?php

use Sami\Sami;
use Symfony\Component\Finder\Finder;

return new Sami(
    Finder::create()
        ->files()
        ->name('*.php')
        ->in(__DIR__ . '/source'),
    array(
        'build_dir' => __DIR__ . '/build',
        'cache_dir' => __DIR__ . '/cache',
        'template_dirs' => array(__DIR__ . '/..'),
        'theme' => 'github',
    )
);
