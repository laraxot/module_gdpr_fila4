<?php

declare(strict_types=1);

namespace Modules\Gdpr\Filament\Pages;

<<<<<<< HEAD
<<<<<<< HEAD
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
>>>>>>> cb4c895 (.)
=======
class EditProfile extends \Filament\Auth\Pages\EditProfile
>>>>>>> a4541bf (.)
=======
class EditProfile extends \Filament\Auth\Pages\EditProfile
=======
<<<<<<< HEAD
class EditProfile extends \Filament\Auth\Pages\EditProfile
=======
use Filament\Pages\Auth\EditProfile as BaseEditProfile;

class EditProfile extends BaseEditProfile
>>>>>>> origin/develop
>>>>>>> 5562af7 (.)
>>>>>>> fdd1830 (.)
{
    protected static bool $shouldRegisterNavigation = true;

    protected static bool $isDiscovered = false;
}
