<?php

declare(strict_types=1);

namespace Modules\Gdpr\Filament\Resources;

<<<<<<< HEAD
use Override;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Modules\Gdpr\Filament\Resources\EventResource\Pages\ListEvents;
use Modules\Gdpr\Filament\Resources\EventResource\Pages\CreateEvent;
use Modules\Gdpr\Filament\Resources\EventResource\Pages\EditEvent;
=======
>>>>>>> 5a85228 (.)
use Filament\Forms;
use Modules\Gdpr\Filament\Resources\EventResource\Pages;
use Modules\Gdpr\Models\Event;
use Modules\Xot\Filament\Resources\XotBaseResource;

class EventResource extends XotBaseResource
{
<<<<<<< HEAD
    protected static null|string $model = Event::class;

    protected static string | \BackedEnum | null $navigationIcon = 'heroicon-o-rectangle-stack';

    #[Override]
    public static function getFormSchema(): array
    {
        return [
            'treatment_id' => TextInput::make('treatment_id')->maxLength(36)->default(null),
            'consent_id' => Select::make('consent_id')->relationship('consent', 'id'),
            'subject_id' => TextInput::make('subject_id')->required()->maxLength(191),
            'ip' => TextInput::make('ip')->required()->maxLength(191),
            'action' => TextInput::make('action')->required()->maxLength(191),
            'payload' => Textarea::make('payload')->required()->columnSpanFull(),
        ];
    }

    #[Override]
    public static function getRelations(): array
    {
        return [];
    }

    #[Override]
    public static function getPages(): array
    {
        return [
            'index' => ListEvents::route('/'),
            'create' => CreateEvent::route('/create'),
            'edit' => EditEvent::route('/{record}/edit'),
=======
    protected static ?string $model = Event::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function getFormSchema(): array
    {
        /** @var array<string, \Filament\Forms\Components\Component> */
        return [
            'treatment_id' => Forms\Components\TextInput::make('treatment_id')
                ->maxLength(36)
                ->default(null),
            'consent_id' => Forms\Components\Select::make('consent_id')
                ->relationship('consent', 'id'),
            'subject_id' => Forms\Components\TextInput::make('subject_id')
                ->required()
                ->maxLength(191),
            'ip' => Forms\Components\TextInput::make('ip')
                ->required()
                ->maxLength(191),
            'action' => Forms\Components\TextInput::make('action')
                ->required()
                ->maxLength(191),
            'payload' => Forms\Components\Textarea::make('payload')
                ->required()
                ->columnSpanFull(),
        ];
    }

    public static function getRelations(): array
    {
        return [
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListEvents::route('/'),
            'create' => Pages\CreateEvent::route('/create'),
            'edit' => Pages\EditEvent::route('/{record}/edit'),
>>>>>>> 5a85228 (.)
        ];
    }
}
