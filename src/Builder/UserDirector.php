<?php
/**
 * Exemplo Builder
 * 
 */
namespace SON\Db\Builder;


class UserDirector implements DirectorInterface
{
    protected $builder;

    public function __construct(BuilderInterface $builder = null)
    {
        $this->builder = $builder;
    }

    public function getSqlAll(): string
    {
        $this->builder->setTable('users');
        return $this->builder->getSqlAll();
    }
}
