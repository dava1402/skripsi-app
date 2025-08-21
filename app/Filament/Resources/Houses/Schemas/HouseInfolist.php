<?php

namespace App\Filament\Resources\Houses\Schemas;

use Filament\Infolists\Components\TextEntry;
use Filament\Schemas\Schema;

class HouseInfolist
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextEntry::make('name'),
                TextEntry::make('slug'),
                TextEntry::make('thumbnail'),
                TextEntry::make('certificate'),
                TextEntry::make('price')
                    ->money(),
                TextEntry::make('bedroom')
                    ->numeric(),
                TextEntry::make('bathroom')
                    ->numeric(),
                TextEntry::make('electric')
                    ->numeric(),
                TextEntry::make('land_area')
                    ->numeric(),
                TextEntry::make('building_area')
                    ->numeric(),
                TextEntry::make('category_id')
                    ->numeric(),
                TextEntry::make('city_id')
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
