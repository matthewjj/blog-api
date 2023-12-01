<?php

namespace App\RequestMappers;

class PostRequestMapper
{
    /**
     * @param array<mixed> $attributes
     */
    public function __construct(
        private array $attributes
    ) {
    }

    public function getData(): array
    {
        return [
            'content' => $this->attributes['content'] ?? '',
            'user_id' => $this->attributes['user_id'],
        ];
    }
}