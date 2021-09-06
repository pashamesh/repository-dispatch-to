<?php

use PhpCsFixer\Finder;
use PhpCsFixer\Config;

$finder = Finder::create()
    ->in(['src']);

$config = new Config();

return $config
    ->setRules([
        '@PSR12' => true,
        'strict_param' => true,
        'array_syntax' => ['syntax' => 'short'],
        'blank_line_before_statement' => ['statements' => ['return']]
    ])
    ->setFinder($finder);
