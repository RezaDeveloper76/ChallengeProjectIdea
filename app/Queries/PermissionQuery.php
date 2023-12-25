<?php

namespace App\Queries;

use App\Models\Permission;

class PermissionQuery extends AbstractQueries {

    public function __construct() {}

    public function all() {
        return Permission::all();
    }

    public function findById($id) {
        return Permission::find($id);
    }
}