<?php

namespace App\Handlers;

use App\Commands\UserCommand;

class UserHandler extends AbstractHandlers {

    public function __construct(
        public UserCommand $UserCommand
    ) {
        
    }

    public function create(string $name, string $email, string|int $password) {
        return $this->UserCommand->create($name, $email, $password);
    }

    public function update($id, array $data) {
        return $this->UserCommand->update($id, $data);
    }

    public function delete($id) {
        return $this->UserCommand->delete($id);
    }

}