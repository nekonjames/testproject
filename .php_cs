<?php declare(strict_types=1);

$finder = PhpCsFixer\Finder::create()
    ->in(__DIR__.'/src')
    ->in(__DIR__.'/tests');

return PhpCsFixer\Config::create()
    ->setRules([
        '@Symfony' => true,
        '@Symfony:risky' => true,
        '@PHP71Migration' => true,
        'declare_strict_types' => true,
        'no_useless_else' => true,
        'no_useless_return' => true,
        'phpdoc_add_missing_param_annotation' => ['only_untyped' => true],
        'no_alias_functions' => true,
        'ordered_imports' => true,
        'void_return' => true,
    ])
    ->setRiskyAllowed(true)
    ->setCacheFile(__DIR__.'/.php_cs.cache')
    ->setFinder($finder);
