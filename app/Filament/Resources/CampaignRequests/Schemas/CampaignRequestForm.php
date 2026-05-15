<?php

namespace App\Filament\Resources\CampaignRequests\Schemas;

use App\Enums\AdminRequestStatus;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Schema;

class CampaignRequestForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Select::make('status')
                    ->label('وضعیت')
                    ->options(AdminRequestStatus::options())
                    ->native(false)
                    ->required()
                    ->default('new'),
                Textarea::make('admin_notes')
                    ->label('یادداشت ادمین')
                    ->rows(5)
                    ->placeholder('در صورت نیاز یادداشت داخلی ثبت کنید.')
                    ->columnSpanFull(),
            ]);
    }
}
