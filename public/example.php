<?php
/**
 * Exemplo Builder
 * 
 */
require __DIR__ . '/../vendor/autoload.php';

$builder = new \SON\Db\Builder\MySqlBuilder;
$director = new \SON\Db\Builder\UserDirector($builder);

//$sql = $director->getSqlAll();

//var_dump($sql);


//$banks = new  \App\Model\Banks($builder);

//$sql = $banks->getSqlAll();

//var_dump($sql);

$pdo = new \PDO('mysql:host=design-patterns_db_1;dbname=teste', 'root', '1234');

$db = new \SON\Db\Db($pdo);
$db->setDirector($director);
$data = $db->getAll()->execute();

var_dump($data->fetchAll());