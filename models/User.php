<?php


namespace models;


use base\Application;
use models\repositories\Repository;

class User extends Model
{
    public int $id;
    public string $login;
    public string $password;
    public string $name;
    public string $phone;
    protected Repository $repository;

    public function __construct()
    {
        $this->repository = Application::getInstance()->userRepository;
    }

    public function getTableName(): string
    {
        return "user";
    }

    public function getAll()
    {
        // TODO: Implement getAll() method.
    }

    public function getBy($value, string $col = 'id')
    {
        return $this->repository->getBy($value, $col);
    }

    public function add(array $params)
    {
        return $this->repository->add($params);
    }

    public function update(array $params)
    {
        $this->repository->update($params);
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