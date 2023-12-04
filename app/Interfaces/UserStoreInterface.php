<?php

namespace App\Interfaces;

use App\RequestMappers\UserRequestMapper;

interface UserStoreInterface
{
	public function save(UserRequestMapper $map);
}