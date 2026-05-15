<?php

namespace App\Filament\Resources\CampaignRequests\Pages;

use App\Filament\Resources\CampaignRequests\CampaignRequestResource;
use Filament\Actions\ViewAction;
use Filament\Resources\Pages\EditRecord;

class EditCampaignRequest extends EditRecord
{
    protected static string $resource = CampaignRequestResource::class;

    protected function getHeaderActions(): array
    {
        return [
            ViewAction::make()
                ->label('مشاهده'),
        ];
    }
}
