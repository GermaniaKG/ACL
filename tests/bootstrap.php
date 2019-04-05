<?php
/**
 * test suite bootstrap.
 *
 * Tries to include Composer vendor/autoload.php; dies if it does not exist.
 */

$autoloader_file = __DIR__ . '/../vendor/autoload.php';
if (!is_readable( $autoloader_file )) {
    die( PHP_EOL . "Missing Composer's vendor/autoload.php; run 'composer install' first." . PHP_EOL . PHP_EOL );
}
