<?php

namespace App\Handlers;

use App\Commands\PermissionCommand;

class PermissionHandler extends AbstractHandlers {

    public function __construct(
        public PermissionCommand $PermissionCommand
    ) {
        
    }

    public function create(string $permission_title, string $permission_key) {
        return $this->PermissionCommand->create($permission_title, $permission_key);
    }

    public function update($id, array $data) {
        return $this->PermissionCommand->update($id, $data);
    }

    public function delete($id) {
        return $this->PermissionCommand->delete($id);
    }

}