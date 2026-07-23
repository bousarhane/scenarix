<?php

namespace App\Enums;

enum ProjectKind: string
{
    case FEATURE_FILM = 'feature_film';
    case SHORT_FILM = 'short_film';
    case TV_SERIES = 'tv_series';
    case MINI_SERIES = 'mini_series';

    public function label(): string
    {
        return match ($this) {
            self::FEATURE_FILM => 'فيلم طويل',
            self::SHORT_FILM => 'فيلم قصير',
            self::TV_SERIES => 'مسلسل تلفزيوني',
            self::MINI_SERIES => 'مسلسل قصير',
        };
    }
}