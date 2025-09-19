<?php

declare(strict_types=1);

namespace Modules\Gdpr\Enums;

<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> ceb9f4f (.)
use Filament\Forms\Components\TextInput;
use Filament\Support\Contracts\HasColor;
use Filament\Support\Contracts\HasIcon;
use Filament\Support\Contracts\HasLabel;
use Illuminate\Support\Arr;
use Illuminate\Support\Collection;
<<<<<<< HEAD
=======
use Illuminate\Support\Collection;
use Illuminate\Support\Arr;
use Filament\Support\Contracts\HasIcon;
use Filament\Forms\Components\TextInput;
use Filament\Support\Contracts\HasColor;
use Filament\Support\Contracts\HasLabel;
>>>>>>> 0c1819a (.)
=======
>>>>>>> ceb9f4f (.)
use Modules\Xot\Filament\Traits\TransTrait;

/**
 * Enum ConsentType
<<<<<<< HEAD
<<<<<<< HEAD
 *
=======
 * 
>>>>>>> 0c1819a (.)
=======
 *
>>>>>>> ceb9f4f (.)
 * Defines all available consent types in the application.
 * Each consent type must have a corresponding translation key in the language files.
 */
enum ConsentType: string implements HasLabel, HasIcon, HasColor
{
<<<<<<< HEAD
<<<<<<< HEAD
    use TransTrait;

=======

    use TransTrait;
>>>>>>> 0c1819a (.)
=======
    use TransTrait;

>>>>>>> ceb9f4f (.)
    // Marketing communications
    case MARKETING_EMAIL = 'marketing_email';
    case MARKETING_SMS = 'marketing_sms';
    case MARKETING_PHONE = 'marketing_phone';
<<<<<<< HEAD
<<<<<<< HEAD

=======
    
>>>>>>> 0c1819a (.)
=======

>>>>>>> ceb9f4f (.)
    // Privacy and data processing
    case PRIVACY_POLICY = 'privacy_policy';
    case COOKIES = 'cookies';
    case ANALYTICS = 'analytics';
    case PERSONALIZATION = 'personalization';
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> ceb9f4f (.)

    // Data sharing
    case THIRD_PARTY_SHARING = 'third_party_sharing';
    case DATA_TRANSFER = 'data_transfer';

    // Account related
    case TERMS_AND_CONDITIONS = 'terms_and_conditions';
    case AGE_VERIFICATION = 'age_verification';

<<<<<<< HEAD
=======
    
    // Data sharing
    case THIRD_PARTY_SHARING = 'third_party_sharing';
    case DATA_TRANSFER = 'data_transfer';
    
    // Account related
    case TERMS_AND_CONDITIONS = 'terms_and_conditions';
    case AGE_VERIFICATION = 'age_verification';
    
>>>>>>> 0c1819a (.)
=======
>>>>>>> ceb9f4f (.)
    // Special consents
    case RESEARCH = 'research';
    case PROFILING = 'profiling';
    case AUTOMATED_DECISION_MAKING = 'automated_decision_making';

    public function getLabel(): string
    {
<<<<<<< HEAD
<<<<<<< HEAD
        return $this->transClass(self::class, $this->value . '.label');
=======
        return $this->transClass(self::class,$this->value.'.label');
>>>>>>> 0c1819a (.)
=======
        return $this->transClass(self::class, $this->value . '.label');
>>>>>>> ceb9f4f (.)
    }

    public function getColor(): string
    {
<<<<<<< HEAD
<<<<<<< HEAD
        return $this->transClass(self::class, $this->value . '.color');
=======
        return $this->transClass(self::class,$this->value.'.color');

>>>>>>> 0c1819a (.)
=======
        return $this->transClass(self::class, $this->value . '.color');
>>>>>>> ceb9f4f (.)
    }

    public function getIcon(): string
    {
<<<<<<< HEAD
<<<<<<< HEAD
        return $this->transClass(self::class, $this->value . '.icon');
=======
        return $this->transClass(self::class,$this->value.'.icon');
>>>>>>> 0c1819a (.)
=======
        return $this->transClass(self::class, $this->value . '.icon');
>>>>>>> ceb9f4f (.)
    }

    public function getDescription(): string
    {
<<<<<<< HEAD
<<<<<<< HEAD
        return $this->transClass(self::class, $this->value . '.description');
=======
        return $this->transClass(self::class,$this->value.'.description');
>>>>>>> 0c1819a (.)
=======
        return $this->transClass(self::class, $this->value . '.description');
>>>>>>> ceb9f4f (.)
    }

    /**
     * Check if this consent type is required for using the service.
<<<<<<< HEAD
<<<<<<< HEAD
     *
=======
     * 
>>>>>>> 0c1819a (.)
=======
     *
>>>>>>> ceb9f4f (.)
     * @return bool
     */
    public function isRequired(): bool
    {
        return in_array($this, [
            self::PRIVACY_POLICY,
            self::TERMS_AND_CONDITIONS,
            self::AGE_VERIFICATION,
<<<<<<< HEAD
<<<<<<< HEAD
        ], strict: true);
=======
        ]);
>>>>>>> 0c1819a (.)
=======
        ], strict: true);
>>>>>>> ceb9f4f (.)
    }

    /**
     * Get all required consent types.
<<<<<<< HEAD
<<<<<<< HEAD
     *
=======
     * 
>>>>>>> 0c1819a (.)
=======
     *
>>>>>>> ceb9f4f (.)
     * @return array<string>
     */
    public static function getRequiredConsentTypes(): array
    {
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> ceb9f4f (.)
        return array_map(fn(self $type) => $type->value, array_filter(
            self::cases(),
            fn(self $type) => $type->isRequired(),
        ));
<<<<<<< HEAD
=======
        return array_map(
            fn (self $type) => $type->value,
            array_filter(self::cases(), fn (self $type) => $type->isRequired())
        );
>>>>>>> 0c1819a (.)
=======
>>>>>>> ceb9f4f (.)
    }

    /**
     * Get all optional consent types.
<<<<<<< HEAD
<<<<<<< HEAD
     *
=======
     * 
>>>>>>> 0c1819a (.)
=======
     *
>>>>>>> ceb9f4f (.)
     * @return array<string>
     */
    public static function getOptionalConsentTypes(): array
    {
        return array_map(
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> ceb9f4f (.)
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
            fn (self $type) => $type->value,
            array_filter(self::cases(), fn (self $type) => !$type->isRequired())
        );
    }

    /**
     * Get consent types grouped by category.
     * 
     * @return array<string, array<string, string>>
     */
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

    
>>>>>>> 0c1819a (.)
=======
>>>>>>> ceb9f4f (.)
}
