<?php

namespace App\Filament\Resources\CampaignRequests;

use App\Filament\Resources\CampaignRequests\Pages\EditCampaignRequest;
use App\Filament\Resources\CampaignRequests\Pages\ListCampaignRequests;
use App\Filament\Resources\CampaignRequests\Pages\ViewCampaignRequest;
use App\Filament\Resources\CampaignRequests\Schemas\CampaignRequestForm;
use App\Filament\Resources\CampaignRequests\Schemas\CampaignRequestInfolist;
use App\Filament\Resources\CampaignRequests\Tables\CampaignRequestsTable;
use App\Models\CampaignRequest;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;
use UnitEnum;

class CampaignRequestResource extends Resource
{
    protected static ?string $model = CampaignRequest::class;

    protected static ?string $modelLabel = 'درخواست کمپین';

    protected static ?string $pluralModelLabel = 'درخواست‌های کمپین';

    protected static ?string $navigationLabel = 'درخواست‌های کمپین';

    protected static string|UnitEnum|null $navigationGroup = 'فرم‌های سایت';

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    public static function form(Schema $schema): Schema
    {
        return CampaignRequestForm::configure($schema);
    }

    public static function infolist(Schema $schema): Schema
    {
        return CampaignRequestInfolist::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return CampaignRequestsTable::configure($table);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => ListCampaignRequests::route('/'),
            'view' => ViewCampaignRequest::route('/{record}'),
            'edit' => EditCampaignRequest::route('/{record}/edit'),
        ];
    }
}
