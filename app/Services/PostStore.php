<?php

namespace App\Services;

use App\Models\Post;
use App\Interfaces\PostStoreInterface;
use App\RequestMappers\PostRequestMapper;
use App\Interfaces\PostResponseInterface;

class PostStore implements PostStoreInterface
{
	public function __construct(PostResponseInterface $response)
	{
		$this->response = $response;
	}

	public function save(PostRequestMapper $map)
	{
		return $this->response->output(
			Post::create($map->getData())
		);
	}
}