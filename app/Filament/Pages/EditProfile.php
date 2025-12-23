<?php

declare(strict_types=1);

namespace Modules\Gdpr\Filament\Pages;

<<<<<<< HEAD
class EditProfile extends \Filament\Auth\Pages\EditProfile
=======
use Modules\Xot\Filament\Pages\Auth\XotBaseEditProfile;

class EditProfile extends XotBaseEditProfile
>>>>>>> laraxot/develop
{
    protected static bool $shouldRegisterNavigation = true;

    protected static bool $isDiscovered = false;
}
