<?php

namespace App\Filament\Resources\ContactResource\Pages;

use App\Filament\Resources\EmailContactResource;
use Filament\Resources\Pages\ListRecords;

class ListEmailContacts extends ListRecords
{
    protected static string $resource = EmailContactResource::class;
}
