<?php

namespace App\Filament\SuperAdmin\Resources\ServicesResource\Pages;

use App\Filament\SuperAdmin\Resources\ServicesResource;
use Filament\Actions;
use Filament\Resources\Pages\ManageRecords;

class ManageServices extends ManageRecords
{
    protected static string $resource = ServicesResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
