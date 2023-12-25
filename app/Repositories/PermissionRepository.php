<?php

namespace App\Repositories;

use App\Queries\PermissionQuery;

class PermissionRepository extends AbstractRepositories {

    public function __construct(
        public PermissionQuery $PermissionQuery
    ) {
        
    }

    public function all() {
        return $this->PermissionQuery->all();
    }

    public function findById($id) {
        return $this->PermissionQuery->findById($id);
    }

}