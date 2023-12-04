<?php

namespace App\Services;

use App\Models\User;
use App\Interfaces\UserResponseInterface;
use Laravel\Sanctum\NewAccessToken;

class UserResponse implements UserResponseInterface
{
	public function output(User $user, NewAccessToken $token)
	{
		return [
			'token' => $token->plainTextToken,
			'created' => $user->created_at,
		];
	}
}