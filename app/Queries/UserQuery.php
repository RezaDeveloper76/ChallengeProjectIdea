<?php

namespace App\Queries;

use App\Models\User;

class UserQuery extends AbstractQueries {

    public function __construct() {}

    public function all() {
        return User::all();
    }

    public function findById($id) {
        return User::find($id);
    }
}