<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUsertRequest;
use Illuminate\Http\Request;
use App\Classes\UserClass;

class UserController extends Controller
{
    public function __construct(
        public UserClass $UserClass
    ) {
        
    }

    public function register(StoreUsertRequest $request) {
        
        $request->validated();

        $user = $this->UserClass->register(
            name: $request->name,
            email: $request->email,
            password: $request->password,
        );

        return 0;
    }
}
