<?php

declare(strict_types=1);

namespace Modules\Gdpr\Models;

<<<<<<< HEAD
use Spatie\SchemalessAttributes\SchemalessAttributes;
use Spatie\MediaLibrary\MediaCollections\Models\Collections\MediaCollection;
use Illuminate\Notifications\DatabaseNotificationCollection;
use Illuminate\Notifications\DatabaseNotification;
use Illuminate\Support\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Modules\User\Models\DeviceUser;
use Modules\User\Models\Device;
use Modules\Media\Models\Media;
use Modules\User\Models\Permission;
use Modules\User\Models\Role;
use Modules\User\Models\Team;
use Modules\Xot\Contracts\UserContract;
use Modules\Gdpr\Database\Factories\ProfileFactory;
use Illuminate\Database\Eloquent\Builder;
use Modules\User\Models\Membership;
use Modules\Xot\Contracts\ProfileContract;
=======
>>>>>>> 5a85228 (.)
use Modules\User\Models\BaseProfile;

/**
 * Modules\Gdpr\Models\Profile.
 *
 * @property int                                                                                                           $id
 * @property string|null                                                                                                   $type
 * @property string|null                                                                                                   $first_name
 * @property string|null                                                                                                   $last_name
 * @property string|null                                                                                                   $full_name
 * @property string|null                                                                                                   $email
<<<<<<< HEAD
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property string|null                                                                                                   $user_id
 * @property string|null                                                                                                   $updated_by
 * @property string|null                                                                                                   $created_by
 * @property Carbon|null $deleted_at
 * @property string|null                                                                                                   $deleted_by
 * @property bool                                                                                                          $is_active
 * @property SchemalessAttributes $extra
 * @property string $avatar
 * @property Collection<int, DeviceUser> $deviceUsers
 * @property int|null                                                                                                      $device_users_count
 * @property Collection<int, Device> $devices
 * @property int|null                                                                                                      $devices_count
 * @property MediaCollection<int, Media> $media
 * @property int|null                                                                                                      $media_count
 * @property Collection<int, DeviceUser> $mobileDeviceUsers
 * @property int|null                                                                                                      $mobile_device_users_count
 * @property Collection<int, Device> $mobileDevices
 * @property int|null                                                                                                      $mobile_devices_count
 * @property DatabaseNotificationCollection<int, DatabaseNotification> $notifications
 * @property int|null                                                                                                      $notifications_count
 * @property Collection<int, Permission> $permissions
 * @property int|null                                                                                                      $permissions_count
 * @property Collection<int, Role> $roles
 * @property int|null                                                                                                      $roles_count
 * @property Collection<int, Team> $teams
 * @property int|null                                                                                                      $teams_count
 * @property UserContract|null $user
 * @property string|null                                                                                                   $user_name
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
 * @property string|null $deleted_by
 * @property int         $is_active
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
 * @property string|null $deleted_by
 * @property int         $is_active
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
 * @property DeviceUser $pivot
 * @property Membership $membership
 * @property string $credits
 * @property string|null                                 $slug
 * @property ProfileContract|null $creator
 * @property ProfileContract|null $updater
 * @method static Builder|Profile whereCredits($value)
 * @method static Builder|Profile whereExtra($value)
 * @method static Builder|Profile whereSlug($value)
 * @property int $oauth_enable
 * @property int $credentials_enable
 * @method static Builder|Profile whereCredentialsEnable($value)
 * @method static Builder|Profile whereOauthEnable($value)
 * @property string $uuid
 * @method static Builder|Profile whereUuid($value)
=======
 * @property \Illuminate\Support\Carbon|null                                                                               $created_at
 * @property \Illuminate\Support\Carbon|null                                                                               $updated_at
 * @property string|null                                                                                                   $user_id
 * @property string|null                                                                                                   $updated_by
 * @property string|null                                                                                                   $created_by
 * @property \Illuminate\Support\Carbon|null                                                                               $deleted_at
 * @property string|null                                                                                                   $deleted_by
 * @property bool                                                                                                          $is_active
 * @property \Spatie\SchemalessAttributes\SchemalessAttributes                                                             $extra
 * @property string $avatar
 * @property \Illuminate\Database\Eloquent\Collection<int, \Modules\User\Models\DeviceUser>                                $deviceUsers
 * @property int|null                                                                                                      $device_users_count
 * @property \Illuminate\Database\Eloquent\Collection<int, \Modules\User\Models\Device>                                    $devices
 * @property int|null                                                                                                      $devices_count
 * @property \Spatie\MediaLibrary\MediaCollections\Models\Collections\MediaCollection<int, \Modules\Media\Models\Media>    $media
 * @property int|null                                                                                                      $media_count
 * @property \Illuminate\Database\Eloquent\Collection<int, \Modules\User\Models\DeviceUser>                                $mobileDeviceUsers
 * @property int|null                                                                                                      $mobile_device_users_count
 * @property \Illuminate\Database\Eloquent\Collection<int, \Modules\User\Models\Device>                                    $mobileDevices
 * @property int|null                                                                                                      $mobile_devices_count
 * @property \Illuminate\Notifications\DatabaseNotificationCollection<int, \Illuminate\Notifications\DatabaseNotification> $notifications
 * @property int|null                                                                                                      $notifications_count
 * @property \Illuminate\Database\Eloquent\Collection<int, \Modules\User\Models\Permission>                                $permissions
 * @property int|null                                                                                                      $permissions_count
 * @property \Illuminate\Database\Eloquent\Collection<int, \Modules\User\Models\Role>                                      $roles
 * @property int|null                                                                                                      $roles_count
 * @property \Illuminate\Database\Eloquent\Collection<int, \Modules\User\Models\Team>                                      $teams
 * @property int|null                                                                                                      $teams_count
 * @property \Modules\Xot\Contracts\UserContract|null                                                                      $user
 * @property string|null                                                                                                   $user_name
 * @method static \Modules\Gdpr\Database\Factories\ProfileFactory   factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|Profile     newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Profile     newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|BaseProfile permission($permissions, $without = false)
 * @method static \Illuminate\Database\Eloquent\Builder|Profile     query()
 * @method static \Illuminate\Database\Eloquent\Builder|BaseProfile role($roles, $guard = null, $without = false)
 * @method static \Illuminate\Database\Eloquent\Builder|Profile     whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Profile     whereCreatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Profile     whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Profile     whereDeletedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Profile     whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Profile     whereFirstName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Profile     whereFullName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Profile     whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Profile     whereIsActive($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Profile     whereLastName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Profile     whereType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Profile     whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Profile     whereUpdatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Profile     whereUserId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BaseProfile withExtraAttributes()
 * @method static \Illuminate\Database\Eloquent\Builder|BaseProfile withoutPermission($permissions)
 * @method static \Illuminate\Database\Eloquent\Builder|BaseProfile withoutRole($roles, $guard = null)
 * @property string|null $deleted_by
 * @property int         $is_active
 * @method static \Modules\Gdpr\Database\Factories\ProfileFactory   factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|Profile     newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Profile     newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|BaseProfile permission($permissions, $without = false)
 * @method static \Illuminate\Database\Eloquent\Builder|Profile     query()
 * @method static \Illuminate\Database\Eloquent\Builder|BaseProfile role($roles, $guard = null, $without = false)
 * @method static \Illuminate\Database\Eloquent\Builder|Profile     whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Profile     whereCreatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Profile     whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Profile     whereDeletedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Profile     whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Profile     whereFirstName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Profile     whereFullName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Profile     whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Profile     whereIsActive($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Profile     whereLastName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Profile     whereType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Profile     whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Profile     whereUpdatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Profile     whereUserId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BaseProfile withExtraAttributes()
 * @method static \Illuminate\Database\Eloquent\Builder|BaseProfile withoutPermission($permissions)
 * @method static \Illuminate\Database\Eloquent\Builder|BaseProfile withoutRole($roles, $guard = null)
 * @property string|null $deleted_by
 * @property int         $is_active
 * @method static \Modules\Gdpr\Database\Factories\ProfileFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|Profile   newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Profile   newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Profile   query()
 * @method static \Illuminate\Database\Eloquent\Builder|Profile   whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Profile   whereCreatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Profile   whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Profile   whereDeletedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Profile   whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Profile   whereFirstName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Profile   whereFullName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Profile   whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Profile   whereIsActive($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Profile   whereLastName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Profile   whereType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Profile   whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Profile   whereUpdatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Profile   whereUserId($value)
 * @property \Modules\User\Models\DeviceUser             $pivot
 * @property \Modules\User\Models\Membership             $membership
 * @property string $credits
 * @property string|null                                 $slug
 * @property \Modules\Xot\Contracts\ProfileContract|null $creator
 * @property \Modules\Xot\Contracts\ProfileContract|null $updater
 * @method static \Illuminate\Database\Eloquent\Builder|Profile whereCredits($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Profile whereExtra($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Profile whereSlug($value)
 * @property int $oauth_enable
 * @property int $credentials_enable
 * @method static \Illuminate\Database\Eloquent\Builder|Profile whereCredentialsEnable($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Profile whereOauthEnable($value)
 * @property string $uuid
 * @method static \Illuminate\Database\Eloquent\Builder|Profile whereUuid($value)
>>>>>>> 5a85228 (.)
 * @property string|null $phone
 * @property string|null $address
 * @property string|null $city
 * @property string|null $country
 * @property string|null $postal_code
 * @property string|null $bio
<<<<<<< HEAD
 * @method static Builder<static>|Profile whereAddress($value)
 * @method static Builder<static>|Profile whereAvatar($value)
 * @method static Builder<static>|Profile whereBio($value)
 * @method static Builder<static>|Profile whereCity($value)
 * @method static Builder<static>|Profile whereCountry($value)
 * @method static Builder<static>|Profile wherePhone($value)
 * @method static Builder<static>|Profile wherePostalCode($value)
=======
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Profile whereAddress($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Profile whereAvatar($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Profile whereBio($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Profile whereCity($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Profile whereCountry($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Profile wherePhone($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Profile wherePostalCode($value)
>>>>>>> 5a85228 (.)
 * @mixin IdeHelperProfile
 * @mixin \Eloquent
 */
class Profile extends BaseProfile
{
    /** @var string */
    protected $connection = 'gdpr';
}
