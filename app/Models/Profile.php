<?php

declare(strict_types=1);

namespace Modules\Gdpr\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Notifications\DatabaseNotification;
use Illuminate\Notifications\DatabaseNotificationCollection;
use Illuminate\Support\Carbon;
use Modules\Gdpr\Database\Factories\ProfileFactory;
<<<<<<< HEAD
use Modules\Media\Models\Media;
use Modules\User\Models\BaseProfile;
use Modules\User\Models\Device;
use Modules\User\Models\DeviceUser;
use Modules\User\Models\Membership;
use Modules\User\Models\Permission;
use Modules\User\Models\Role;
use Modules\User\Models\Team;
use Modules\Xot\Contracts\ProfileContract;
use Modules\Xot\Contracts\UserContract;
use Spatie\MediaLibrary\MediaCollections\Models\Collections\MediaCollection;
=======
use Modules\User\Models\BaseProfile;
use Modules\User\Models\Device;
use Modules\User\Models\DeviceProfile;
use Modules\User\Models\DeviceUser;
use Modules\User\Models\Permission;
use Modules\User\Models\Role;
use Modules\User\Models\User;
use Modules\Xot\Contracts\ProfileContract;
use Spatie\MediaLibrary\MediaCollections\Models\Collections\MediaCollection;
use Spatie\MediaLibrary\MediaCollections\Models\Media;
>>>>>>> laraxot/develop
use Spatie\SchemalessAttributes\SchemalessAttributes;

