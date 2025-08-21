<?php

namespace App\Filament\Resources\MortgageRequests\Schemas;

use Filament\Infolists\Components\TextEntry;
use Filament\Schemas\Schema;

class MortgageRequestInfolist
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextEntry::make('user_id')
                    ->numeric(),
                TextEntry::make('house_id')
                    ->numeric(),
                TextEntry::make('interest_id')
                    ->numeric(),
                TextEntry::make('duration')
                    ->numeric(),
                TextEntry::make('bank_name'),
                TextEntry::make('interest')
                    ->numeric(),
                TextEntry::make('dp_total_amount')
                    ->numeric(),
                TextEntry::make('dp_percentage')
                    ->numeric(),
                TextEntry::make('loan_total_amount')
                    ->numeric(),
                TextEntry::make('loan_interest_total_amount')
                    ->numeric(),
                TextEntry::make('house_price')
                    ->numeric(),
                TextEntry::make('monthly_amount')
                    ->numeric(),
                TextEntry::make('status'),
                TextEntry::make('documents'),
                TextEntry::make('created_at')
                    ->dateTime(),
                TextEntry::make('updated_at')
                    ->dateTime(),
                TextEntry::make('deleted_at')
                    ->dateTime(),
            ]);
    }
}
