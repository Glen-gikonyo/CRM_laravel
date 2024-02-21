<?php

namespace App\Filament\Resources\DealsResource\Pages;

use App\Filament\Resources\DealsResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditDeals extends EditRecord
{
    protected static string $resource = DealsResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
