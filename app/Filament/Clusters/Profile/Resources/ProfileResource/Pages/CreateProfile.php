<?php

declare(strict_types=1);

namespace Modules\Gdpr\Filament\Clusters\Profile\Resources\ProfileResource\Pages;

<<<<<<< HEAD
use Modules\Xot\Filament\Resources\Pages\XotBaseCreateRecord;
use Modules\Gdpr\Filament\Clusters\Profile\Resources\ProfileResource;

class CreateProfile extends XotBaseCreateRecord
=======
use Modules\Gdpr\Filament\Clusters\Profile\Resources\ProfileResource;

class CreateProfile extends \Modules\Xot\Filament\Resources\Pages\XotBaseCreateRecord
>>>>>>> 5a85228 (.)
{
    protected static string $resource = ProfileResource::class;
}
