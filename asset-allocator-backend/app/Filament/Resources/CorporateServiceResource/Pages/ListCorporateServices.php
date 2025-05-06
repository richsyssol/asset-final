<?php

namespace App\Filament\Resources\CorporateServiceResource\Pages;

use App\Filament\Resources\CorporateServiceResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListCorporateServices extends ListRecords
{
    protected static string $resource = CorporateServiceResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
