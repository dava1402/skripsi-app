<?php

namespace App\Filament\Resources\MortgageRequests\Pages;

use App\Filament\Resources\MortgageRequests\MortgageRequestResource;
use Filament\Actions\EditAction;
use Filament\Resources\Pages\ViewRecord;

class ViewMortgageRequest extends ViewRecord
{
    protected static string $resource = MortgageRequestResource::class;

    protected function getHeaderActions(): array
    {
        return [
            EditAction::make(),
        ];
    }
}
