<?php

namespace App\Filament\Admin\Resources\TurnersResource\Pages;

use App\Filament\Admin\Resources\TurnersResource;
use Filament\Actions;
use Filament\Resources\Pages\ManageRecords;

class ManageTurners extends ManageRecords
{
    protected static string $resource = TurnersResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
