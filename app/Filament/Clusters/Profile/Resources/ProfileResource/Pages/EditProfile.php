<?php

declare(strict_types=1);

namespace Modules\Gdpr\Filament\Clusters\Profile\Resources\ProfileResource\Pages;

<<<<<<< HEAD
use Modules\Xot\Filament\Resources\Pages\XotBaseEditRecord;
use Modules\Gdpr\Filament\Clusters\Profile\Resources\ProfileResource;

class EditProfile extends XotBaseEditRecord
=======
use Modules\Gdpr\Filament\Clusters\Profile\Resources\ProfileResource;

class EditProfile extends \Modules\Xot\Filament\Resources\Pages\XotBaseEditRecord
>>>>>>> 5a85228 (.)
{
    protected static string $resource = ProfileResource::class;
}
