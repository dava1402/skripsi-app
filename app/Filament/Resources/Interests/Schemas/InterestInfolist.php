<?php

namespace App\Filament\Resources\Interests\Schemas;

use Filament\Infolists\Components\TextEntry;
use Filament\Schemas\Schema;

class InterestInfolist
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextEntry::make('house_id')
                    ->numeric(),
                TextEntry::make('bank_id')
                    ->numeric(),
                TextEntry::make('interest')
                    ->numeric(),
                TextEntry::make('duration')
                    ->numeric(),
                TextEntry::make('created_at')
                    ->dateTime(),
                TextEntry::make('updated_at')
                    ->dateTime(),
                TextEntry::make('deleted_at')
                    ->dateTime(),
            ]);
    }
}
