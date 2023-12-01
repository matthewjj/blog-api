<?php

namespace App\Interfaces;

use App\RequestMappers\PostRequestMapper;

interface PostStoreInterface
{
	public function save(PostRequestMapper $post);
}