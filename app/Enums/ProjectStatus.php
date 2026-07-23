<?php

namespace App\Enums;

enum ProjectStatus: string
{
    case DEVELOPMENT = 'development';
    case WRITING = 'writing';
    case REVIEW = 'review';
    case COMPLETED = 'completed';
    case ARCHIVED = 'archived';

    public function label(): string
    {
        return match ($this) {
            self::DEVELOPMENT => 'قيد التطوير',
            self::WRITING => 'قيد الكتابة',
            self::REVIEW => 'قيد المراجعة',
            self::COMPLETED => 'مكتمل',
            self::ARCHIVED => 'مؤرشف',
        };
    }
}