<?php

namespace App\Enums;

use App\Services\TranslationService;

enum GenderEnum: int
{
    case MALE = 1;
    case FEMALE = 2;

    /**
     * @return array<int>
     */
    public static function toArray(): array
    {
        $array = [];
        foreach (self::cases() as $case) {
            $array[] = $case->value;
        }

        return $array;
    }

    /**
     * @return array<string, string|int>
     */
    public function label(): array
    {
        $locale = TranslationService::getLocale();

        return match ($this) {
            self::MALE => ['id' => 1, 'name' => $locale === 'en' ? 'Male' : 'ذكر'],
            self::FEMALE => ['id' => 2, 'name' => $locale === 'en' ? 'Female' : 'انثى'],
        };
    }
}
