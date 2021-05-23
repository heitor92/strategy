<?php
/**
 * Exemplo Builder
 * 
 */
require __DIR__ . '/vendor/autoload.php';

$builder = new \SON\Db\Builder\MySqlBuilder;
$director = new \SON\Db\Builder\UserDirector($builder);

$config = [
    'dsn' => 'mysql:host=design-patterns_db_1;dbname=teste',
    'user' => 'root',
    'passwd' => '1234'
];

$db = \SON\Db\DbSingleton::configure($config);