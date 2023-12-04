<?php

namespace App\Services;

use App\Models\User;
use App\Interfaces\UserStoreInterface;
use App\RequestMappers\UserRequestMapper;
use App\Interfaces\UserResponseInterface;

class UserStore implements UserStoreInterface
{
	public function __construct(UserResponseInterface $response)
	{
		$this->response = $response;
	}

	public function save(UserRequestMapper $map)
	{
		$user = User::create($map->getData());

		$token = $user->createToken('api_token');

		return $this->response->output($user, $token);
	}
}