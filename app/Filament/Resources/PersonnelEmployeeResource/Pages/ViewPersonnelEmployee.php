<?php

namespace App\Filament\Resources\PersonnelEmployeeResource\Pages;

use App\Filament\Resources\PersonnelEmployeeResource;
use Filament\Actions;
use Filament\Resources\Pages\ViewRecord;

class ViewPersonnelEmployee extends ViewRecord
{
    protected static string $resource = PersonnelEmployeeResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\EditAction::make(),
        ];
    }
}
