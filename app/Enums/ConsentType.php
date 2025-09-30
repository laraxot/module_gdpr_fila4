<?php

declare(strict_types=1);

namespace Modules\Gdpr\Enums;

<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 5562af7 (.)
use Filament\Forms\Components\TextInput;
use Filament\Support\Contracts\HasColor;
use Filament\Support\Contracts\HasIcon;
use Filament\Support\Contracts\HasLabel;
use Illuminate\Support\Arr;
use Illuminate\Support\Collection;
<<<<<<< HEAD
=======
=======
use Illuminate\Support\Collection;
use Illuminate\Support\Arr;
use Filament\Support\Contracts\HasIcon;
=======
>>>>>>> b93ef594b4 (.)
use Filament\Forms\Components\TextInput;
use Filament\Support\Contracts\HasColor;
use Filament\Support\Contracts\HasIcon;
use Filament\Support\Contracts\HasLabel;
<<<<<<< HEAD
>>>>>>> a12f125f4a (.)
=======
use Illuminate\Support\Arr;
use Illuminate\Support\Collection;
>>>>>>> b93ef594b4 (.)
>>>>>>> 5562af7 (.)
use Modules\Xot\Filament\Traits\TransTrait;

/**
 * Enum ConsentType
<<<<<<< HEAD
 *
=======
<<<<<<< HEAD
<<<<<<< HEAD
 *
=======
 * 
>>>>>>> a12f125f4a (.)
=======
 *
>>>>>>> b93ef594b4 (.)
>>>>>>> 5562af7 (.)
 * Defines all available consent types in the application.
 * Each consent type must have a corresponding translation key in the language files.
 */
enum ConsentType: string implements HasLabel, HasIcon, HasColor
{
<<<<<<< HEAD
    use TransTrait;

=======
<<<<<<< HEAD
<<<<<<< HEAD
    use TransTrait;

=======

    use TransTrait;
>>>>>>> a12f125f4a (.)
=======
    use TransTrait;

>>>>>>> b93ef594b4 (.)
=======
use Illuminate\Support\Collection;

/**
 * Enum ConsentType
 * 
 * Defines all available consent types in the application.
 * Each consent type must have a corresponding translation key in the language files.
 */
enum ConsentType: string
{

>>>>>>> origin/develop
>>>>>>> 5562af7 (.)
    // Marketing communications
    case MARKETING_EMAIL = 'marketing_email';
    case MARKETING_SMS = 'marketing_sms';
    case MARKETING_PHONE = 'marketing_phone';
<<<<<<< HEAD

=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD

=======
    
>>>>>>> a12f125f4a (.)
=======

>>>>>>> b93ef594b4 (.)
=======
    
>>>>>>> origin/develop
>>>>>>> 5562af7 (.)
    // Privacy and data processing
    case PRIVACY_POLICY = 'privacy_policy';
    case COOKIES = 'cookies';
    case ANALYTICS = 'analytics';
    case PERSONALIZATION = 'personalization';
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 5562af7 (.)

    // Data sharing
    case THIRD_PARTY_SHARING = 'third_party_sharing';
    case DATA_TRANSFER = 'data_transfer';

    // Account related
    case TERMS_AND_CONDITIONS = 'terms_and_conditions';
    case AGE_VERIFICATION = 'age_verification';

<<<<<<< HEAD
=======
=======
    
=======

>>>>>>> b93ef594b4 (.)
    // Data sharing
    case THIRD_PARTY_SHARING = 'third_party_sharing';
    case DATA_TRANSFER = 'data_transfer';

    // Account related
    case TERMS_AND_CONDITIONS = 'terms_and_conditions';
    case AGE_VERIFICATION = 'age_verification';
<<<<<<< HEAD
    
>>>>>>> a12f125f4a (.)
=======

>>>>>>> b93ef594b4 (.)
=======
    
    // Data sharing
    case THIRD_PARTY_SHARING = 'third_party_sharing';
    case DATA_TRANSFER = 'data_transfer';
    
