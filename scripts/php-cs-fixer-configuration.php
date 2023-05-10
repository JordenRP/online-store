<?php

require __DIR__ . '/../vendor/autoload.php';

$dotenv = new Symfony\Component\Dotenv\Dotenv();
$dotenv->load(__DIR__ . '/../.env');

if ($_ENV['APP_ENV'] ?? '' === 'dev') {
    if (!file_exists('.php-cs-fixer.php')) {
        copy('.php-cs-fixer.dist.php', '.php-cs-fixer.php');
    }
}