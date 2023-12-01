<?php

namespace App\Services;

use App\Models\Post;
use App\Interfaces\PostResponseInterface;

class PostResponse implements PostResponseInterface
{
	public function output(Post $post)
	{
		return [
			'id' => $post->id,
			'created' => $post->created_at,
		];
	}
}