    // Account related
    case TERMS_AND_CONDITIONS = 'terms_and_conditions';
    case AGE_VERIFICATION = 'age_verification';
    
>>>>>>> origin/develop
>>>>>>> 5562af7 (.)
    // Special consents
    case RESEARCH = 'research';
    case PROFILING = 'profiling';
    case AUTOMATED_DECISION_MAKING = 'automated_decision_making';

<<<<<<< HEAD
    public function getLabel(): string
    {
        return $this->transClass(self::class, $this->value . '.label');
=======
<<<<<<< HEAD
    public function getLabel(): string
    {
<<<<<<< HEAD
<<<<<<< HEAD
        return $this->transClass(self::class, $this->value . '.label');
=======
        return $this->transClass(self::class,$this->value.'.label');
>>>>>>> a12f125f4a (.)
=======
        return $this->transClass(self::class, $this->value . '.label');
>>>>>>> b93ef594b4 (.)
>>>>>>> 5562af7 (.)
    }

    public function getColor(): string
    {
<<<<<<< HEAD
        return $this->transClass(self::class, $this->value . '.color');
=======
<<<<<<< HEAD
<<<<<<< HEAD
        return $this->transClass(self::class, $this->value . '.color');
=======
        return $this->transClass(self::class,$this->value.'.color');

>>>>>>> a12f125f4a (.)
=======
        return $this->transClass(self::class, $this->value . '.color');
>>>>>>> b93ef594b4 (.)
>>>>>>> 5562af7 (.)
    }

    public function getIcon(): string
    {
<<<<<<< HEAD
        return $this->transClass(self::class, $this->value . '.icon');
=======
<<<<<<< HEAD
<<<<<<< HEAD
        return $this->transClass(self::class, $this->value . '.icon');
=======
        return $this->transClass(self::class,$this->value.'.icon');
>>>>>>> a12f125f4a (.)
=======
        return $this->transClass(self::class, $this->value . '.icon');
>>>>>>> b93ef594b4 (.)
>>>>>>> 5562af7 (.)
    }

    public function getDescription(): string
    {
<<<<<<< HEAD
        return $this->transClass(self::class, $this->value . '.description');
=======
<<<<<<< HEAD
<<<<<<< HEAD
        return $this->transClass(self::class, $this->value . '.description');
=======
        return $this->transClass(self::class,$this->value.'.description');
>>>>>>> a12f125f4a (.)
=======
        return $this->transClass(self::class, $this->value . '.description');
>>>>>>> b93ef594b4 (.)
=======
    /**
     * Get the human-readable name of the consent type.
     * 
     * @return string
     */
    public function label(): string
    {
        return match($this) {
            self::MARKETING_EMAIL => __('gdpr::consent.types.marketing_email'),
            self::MARKETING_SMS => __('gdpr::consent.types.marketing_sms'),
            self::MARKETING_PHONE => __('gdpr::consent.types.marketing_phone'),
            self::PRIVACY_POLICY => __('gdpr::consent.types.privacy_policy'),
            self::COOKIES => __('gdpr::consent.types.cookies'),
            self::ANALYTICS => __('gdpr::consent.types.analytics'),
            self::PERSONALIZATION => __('gdpr::consent.types.personalization'),
            self::THIRD_PARTY_SHARING => __('gdpr::consent.types.third_party_sharing'),
            self::DATA_TRANSFER => __('gdpr::consent.types.data_transfer'),
            self::TERMS_AND_CONDITIONS => __('gdpr::consent.types.terms_and_conditions'),
            self::AGE_VERIFICATION => __('gdpr::consent.types.age_verification'),
            self::RESEARCH => __('gdpr::consent.types.research'),
            self::PROFILING => __('gdpr::consent.types.profiling'),
            self::AUTOMATED_DECISION_MAKING => __('gdpr::consent.types.automated_decision_making'),
        };
    }

    /**
     * Get the description of the consent type.
     * 
     * @return string
     */
    public function description(): string
    {
        return match($this) {
            self::MARKETING_EMAIL => __('gdpr::consent.descriptions.marketing_email'),
            self::MARKETING_SMS => __('gdpr::consent.descriptions.marketing_sms'),
            self::MARKETING_PHONE => __('gdpr::consent.descriptions.marketing_phone'),
            self::PRIVACY_POLICY => __('gdpr::consent.descriptions.privacy_policy'),
            self::COOKIES => __('gdpr::consent.descriptions.cookies'),
            self::ANALYTICS => __('gdpr::consent.descriptions.analytics'),
            self::PERSONALIZATION => __('gdpr::consent.descriptions.personalization'),
            self::THIRD_PARTY_SHARING => __('gdpr::consent.descriptions.third_party_sharing'),
            self::DATA_TRANSFER => __('gdpr::consent.descriptions.data_transfer'),
            self::TERMS_AND_CONDITIONS => __('gdpr::consent.descriptions.terms_and_conditions'),
            self::AGE_VERIFICATION => __('gdpr::consent.descriptions.age_verification'),
            self::RESEARCH => __('gdpr::consent.descriptions.research'),
            self::PROFILING => __('gdpr::consent.descriptions.profiling'),
            self::AUTOMATED_DECISION_MAKING => __('gdpr::consent.descriptions.automated_decision_making'),
        };
>>>>>>> origin/develop
>>>>>>> 5562af7 (.)
    }

    /**
     * Check if this consent type is required for using the service.
<<<<<<< HEAD
     *
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
     *
=======
     * 
>>>>>>> a12f125f4a (.)
=======
     *
>>>>>>> b93ef594b4 (.)
=======
     * 
>>>>>>> origin/develop
>>>>>>> 5562af7 (.)
     * @return bool
     */
    public function isRequired(): bool
    {
        return in_array($this, [
            self::PRIVACY_POLICY,
            self::TERMS_AND_CONDITIONS,
            self::AGE_VERIFICATION,
<<<<<<< HEAD
        ], strict: true);
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        ], strict: true);
=======
        ]);
>>>>>>> a12f125f4a (.)
=======
        ], strict: true);
