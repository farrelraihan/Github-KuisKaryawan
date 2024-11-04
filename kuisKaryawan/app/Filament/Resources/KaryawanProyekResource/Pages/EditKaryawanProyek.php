<?php

namespace App\Filament\Resources\KaryawanProyekResource\Pages;

use App\Filament\Resources\KaryawanProyekResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditKaryawanProyek extends EditRecord
{
    protected static string $resource = KaryawanProyekResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
