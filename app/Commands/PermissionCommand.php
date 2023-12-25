<?php

namespace App\Commands;

use App\Models\Permission;

class PermissionCommand extends AbstractCommands {

    public function create(string $permission_title, string $permission_key) {
        return Permission::created([
            "permission_title" => $permission_title,
            "permission_key" => $permission_key
        ]);
    }

    public function update($id, array $data) {
        $permission = Permission::findOrFail($id);
        return $permission->update($data);
    }

    public function delete($id) {
        return Permission::destroy((array) $id);
    }

}