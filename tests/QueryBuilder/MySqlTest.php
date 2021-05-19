<?php

namespace SON\Db\QueryBuilder;

class MySqlTest extends \PHPUnit_Framework_TestCase
{

    public function testSelectQuery()
    {
        $sql = new MySql();
        $query = $sql->table('users')
            ->select()
            ->getQuery();

        $this->assertEquals('SELECT * FROM `users`;', $query);
    }

    public function testSelectQueryWithColumnsInFormatText()
    {
        $sql = new MySql();
        $query = $sql->table('users')
            ->select('username, password')
            ->getQuery();

        $this->assertEquals('SELECT `username`, `password` FROM `users`;', $query);
    }

    public function testSelectQueryWithColumnsInFormatArray()
    {
        $sql = new MySql();
        $query = $sql->table('users')
            ->select(['username', 'password'])
            ->getQuery();

        $this->assertEquals('SELECT `username`, `password` FROM `users`;', $query);
    }
}