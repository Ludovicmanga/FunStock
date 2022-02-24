<?php

namespace App\Services;

interface UserServiceInterface
{
    public function findAllButLoggedOne($loggedUser);

    public function findAll();
}