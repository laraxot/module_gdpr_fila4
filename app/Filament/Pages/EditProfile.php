<?php

declare(strict_types=1);

namespace Modules\Gdpr\Filament\Pages;

<<<<<<< HEAD
use Modules\Xot\Filament\Pages\Auth\XotBaseEditProfile;

class EditProfile extends XotBaseEditProfile
=======
<<<<<<< HEAD
class EditProfile extends \Filament\Auth\Pages\EditProfile
=======
use Filament\Pages\Auth\EditProfile as BaseEditProfile;

class EditProfile extends BaseEditProfile
>>>>>>> 5a85228 (.)
>>>>>>> ead2100a (.)
{
    protected static bool $shouldRegisterNavigation = true;

    protected static bool $isDiscovered = false;
}
