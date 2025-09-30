<?php

declare(strict_types=1);

namespace Modules\Gdpr\Filament\Clusters\Profile\Resources\ConsentResource\Pages;

<<<<<<< HEAD
use Modules\Xot\Filament\Resources\Pages\XotBaseCreateRecord;
use Modules\Gdpr\Filament\Clusters\Profile\Resources\ConsentResource;

class CreateConsent extends XotBaseCreateRecord
=======
use Modules\Gdpr\Filament\Clusters\Profile\Resources\ConsentResource;

class CreateConsent extends \Modules\Xot\Filament\Resources\Pages\XotBaseCreateRecord
>>>>>>> 5a85228 (.)
{
    protected static string $resource = ConsentResource::class;
}
