<?php

namespace App\Repositories;

use App\Queries\UserQuery;

class UserRepository extends AbstractRepositories {

    public function __construct(
        public UserQuery $UserQuery
    ) {
        
    }

}