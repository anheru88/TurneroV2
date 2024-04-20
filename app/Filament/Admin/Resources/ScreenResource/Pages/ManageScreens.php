<?php

namespace App\Filament\Admin\Resources\ScreenResource\Pages;

use App\Filament\Admin\Resources\ScreenResource;
use Filament\Actions;
use Filament\Resources\Pages\ManageRecords;

class ManageScreens extends ManageRecords
{
    protected static string $resource = ScreenResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
