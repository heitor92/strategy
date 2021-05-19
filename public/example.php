<?php
/**
 * Exemplo Builder
 * 
 */
require __DIR__ . '/../vendor/autoload.php';

$builder = new \SON\Db\Builder\SqlBuilder;
$director = new \SON\Db\Builder\UserDirector($builder);

$sql = $director->getSqlAll();

var_dump($sql);