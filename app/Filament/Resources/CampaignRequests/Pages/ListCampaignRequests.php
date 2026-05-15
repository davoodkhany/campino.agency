<?php

namespace App\Filament\Resources\CampaignRequests\Pages;

use App\Filament\Resources\CampaignRequests\CampaignRequestResource;
use Filament\Resources\Pages\ListRecords;

class ListCampaignRequests extends ListRecords
{
    protected static string $resource = CampaignRequestResource::class;

    protected function getHeaderActions(): array
    {
        return [];
    }
}
