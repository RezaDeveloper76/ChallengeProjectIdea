<?php

namespace App\Queries;

use App\Models\Role;

class RoleQuery extends AbstractQueries {

    public function __construct() {}

    public function all() {
        return Role::all();
    }

    public function findById($id) {
        return Role::find($id);
    }
}