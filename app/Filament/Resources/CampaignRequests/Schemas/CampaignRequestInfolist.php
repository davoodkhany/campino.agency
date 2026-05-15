<?php

namespace App\Filament\Resources\CampaignRequests\Schemas;

use Filament\Infolists\Components\TextEntry;
use Filament\Schemas\Schema;

class CampaignRequestInfolist
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextEntry::make('brand_name')
                    ->label('نام برند'),
                TextEntry::make('full_name')
                    ->label('نام و نام خانوادگی'),
                TextEntry::make('phone')
                    ->label('تلفن'),
                TextEntry::make('email')
                    ->label('ایمیل')
                    ->placeholder('-'),
                TextEntry::make('business_type')
                    ->label('نوع کسب‌وکار'),
                TextEntry::make('product_name')
                    ->label('نام محصول'),
                TextEntry::make('product_price')
                    ->label('قیمت محصول'),
                TextEntry::make('campaign_goal')
                    ->label('هدف کمپین'),
                TextEntry::make('estimated_budget')
                    ->label('بودجه تقریبی'),
                TextEntry::make('campaign_duration')
                    ->label('مدت زمان کمپین'),
                TextEntry::make('current_channels')
                    ->label('کانال‌های فعلی')
                    ->placeholder('-')
                    ->columnSpanFull(),
                TextEntry::make('website_url')
                    ->label('وب‌سایت')
                    ->placeholder('-'),
                TextEntry::make('description')
                    ->label('توضیحات')
                    ->columnSpanFull(),
                TextEntry::make('status')
                    ->label('وضعیت')
                    ->badge(),
                TextEntry::make('admin_notes')
                    ->label('یادداشت ادمین')
                    ->placeholder('-')
                    ->columnSpanFull(),
                TextEntry::make('created_at')
                    ->label('تاریخ ثبت')
                    ->dateTime()
                    ->placeholder('-'),
                TextEntry::make('updated_at')
                    ->label('آخرین بروزرسانی')
                    ->dateTime()
                    ->placeholder('-'),
            ]);
    }
}
