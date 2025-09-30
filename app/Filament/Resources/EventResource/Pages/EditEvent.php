<?php

declare(strict_types=1);

namespace Modules\Gdpr\Filament\Resources\EventResource\Pages;

<<<<<<< HEAD
use Modules\Xot\Filament\Resources\Pages\XotBaseEditRecord;
use Modules\Gdpr\Filament\Resources\EventResource;

class EditEvent extends XotBaseEditRecord
=======
use Modules\Gdpr\Filament\Resources\EventResource;

class EditEvent extends \Modules\Xot\Filament\Resources\Pages\XotBaseEditRecord
>>>>>>> 5a85228 (.)
{
    protected static string $resource = EventResource::class;
}
