<?php

namespace App\Filament\Resources\PersonnelEmployeeResource\Pages;

use App\Filament\Resources\PersonnelEmployeeResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListPersonnelEmployees extends ListRecords
{
    protected static string $resource = PersonnelEmployeeResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
