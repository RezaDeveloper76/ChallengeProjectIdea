<?php

namespace App\Repositories;

use App\Queries\RoleQuery;

class RoleRepository extends AbstractRepositories {

    public function __construct(
        public RoleQuery $RoleQuery
    ) {
        
    }

}