<?php


namespace App\Dto\User;


use App\Dto\AbstractDto;

class CreateUserDto extends AbstractDto
{
    protected $firstName;
    protected $lastName;

    /**
     * @return mixed
     */
    public function getFirstName()
    {
        return $this->firstName;
    }

    /**
     * @return mixed
     */
    public function getLastName()
    {
        return $this->lastName;
    }

}