<?php

namespace App\Handlers;

use App\Commands\RoleCommand;

class RoleHandler extends AbstractHandlers {

    public function __construct(
        public RoleCommand $RoleCommand
    ) {
        
    }

    public function create(string $role_title) {
        return $this->RoleCommand->create($role_title);
    }

    public function update($id, array $data) {
        return $this->RoleCommand->update($id, $data);
    }

    public function delete($id) {
        return $this->RoleCommand->delete($id);
    }

}