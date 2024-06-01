<?php

namespace App\Services;

enum NewsState: string
{
    case active = 'true';
    case hidden = 'false';
}
