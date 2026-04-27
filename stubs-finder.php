<?php

declare(strict_types=1);

use Symfony\Component\Finder\Finder;

return Finder::create()
    ->files()
    ->name('*.php')
    ->in(__DIR__ . '/bricks')
    ->notPath('languages')
    ->notPath('assets');
