<?php

namespace App\Filament\Resources\PementoranResource\Pages;

use App\Filament\Resources\PementoranResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditPementoran extends EditRecord
{
    protected static string $resource = PementoranResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
