<?php

namespace App\Filament\Resources\CorporateServiceResource\Pages;

use App\Filament\Resources\CorporateServiceResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditCorporateService extends EditRecord
{
    protected static string $resource = CorporateServiceResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
