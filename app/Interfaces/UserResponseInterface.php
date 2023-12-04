<?php

namespace App\Interfaces;

use App\Models\User;
use Laravel\Sanctum\NewAccessToken;

interface UserResponseInterface
{
	public function output(User $user, NewAccessToken $token);
}