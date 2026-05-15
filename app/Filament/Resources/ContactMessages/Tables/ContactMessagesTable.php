<?php

namespace App\Filament\Resources\ContactMessages\Tables;

use App\Enums\AdminRequestStatus;
use Filament\Actions\EditAction;
use Filament\Actions\ViewAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Filters\SelectFilter;
use Filament\Tables\Table;

class ContactMessagesTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('full_name')
                    ->label('نام و نام خانوادگی')
                    ->searchable()
                    ->sortable(),
                TextColumn::make('phone')
                    ->label('تلفن')
                    ->searchable(),
                TextColumn::make('email')
                    ->label('ایمیل')
                    ->searchable(),
                TextColumn::make('subject')
                    ->label('موضوع')
                    ->toggleable(isToggledHiddenByDefault: true),
                TextColumn::make('status')
                    ->label('وضعیت')
                    ->badge()
                    ->searchable()
                    ->sortable(),
                TextColumn::make('admin_notes')
                    ->label('یادداشت ادمین')
                    ->limit(40)
                    ->placeholder('-')
                    ->toggleable(isToggledHiddenByDefault: true),
                TextColumn::make('created_at')
                    ->label('تاریخ ثبت')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                SelectFilter::make('status')
                    ->label('فیلتر وضعیت')
                    ->options(AdminRequestStatus::options()),
            ])
            ->recordActions([
                ViewAction::make()
                    ->label('مشاهده'),
                EditAction::make()
                    ->label('ویرایش'),
            ]);
    }
}
