<?php

namespace App\Action;

use App\Models\User;

class CreateUser
{
    protected $dto;

    public function __construct(array $dto)
    {
        $this->dto = $dto;
    }

    public function execute()
    {
        $user = User::create($this->dto);

        return (object) [
            'response_code' => 200,
            'success' => true,
            'message' => 'User Successfully Created',
            'data' => $user,
        ];
    }
}
