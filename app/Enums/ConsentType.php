<?php

declare(strict_types=1);

namespace Modules\Gdpr\Enums;

<<<<<<< HEAD
use Illuminate\Support\Collection;
use Illuminate\Support\Arr;
use Filament\Support\Contracts\HasIcon;
use Filament\Forms\Components\TextInput;
use Filament\Support\Contracts\HasColor;
use Filament\Support\Contracts\HasLabel;
=======
use Filament\Forms\Components\TextInput;
use Filament\Support\Contracts\HasColor;
use Filament\Support\Contracts\HasIcon;
use Filament\Support\Contracts\HasLabel;
use Illuminate\Support\Arr;
use Illuminate\Support\Collection;
>>>>>>> a074f99 (.)
use Modules\Xot\Filament\Traits\TransTrait;

/**
 * Enum ConsentType
<<<<<<< HEAD
 * 
=======
 *
>>>>>>> a074f99 (.)
 * Defines all available consent types in the application.
 * Each consent type must have a corresponding translation key in the language files.
 */
enum ConsentType: string implements HasLabel, HasIcon, HasColor
{
<<<<<<< HEAD

    use TransTrait;
=======
    use TransTrait;

>>>>>>> a074f99 (.)
    // Marketing communications
    case MARKETING_EMAIL = 'marketing_email';
    case MARKETING_SMS = 'marketing_sms';
    case MARKETING_PHONE = 'marketing_phone';

    // Privacy and data processing
    case PRIVACY_POLICY = 'privacy_policy';
    case COOKIES = 'cookies';
    case ANALYTICS = 'analytics';
    case PERSONALIZATION = 'personalization';

    // Data sharing
    case THIRD_PARTY_SHARING = 'third_party_sharing';
    case DATA_TRANSFER = 'data_transfer';

    // Account related
    case TERMS_AND_CONDITIONS = 'terms_and_conditions';
    case AGE_VERIFICATION = 'age_verification';

    // Special consents
    case RESEARCH = 'research';
    case PROFILING = 'profiling';
    case AUTOMATED_DECISION_MAKING = 'automated_decision_making';

    public function getLabel(): string
    {
<<<<<<< HEAD
        return $this->transClass(self::class,$this->value.'.label');
=======
        return $this->transClass(self::class, $this->value . '.label');
>>>>>>> a074f99 (.)
    }

    public function getColor(): string
    {
<<<<<<< HEAD
        return $this->transClass(self::class,$this->value.'.color');

=======
        return $this->transClass(self::class, $this->value . '.color');
>>>>>>> a074f99 (.)
    }

    public function getIcon(): string
    {
<<<<<<< HEAD
        return $this->transClass(self::class,$this->value.'.icon');
=======
        return $this->transClass(self::class, $this->value . '.icon');
>>>>>>> a074f99 (.)
    }

    public function getDescription(): string
    {
<<<<<<< HEAD
        return $this->transClass(self::class,$this->value.'.description');
=======
        return $this->transClass(self::class, $this->value . '.description');
>>>>>>> a074f99 (.)
    }

    /**
     * Check if this consent type is required for using the service.
<<<<<<< HEAD
     * 
=======
     *
>>>>>>> a074f99 (.)
     * @return bool
     */
    public function isRequired(): bool
    {
        return in_array($this, [
            self::PRIVACY_POLICY,
            self::TERMS_AND_CONDITIONS,
            self::AGE_VERIFICATION,
<<<<<<< HEAD
        ]);
=======
        ], strict: true);
>>>>>>> a074f99 (.)
    }

    /**
     * Get all required consent types.
<<<<<<< HEAD
     * 
=======
     *
>>>>>>> a074f99 (.)
     * @return array<string>
     */
    public static function getRequiredConsentTypes(): array
    {
<<<<<<< HEAD
        return array_map(
            fn (self $type) => $type->value,
            array_filter(self::cases(), fn (self $type) => $type->isRequired())
        );
=======
        return array_map(fn(self $type) => $type->value, array_filter(
            self::cases(),
            fn(self $type) => $type->isRequired(),
        ));
>>>>>>> a074f99 (.)
    }

    /**
     * Get all optional consent types.
<<<<<<< HEAD
     * 
=======
     *
>>>>>>> a074f99 (.)
     * @return array<string>
     */
    public static function getOptionalConsentTypes(): array
    {
        return array_map(
<<<<<<< HEAD
            fn (self $type) => $type->value,
            array_filter(self::cases(), fn (self $type) => !$type->isRequired())
=======
            fn(self $type) => $type->value,
            array_filter(self::cases(), fn(self $type) => !$type->isRequired()),
>>>>>>> a074f99 (.)
        );
    }

    /*
     * Get consent types grouped by category.
<<<<<<< HEAD
     * 
     * @return array<string, array<string, string>>

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
    */
    
=======
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
>>>>>>> a074f99 (.)
}
