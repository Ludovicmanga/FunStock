<?php

namespace App\Services;

interface UserServiceInterface
{
    public function findAllUsersButLoggedOne($loggedUser);
}