<?php

namespace App\Enum;

enum CommentStatus: string
{
    case Published = "published";
    case Unpublished = "unpublished";
    case Draft = "draft";

    public function getLabel(): string
    {
        return match ($this) {
            self::Published => 'published',
            self::Unpublished => 'borrowed',
            self::Draft => 'unavailable',
        };
    }
}

