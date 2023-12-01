<?php

namespace App\Interfaces;

use App\Models\Post;

interface PostResponseInterface
{
	public function output(Post $post);
}