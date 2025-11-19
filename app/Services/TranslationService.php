<?php

namespace App\Services;

class TranslationService
{
    public static function getLocale(): string
    {
        return app()->getLocale();
    }
}
