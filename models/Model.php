<?php

namespace models;

use interfaces\ModelInterface;

class Model implements ModelInterface
{

    public function getTableName(): string
    {
        // TODO: Implement getTableName() method.
    }

    public function getAll()
    {
        // TODO: Implement getAll() method.
    }

    public function getBy($value, string $col)
    {
        // TODO: Implement getBy() method.
    }

    public function add(array $params)
    {
        // TODO: Implement add() method.
    }

    public function update(array $params)
    {
        // TODO: Implement update() method.
    }

    public function delete(int $id)
    {
        // TODO: Implement delete() method.
    }

    public function save(string $sql, array $params)
    {
        // TODO: Implement save() method.
    }
}
