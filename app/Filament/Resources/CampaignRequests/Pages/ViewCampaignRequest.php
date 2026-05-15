<?php

namespace App\Filament\Resources\CampaignRequests\Pages;

use App\Filament\Resources\CampaignRequests\CampaignRequestResource;
use Filament\Actions\EditAction;
use Filament\Resources\Pages\ViewRecord;

class ViewCampaignRequest extends ViewRecord
{
    protected static string $resource = CampaignRequestResource::class;

    protected function getHeaderActions(): array
    {
        return [
            EditAction::make()
                ->label('ویرایش'),
        ];
    }
}
