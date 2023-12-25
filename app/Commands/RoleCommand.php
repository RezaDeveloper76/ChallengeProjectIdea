<?php

namespace App\Commands;

use App\Models\Role;

class RoleCommand extends AbstractCommands {

    public function create(string $role_title) {
        return Role::created([
            "role_title" => $role_title
        ]);
    }

    public function update($id, array $data) {
        $role = Role::findOrFail($id);
        return $role->update($data);
    }

    public function delete($id) {
        return Role::destroy((array) $id);
    }

}