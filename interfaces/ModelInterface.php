<?php


namespace interfaces;


interface ModelInterface
{

    public function getTableName() : string;

    public function getAll();

    public function getBy(string $value, string $col);

    public function add(array $params);

    public function update(array $params);

    public function delete(int $id);

    public function save(string $sql, array $params);
}