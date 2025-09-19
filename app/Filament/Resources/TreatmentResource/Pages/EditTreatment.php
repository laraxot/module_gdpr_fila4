<?php

declare(strict_types=1);

namespace Modules\Gdpr\Filament\Resources\TreatmentResource\Pages;

<<<<<<< HEAD
use Modules\Xot\Filament\Resources\Pages\XotBaseEditRecord;
use Modules\Gdpr\Filament\Resources\TreatmentResource;

class EditTreatment extends XotBaseEditRecord
=======
use Modules\Gdpr\Filament\Resources\TreatmentResource;

class EditTreatment extends \Modules\Xot\Filament\Resources\Pages\XotBaseEditRecord
>>>>>>> 5a85228 (.)
{
    protected static string $resource = TreatmentResource::class;
}
