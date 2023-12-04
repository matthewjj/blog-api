<?php

namespace App\RequestMappers;

class UserRequestMapper
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
            'name' => $this->attributes['name'],
            'email' => $this->attributes['email'],
            'password' => $this->attributes['password'],
        ];
    }
}