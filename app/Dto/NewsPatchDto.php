<?php
declare(strict_types=1);

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