/**
 * Modules\Gdpr\Models\Profile.
 *
<<<<<<< HEAD
 * @property int $id
 * @property string|null $type
 * @property string|null $first_name
 * @property string|null $last_name
 * @property string|null $full_name
 * @property string|null $email
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property string|null $user_id
 * @property string|null $updated_by
 * @property string|null $created_by
 * @property Carbon|null $deleted_at
 * @property string|null $deleted_by
 * @property bool $is_active
 * @property SchemalessAttributes $extra
 * @property string $avatar
 * @property Collection<int, DeviceUser> $deviceUsers
 * @property int|null $device_users_count
 * @property Collection<int, Device> $devices
 * @property int|null $devices_count
 * @property MediaCollection<int, Media> $media
 * @property int|null $media_count
 * @property Collection<int, DeviceUser> $mobileDeviceUsers
 * @property int|null $mobile_device_users_count
 * @property Collection<int, Device> $mobileDevices
 * @property int|null $mobile_devices_count
 * @property DatabaseNotificationCollection<int, DatabaseNotification> $notifications
 * @property int|null $notifications_count
 * @property Collection<int, Permission> $permissions
 * @property int|null $permissions_count
 * @property Collection<int, Role> $roles
 * @property int|null $roles_count
 * @property Collection<int, Team> $teams
 * @property int|null $teams_count
 * @property UserContract|null $user
 * @property string|null $user_name
 *
 * @method static ProfileFactory factory($count = null, $state = [])
 * @method static Builder|Profile newModelQuery()
 * @method static Builder|Profile newQuery()
 * @method static Builder|BaseProfile permission($permissions, $without = false)
 * @method static Builder|Profile query()
 * @method static Builder|BaseProfile role($roles, $guard = null, $without = false)
 * @method static Builder|Profile whereCreatedAt($value)
 * @method static Builder|Profile whereCreatedBy($value)
 * @method static Builder|Profile whereDeletedAt($value)
 * @method static Builder|Profile whereDeletedBy($value)
 * @method static Builder|Profile whereEmail($value)
 * @method static Builder|Profile whereFirstName($value)
 * @method static Builder|Profile whereFullName($value)
 * @method static Builder|Profile whereId($value)
 * @method static Builder|Profile whereIsActive($value)
 * @method static Builder|Profile whereLastName($value)
 * @method static Builder|Profile whereType($value)
 * @method static Builder|Profile whereUpdatedAt($value)
 * @method static Builder|Profile whereUpdatedBy($value)
 * @method static Builder|Profile whereUserId($value)
 * @method static Builder|BaseProfile withExtraAttributes()
 * @method static Builder|BaseProfile withoutPermission($permissions)
 * @method static Builder|BaseProfile withoutRole($roles, $guard = null)
 *
 * @property string|null $deleted_by
 * @property int $is_active
 *
 * @method static ProfileFactory factory($count = null, $state = [])
 * @method static Builder|Profile newModelQuery()
 * @method static Builder|Profile newQuery()
 * @method static Builder|BaseProfile permission($permissions, $without = false)
 * @method static Builder|Profile query()
 * @method static Builder|BaseProfile role($roles, $guard = null, $without = false)
 * @method static Builder|Profile whereCreatedAt($value)
 * @method static Builder|Profile whereCreatedBy($value)
 * @method static Builder|Profile whereDeletedAt($value)
 * @method static Builder|Profile whereDeletedBy($value)
 * @method static Builder|Profile whereEmail($value)
 * @method static Builder|Profile whereFirstName($value)
 * @method static Builder|Profile whereFullName($value)
 * @method static Builder|Profile whereId($value)
 * @method static Builder|Profile whereIsActive($value)
 * @method static Builder|Profile whereLastName($value)
 * @method static Builder|Profile whereType($value)
 * @method static Builder|Profile whereUpdatedAt($value)
 * @method static Builder|Profile whereUpdatedBy($value)
 * @method static Builder|Profile whereUserId($value)
 * @method static Builder|BaseProfile withExtraAttributes()
 * @method static Builder|BaseProfile withoutPermission($permissions)
 * @method static Builder|BaseProfile withoutRole($roles, $guard = null)
 *
 * @property string|null $deleted_by
 * @property int $is_active
 *
 * @method static ProfileFactory factory($count = null, $state = [])
 * @method static Builder|Profile newModelQuery()
 * @method static Builder|Profile newQuery()
 * @method static Builder|Profile query()
 * @method static Builder|Profile whereCreatedAt($value)
 * @method static Builder|Profile whereCreatedBy($value)
 * @method static Builder|Profile whereDeletedAt($value)
 * @method static Builder|Profile whereDeletedBy($value)
 * @method static Builder|Profile whereEmail($value)
 * @method static Builder|Profile whereFirstName($value)
 * @method static Builder|Profile whereFullName($value)
 * @method static Builder|Profile whereId($value)
 * @method static Builder|Profile whereIsActive($value)
 * @method static Builder|Profile whereLastName($value)
 * @method static Builder|Profile whereType($value)
 * @method static Builder|Profile whereUpdatedAt($value)
 * @method static Builder|Profile whereUpdatedBy($value)
 * @method static Builder|Profile whereUserId($value)
 *
 * @property DeviceUser $pivot
 * @property Membership $membership
 * @property string $credits
 * @property string|null $slug
 * @property ProfileContract|null $creator
 * @property ProfileContract|null $updater
 *
 * @method static Builder|Profile whereCredits($value)
 * @method static Builder|Profile whereExtra($value)
 * @method static Builder|Profile whereSlug($value)
 *
 * @property int $oauth_enable
 * @property int $credentials_enable
 *
 * @method static Builder|Profile whereCredentialsEnable($value)
 * @method static Builder|Profile whereOauthEnable($value)
 *
 * @property string $uuid
 *
 * @method static Builder|Profile whereUuid($value)
 *
 * @property string|null $phone
 * @property string|null $address
 * @property string|null $city
 * @property string|null $country
 * @property string|null $postal_code
 * @property string|null $bio
 *
 * @method static Builder<static>|Profile whereAddress($value)
 * @method static Builder<static>|Profile whereAvatar($value)
 * @method static Builder<static>|Profile whereBio($value)
 * @method static Builder<static>|Profile whereCity($value)
 * @method static Builder<static>|Profile whereCountry($value)
 * @method static Builder<static>|Profile wherePhone($value)
 * @method static Builder<static>|Profile wherePostalCode($value)
 *
 * @mixin IdeHelperProfile
=======
 * @property string $id
 * @property string|null $post_type
 * @property string|null $bio
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property string|null $created_by
 * @property string|null $updated_by
 * @property string|null $deleted_by
 * @property string|null $first_name
 * @property string|null $surname
 * @property string|null $email
 * @property string|null $phone
 * @property string|null $address
 * @property string|null $user_id
 * @property string|null $last_name
 * @property string|null $tax_code
 * @property string|null $vat_number
 * @property Carbon|null $deleted_at
 * @property SchemalessAttributes $extra
 * @property-read string $avatar
 * @property-read ProfileContract|null $creator
 * @property-read Collection<int, DeviceUser> $deviceUsers
 * @property-read int|null $device_users_count
 * @property-read DeviceProfile|null $pivot
 * @property-read Collection<int, Device> $devices
 * @property-read int|null $devices_count
 * @property-read string|null $full_name
 * @property-read MediaCollection<int, Media> $media
 * @property-read int|null $media_count
 * @property-read Collection<int, DeviceUser> $mobileDeviceUsers
 * @property-read int|null $mobile_device_users_count
 * @property-read Collection<int, Device> $mobileDevices
 * @property-read int|null $mobile_devices_count
 * @property-read DatabaseNotificationCollection<int, DatabaseNotification> $notifications
 * @property-read int|null $notifications_count
 * @property-read Collection<int, Permission> $permissions
 * @property-read int|null $permissions_count
 * @property-read Collection<int, Role> $roles
 * @property-read int|null $roles_count
 * @property-read ProfileContract|null $updater
 * @property-read User|null $user
 * @property-read string|null $user_name
 *
 * @method static ProfileFactory factory($count = null, $state = [])
 * @method static Builder<static>|Profile newModelQuery()
 * @method static Builder<static>|Profile newQuery()
 * @method static Builder<static>|Profile permission($permissions, $without = false)
 * @method static Builder<static>|Profile query()
 * @method static Builder<static>|Profile role($roles, $guard = null, $without = false)
 * @method static Builder<static>|Profile whereAddress($value)
 * @method static Builder<static>|Profile whereBio($value)
 * @method static Builder<static>|Profile whereCreatedAt($value)
 * @method static Builder<static>|Profile whereCreatedBy($value)
 * @method static Builder<static>|Profile whereDeletedAt($value)
 * @method static Builder<static>|Profile whereDeletedBy($value)
 * @method static Builder<static>|Profile whereEmail($value)
 * @method static Builder<static>|Profile whereFirstName($value)
 * @method static Builder<static>|Profile whereId($value)
 * @method static Builder<static>|Profile whereLastName($value)
 * @method static Builder<static>|Profile wherePhone($value)
 * @method static Builder<static>|Profile wherePostType($value)
 * @method static Builder<static>|Profile whereSurname($value)
 * @method static Builder<static>|Profile whereTaxCode($value)
 * @method static Builder<static>|Profile whereUpdatedAt($value)
 * @method static Builder<static>|Profile whereUpdatedBy($value)
 * @method static Builder<static>|Profile whereUserId($value)
 * @method static Builder<static>|Profile whereVatNumber($value)
 * @method static Builder<static>|Profile withExtraAttributes()
 * @method static Builder<static>|Profile withoutPermission($permissions)
 * @method static Builder<static>|Profile withoutRole($roles, $guard = null)
 *
 * @property-read \Modules\Xot\Contracts\ProfileContract|null $deleter
 *
>>>>>>> laraxot/develop
 * @mixin \Eloquent
 */
class Profile extends BaseProfile
{
    /** @var string */
    protected $connection = 'gdpr';
}
