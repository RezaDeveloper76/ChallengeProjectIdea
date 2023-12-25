<?php

namespace App\Classes;

use App\Repositories\UserRepository;
use App\Handlers\UserHandler;

class UserClass extends AbstractClasses {
    public function __construct(
        public UserRepository $UserRepository,
        public UserHandler $UserHandler
    ) {
        
    }

    public function register($name, $email, $password) {
        return $this->UserHandler->create($name, $email, $password);
    }
}