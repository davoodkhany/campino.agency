<?php

namespace App\Enums;

use Filament\Support\Contracts\HasColor;
use Filament\Support\Contracts\HasLabel;

enum AdminRequestStatus: string implements HasColor, HasLabel
{
    case New = 'new';
    case InProgress = 'in_progress';
    case Completed = 'completed';
    case Rejected = 'rejected';

    public function getLabel(): ?string
    {
        return match ($this) {
            self::New => 'جدید',
            self::InProgress => 'در حال بررسی',
            self::Completed => 'انجام شده',
            self::Rejected => 'رد شده',
        };
    }

    public function getColor(): string|array|null
    {
        return match ($this) {
            self::New => 'gray',
            self::InProgress => 'warning',
            self::Completed => 'success',
            self::Rejected => 'danger',
        };
    }

    /**
     * @return array<string, string>
     */
    public static function options(): array
    {
        $options = [];

        foreach (self::cases() as $status) {
            $options[$status->value] = $status->getLabel() ?? $status->value;
        }

        return $options;
    }
}
