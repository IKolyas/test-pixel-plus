<?php


namespace models\repositories;

use models\repositories\Repository;
use models\User;

class UserRepository extends Repository
{

    public function getTableName(): string
    {
        return 'user';
    }

    public function getModelClassName(): string
    {
        return User::class;
    }
}