<?php

namespace App\Filament\Admin\Resources\ServicesResource\Pages;

use App\Filament\Admin\Resources\ServicesResource;
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
