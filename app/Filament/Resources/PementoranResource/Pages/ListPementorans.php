<?php

namespace App\Filament\Resources\PementoranResource\Pages;

use App\Filament\Resources\PementoranResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListPementorans extends ListRecords
{
    protected static string $resource = PementoranResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
