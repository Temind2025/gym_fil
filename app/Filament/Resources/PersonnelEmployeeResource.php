<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PersonnelEmployeeResource\Pages;
use App\Filament\Resources\PersonnelEmployeeResource\RelationManagers;
use App\Models\PersonnelEmployee;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class PersonnelEmployeeResource extends Resource
{
    protected static ?string $model = PersonnelEmployee::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                //
                Forms\Components\TextInput::make('emp_code'),
                Forms\Components\TextInput::make('first_name'),
                Forms\Components\TextInput::make('last_name'),
                Forms\Components\DatePicker::make('hire_date'),
                Forms\Components\TextInput::make('status'),
                Forms\Components\TextInput::make('is_active'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('emp_code'),
                Tables\Columns\TextColumn::make('first_name'),
                Tables\Columns\TextColumn::make('last_name'),
                Tables\Columns\TextColumn::make('hire_date'),
                Tables\Columns\TextColumn::make('status'),
                Tables\Columns\TextColumn::make('is_active'),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\ViewAction::make(),
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListPersonnelEmployees::route('/'),
            'create' => Pages\CreatePersonnelEmployee::route('/create'),
            'view' => Pages\ViewPersonnelEmployee::route('/{record}'),
            'edit' => Pages\EditPersonnelEmployee::route('/{record}/edit'),
        ];
    }
}
