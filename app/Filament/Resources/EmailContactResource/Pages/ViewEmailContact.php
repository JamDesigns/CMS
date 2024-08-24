<?php

namespace App\Filament\Resources\ContactResource\Pages;

use App\Filament\Resources\EmailContactResource;
use Filament\Actions\EditAction;
use Filament\Resources\Pages\ViewRecord;

class ViewEmailContact extends ViewRecord
{
    protected static string $resource = EmailContactResource::class;

    protected function getHeaderActions(): array
    {
        return [
            EditAction::make(),
        ];
    }
}
