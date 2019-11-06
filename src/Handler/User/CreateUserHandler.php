<?php


namespace App\Handler\User;


use App\Dto\User\CreateUserDto;

class CreateUserHandler
{
    public function createUser(array $data)
    {
        $dto = new CreateUserDto($data);
        var_dump($dto);die;
    }

}