>>>>>>> b93ef594b4 (.)
=======
        ]);
>>>>>>> origin/develop
>>>>>>> 5562af7 (.)
    }

    /**
     * Get all required consent types.
<<<<<<< HEAD
     *
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
     *
=======
     * 
>>>>>>> a12f125f4a (.)
=======
     *
>>>>>>> b93ef594b4 (.)
=======
     * 
>>>>>>> origin/develop
>>>>>>> 5562af7 (.)
     * @return array<string>
     */
    public static function getRequiredConsentTypes(): array
    {
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> b93ef594b4 (.)
>>>>>>> 5562af7 (.)
        return array_map(fn(self $type) => $type->value, array_filter(
            self::cases(),
            fn(self $type) => $type->isRequired(),
        ));
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
=======
>>>>>>> origin/develop
        return array_map(
            fn (self $type) => $type->value,
            array_filter(self::cases(), fn (self $type) => $type->isRequired())
        );
<<<<<<< HEAD
>>>>>>> a12f125f4a (.)
=======
>>>>>>> b93ef594b4 (.)
=======
>>>>>>> origin/develop
>>>>>>> 5562af7 (.)
    }

    /**
     * Get all optional consent types.
<<<<<<< HEAD
     *
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
     *
=======
     * 
>>>>>>> a12f125f4a (.)
=======
     *
>>>>>>> b93ef594b4 (.)
=======
     * 
>>>>>>> origin/develop
>>>>>>> 5562af7 (.)
     * @return array<string>
     */
    public static function getOptionalConsentTypes(): array
    {
        return array_map(
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 5562af7 (.)
            fn(self $type) => $type->value,
            array_filter(self::cases(), fn(self $type) => !$type->isRequired()),
        );
    }

    /*
     * Get consent types grouped by category.
     *
     * @return array<string, array<string, string>>
     *
     * public static function groupedByCategory(): array
     * {
     * return [
     * 'marketing' => [
     * self::MARKETING_EMAIL->value => self::MARKETING_EMAIL->label(),
     * self::MARKETING_SMS->value => self::MARKETING_SMS->label(),
     * self::MARKETING_PHONE->value => self::MARKETING_PHONE->label(),
     * ],
     * 'privacy' => [
     * self::PRIVACY_POLICY->value => self::PRIVACY_POLICY->label(),
     * self::COOKIES->value => self::COOKIES->label(),
     * self::ANALYTICS->value => self::ANALYTICS->label(),
     * self::PERSONALIZATION->value => self::PERSONALIZATION->label(),
     * ],
     * 'data_sharing' => [
     * self::THIRD_PARTY_SHARING->value => self::THIRD_PARTY_SHARING->label(),
     * self::DATA_TRANSFER->value => self::DATA_TRANSFER->label(),
     * ],
     * 'account' => [
     * self::TERMS_AND_CONDITIONS->value => self::TERMS_AND_CONDITIONS->label(),
     * self::AGE_VERIFICATION->value => self::AGE_VERIFICATION->label(),
     * ],
     * 'special' => [
     * self::RESEARCH->value => self::RESEARCH->label(),
     * self::PROFILING->value => self::PROFILING->label(),
     * self::AUTOMATED_DECISION_MAKING->value => self::AUTOMATED_DECISION_MAKING->label(),
     * ],
     * ];
     * }
     */
