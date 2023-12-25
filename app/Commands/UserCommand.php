<?php

namespace App\Commands;

use App\Models\User;

class UserCommand extends AbstractCommands {

    public function create(string $name, string $email, string|int $password) {
        return User::created([
            "name" => $name,
            "email" => $email,
            "password" => $password,
        ]);
    }

    public function update($id, array $data) {
        $user = User::findOrFail($id);
        return $user->update($data);
    }

    public function delete($id) {
        return User::destroy((array) $id);
    }

}