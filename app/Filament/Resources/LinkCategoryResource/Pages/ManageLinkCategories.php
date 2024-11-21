<?php

namespace App\Filament\Resources\LinkCategoryResource\Pages;

use App\Filament\Resources\LinkCategoryResource;
use Filament\Actions;
use Filament\Resources\Pages\ManageRecords;

class ManageLinkCategories extends ManageRecords
{
    protected static string $resource = LinkCategoryResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
