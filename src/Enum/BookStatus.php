<?php

namespace App\Enum;

enum BookStatus: string
{
    case Published = 'published';
    case Borrowed = 'borrowed';
    case  Unavailable = 'unavailable';

    public function getLabel(): string
    {
        return match ($this) {
            self::Published => 'published',
            self::Borrowed => 'borrowed',
            self::Unavailable => 'unavailable',
        };
    }

}
