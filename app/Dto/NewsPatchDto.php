<?php

namespace App\Dto;

class NewsPatchDto
{

    public function __construct(
        public readonly int $id,
        public readonly bool $state,
    )
    {
    }
}
