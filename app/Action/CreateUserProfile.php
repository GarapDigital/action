<?php

namespace App\Action;

use App\Models\UserProfile;

class CreateUserProfile
{
    protected $dto;

    public function __construct(array $dto)
    {
        $this->dto = $dto;
    }

    public function execute()
    {
        $user_profile = UserProfile::create($this->dto);

        return (object) [
            'response_code' => 200,
            'success' => true,
            'message' => 'User Profile Successfully Created',
            'data' => $user_profile,
        ];
    }
}
