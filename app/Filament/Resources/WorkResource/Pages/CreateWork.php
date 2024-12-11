<?php

namespace App\Filament\Resources\WorkResource\Pages;

use App\Filament\Resources\WorkResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;
use Filament\Notifications\Notification;

class CreateWork extends CreateRecord
{
    protected static string $resource = WorkResource::class;

    protected function getRedirectUrl(): string {
        return $this->getResource()::getUrl('index');
    }

    protected function getCreatedNotification(): ?Notification {
        return Notification::make()
        ->success()
        ->title('Work created')
        ->body('The work has been created successfully.');
    }
}
