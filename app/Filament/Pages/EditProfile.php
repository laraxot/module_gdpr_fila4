<?php

declare(strict_types=1);

namespace Modules\Gdpr\Filament\Pages;

<<<<<<< HEAD
class EditProfile extends \Filament\Auth\Pages\EditProfile
=======
use Filament\Pages\Auth\EditProfile as BaseEditProfile;

class EditProfile extends BaseEditProfile
>>>>>>> 5a85228 (.)
{
    protected static bool $shouldRegisterNavigation = true;

    protected static bool $isDiscovered = false;
}
