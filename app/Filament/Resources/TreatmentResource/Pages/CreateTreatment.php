<?php

declare(strict_types=1);

namespace Modules\Gdpr\Filament\Resources\TreatmentResource\Pages;

<<<<<<< HEAD
use Modules\Xot\Filament\Resources\Pages\XotBaseCreateRecord;
use Modules\Gdpr\Filament\Resources\TreatmentResource;

class CreateTreatment extends XotBaseCreateRecord
=======
use Modules\Gdpr\Filament\Resources\TreatmentResource;

class CreateTreatment extends \Modules\Xot\Filament\Resources\Pages\XotBaseCreateRecord
>>>>>>> 5a85228 (.)
{
    protected static string $resource = TreatmentResource::class;
}
