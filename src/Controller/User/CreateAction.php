<?php


namespace App\Controller\User;

use App\Dto\User\CreateUserDto;
use App\Handler\User\CreateUserHandler;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

/**
 * Class CreateAction
 * @package App\Controller\User
 * @Route("api/v1/user/create", methods={"POST"})
 */
class CreateAction
{

    /**
     * @param Request $request
     * @param CreateUserHandler $handler
     */
    public function __invoke(Request $request, CreateUserHandler $handler)
    {
        $data = $request->getContent();
        $handler->createUser(json_decode($data, true));

    }
}