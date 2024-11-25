<?php

declare(strict_types=1);

namespace App\Enums;

enum QueuePriority: string
{
    case Default     = 'default';
    case Low         = 'low-priority';
    case High        = 'high-priority';
    case LongTimeout = 'long-timeout';
}
