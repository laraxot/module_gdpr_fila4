<?php

declare(strict_types=1);

namespace Modules\Gdpr\Enums;

<<<<<<< HEAD
use Filament\Forms\Components\TextInput;
use Filament\Support\Contracts\HasColor;
use Filament\Support\Contracts\HasIcon;
use Filament\Support\Contracts\HasLabel;
use Illuminate\Support\Arr;
use Illuminate\Support\Collection;
=======
use Illuminate\Support\Collection;
use Illuminate\Support\Arr;
use Filament\Support\Contracts\HasIcon;
use Filament\Forms\Components\TextInput;
use Filament\Support\Contracts\HasColor;
use Filament\Support\Contracts\HasLabel;
>>>>>>> 5a85228 (.)
use Modules\Xot\Filament\Traits\TransTrait;

/**
 * Enum ConsentType
<<<<<<< HEAD
 *
=======
 * 
>>>>>>> 5a85228 (.)
 * Defines all available consent types in the application.
 * Each consent type must have a corresponding translation key in the language files.
 */
enum ConsentType: string implements HasLabel, HasIcon, HasColor
{
<<<<<<< HEAD
    use TransTrait;

=======

    use TransTrait;
>>>>>>> 5a85228 (.)
    // Marketing communications
    case MARKETING_EMAIL = 'marketing_email';
    case MARKETING_SMS = 'marketing_sms';
    case MARKETING_PHONE = 'marketing_phone';
<<<<<<< HEAD

=======
    
>>>>>>> 5a85228 (.)
    // Privacy and data processing
    case PRIVACY_POLICY = 'privacy_policy';
    case COOKIES = 'cookies';
    case ANALYTICS = 'analytics';
    case PERSONALIZATION = 'personalization';
<<<<<<< HEAD

    // Data sharing
    case THIRD_PARTY_SHARING = 'third_party_sharing';
    case DATA_TRANSFER = 'data_transfer';

    // Account related
    case TERMS_AND_CONDITIONS = 'terms_and_conditions';
    case AGE_VERIFICATION = 'age_verification';

=======
    
    // Data sharing
    case THIRD_PARTY_SHARING = 'third_party_sharing';
    case DATA_TRANSFER = 'data_transfer';
    
    // Account related
    case TERMS_AND_CONDITIONS = 'terms_and_conditions';
    case AGE_VERIFICATION = 'age_verification';
    
>>>>>>> 5a85228 (.)
    // Special consents
    case RESEARCH = 'research';
    case PROFILING = 'profiling';
    case AUTOMATED_DECISION_MAKING = 'automated_decision_making';

    public function getLabel(): string
    {
<<<<<<< HEAD
        return $this->transClass(self::class, $this->value . '.label');
=======
        return $this->transClass(self::class,$this->value.'.label');
>>>>>>> 5a85228 (.)
    }

    public function getColor(): string
    {
<<<<<<< HEAD
        return $this->transClass(self::class, $this->value . '.color');
=======
        return $this->transClass(self::class,$this->value.'.color');

>>>>>>> 5a85228 (.)
    }

    public function getIcon(): string
    {
<<<<<<< HEAD
        return $this->transClass(self::class, $this->value . '.icon');
=======
        return $this->transClass(self::class,$this->value.'.icon');
>>>>>>> 5a85228 (.)
    }

    public function getDescription(): string
    {
<<<<<<< HEAD
        return $this->transClass(self::class, $this->value . '.description');
=======
        return $this->transClass(self::class,$this->value.'.description');
>>>>>>> 5a85228 (.)
    }

    /**
     * Check if this consent type is required for using the service.
<<<<<<< HEAD
     *
=======
     * 
>>>>>>> 5a85228 (.)
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
        ]);
>>>>>>> 5a85228 (.)
    }

    /**
     * Get all required consent types.
<<<<<<< HEAD
     *
=======
     * 
>>>>>>> 5a85228 (.)
     * @return array<string>
     */
    public static function getRequiredConsentTypes(): array
    {
<<<<<<< HEAD
        return array_map(fn(self $type) => $type->value, array_filter(
            self::cases(),
            fn(self $type) => $type->isRequired(),
        ));
=======
        return array_map(
            fn (self $type) => $type->value,
            array_filter(self::cases(), fn (self $type) => $type->isRequired())
        );
>>>>>>> 5a85228 (.)
    }

    /**
     * Get all optional consent types.
<<<<<<< HEAD
     *
=======
     * 
>>>>>>> 5a85228 (.)
     * @return array<string>
     */
    public static function getOptionalConsentTypes(): array
    {
        return array_map(
<<<<<<< HEAD
            fn(self $type) => $type->value,
            array_filter(self::cases(), fn(self $type) => !$type->isRequired()),
=======
            fn (self $type) => $type->value,
            array_filter(self::cases(), fn (self $type) => !$type->isRequired())
>>>>>>> 5a85228 (.)
        );
    }

    /*
     * Get consent types grouped by category.
<<<<<<< HEAD
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
=======
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
    
>>>>>>> 5a85228 (.)
}
