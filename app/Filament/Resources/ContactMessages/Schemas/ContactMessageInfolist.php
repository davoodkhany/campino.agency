<?php

namespace App\Filament\Resources\ContactMessages\Schemas;

use Filament\Infolists\Components\TextEntry;
use Filament\Schemas\Schema;

class ContactMessageInfolist
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextEntry::make('full_name')
                    ->label('نام و نام خانوادگی'),
                TextEntry::make('phone')
                    ->label('تلفن')
                    ->placeholder('-'),
                TextEntry::make('email')
                    ->label('ایمیل')
                    ->placeholder('-'),
                TextEntry::make('subject')
                    ->label('موضوع'),
                TextEntry::make('message')
                    ->label('متن پیام')
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
