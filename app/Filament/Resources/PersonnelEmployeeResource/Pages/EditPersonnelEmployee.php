<?php

namespace App\Filament\Resources\PersonnelEmployeeResource\Pages;

use App\Filament\Resources\PersonnelEmployeeResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditPersonnelEmployee extends EditRecord
{
    protected static string $resource = PersonnelEmployeeResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\ViewAction::make(),
            Actions\DeleteAction::make(),
        ];
    }
}
