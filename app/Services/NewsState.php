<?php

namespace App\Services;

enum NewsState: int
{
    case active = 1;
    case hidden = 0;
}