<<<<<<< HEAD
=======
=======
            fn (self $type) => $type->value,
            array_filter(self::cases(), fn (self $type) => !$type->isRequired())
=======
            fn(self $type) => $type->value,
            array_filter(self::cases(), fn(self $type) => !$type->isRequired()),
>>>>>>> b93ef594b4 (.)
        );
    }

    /*
     * Get consent types grouped by category.
     *
     * @return array<string, array<string, string>>
     *
     * public static function groupedByCategory(): array
     * {
     * return [
     * 'marketing' => [
     * self::MARKETING_EMAIL->value => self::MARKETING_EMAIL->label(),
     * self::MARKETING_SMS->value => self::MARKETING_SMS->label(),
     * self::MARKETING_PHONE->value => self::MARKETING_PHONE->label(),
     * ],
     * 'privacy' => [
     * self::PRIVACY_POLICY->value => self::PRIVACY_POLICY->label(),
     * self::COOKIES->value => self::COOKIES->label(),
     * self::ANALYTICS->value => self::ANALYTICS->label(),
     * self::PERSONALIZATION->value => self::PERSONALIZATION->label(),
     * ],
     * 'data_sharing' => [
     * self::THIRD_PARTY_SHARING->value => self::THIRD_PARTY_SHARING->label(),
     * self::DATA_TRANSFER->value => self::DATA_TRANSFER->label(),
     * ],
     * 'account' => [
     * self::TERMS_AND_CONDITIONS->value => self::TERMS_AND_CONDITIONS->label(),
     * self::AGE_VERIFICATION->value => self::AGE_VERIFICATION->label(),
     * ],
     * 'special' => [
     * self::RESEARCH->value => self::RESEARCH->label(),
     * self::PROFILING->value => self::PROFILING->label(),
     * self::AUTOMATED_DECISION_MAKING->value => self::AUTOMATED_DECISION_MAKING->label(),
     * ],
     * ];
     * }
     */
<<<<<<< HEAD
=======
            fn (self $type) => $type->value,
            array_filter(self::cases(), fn (self $type) => !$type->isRequired())
        );
    }

    /**
     * Get consent types grouped by category.
     * 
     * @return array<string, array<string, string>>
     */
>>>>>>> origin/develop
    public static function groupedByCategory(): array
    {
        return [
            'marketing' => [
                self::MARKETING_EMAIL->value => self::MARKETING_EMAIL->label(),
                self::MARKETING_SMS->value => self::MARKETING_SMS->label(),
                self::MARKETING_PHONE->value => self::MARKETING_PHONE->label(),
            ],
            'privacy' => [
                self::PRIVACY_POLICY->value => self::PRIVACY_POLICY->label(),
                self::COOKIES->value => self::COOKIES->label(),
                self::ANALYTICS->value => self::ANALYTICS->label(),
                self::PERSONALIZATION->value => self::PERSONALIZATION->label(),
            ],
            'data_sharing' => [
                self::THIRD_PARTY_SHARING->value => self::THIRD_PARTY_SHARING->label(),
                self::DATA_TRANSFER->value => self::DATA_TRANSFER->label(),
            ],
            'account' => [
                self::TERMS_AND_CONDITIONS->value => self::TERMS_AND_CONDITIONS->label(),
                self::AGE_VERIFICATION->value => self::AGE_VERIFICATION->label(),
            ],
            'special' => [
                self::RESEARCH->value => self::RESEARCH->label(),
                self::PROFILING->value => self::PROFILING->label(),
                self::AUTOMATED_DECISION_MAKING->value => self::AUTOMATED_DECISION_MAKING->label(),
            ],
        ];
    }

    
<<<<<<< HEAD
>>>>>>> a12f125f4a (.)
=======
>>>>>>> b93ef594b4 (.)
=======
>>>>>>> origin/develop
>>>>>>> 5562af7 (.)
}
