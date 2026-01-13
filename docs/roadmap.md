# Roadmap for Gdpr Module

## PHPMD Issues

### LongVariable
- [ ] `app/Datas/GdprData.php:53`: Avoid excessively long variable names like `$cookie_banner_enabled`. Keep variable name length under 20.
- [ ] `app/Filament/Pages/EditProfile.php:11`: Avoid excessively long variable names like `$shouldRegisterNavigation`. Keep variable name length under 20.

### UnusedFormalParameter
- [ ] `app/Models/Policies/ConsentPolicy.php:23`: Avoid unused parameters such as '$_consent'.
- [ ] `app/Models/Policies/ConsentPolicy.php:39`: Avoid unused parameters such as '$_consent'.
- [ ] `app/Models/Policies/ConsentPolicy.php:47`: Avoid unused parameters such as '$_consent'.
- [ ] `app/Models/Policies/ConsentPolicy.php:55`: Avoid unused parameters such as '$_consent'.
- [ ] `app/Models/Policies/ConsentPolicy.php:63`: Avoid unused parameters such as '$consent'.
- [ ] `app/Models/Policies/EventPolicy.php:23`: Avoid unused parameters such as '$_event'.
- [ ] `app/Models/Policies/EventPolicy.php:39`: Avoid unused parameters such as '$_event'.
- [ ] `app/Models/Policies/EventPolicy.php:47`: Avoid unused parameters such as '$_event'.
- [ ] `app/Models/Policies/EventPolicy.php:55`: Avoid unused parameters such as '$_event'.
- [ ] `app/Models/Policies/EventPolicy.php:63`: Avoid unused parameters such as '$event'.
- [ ] `app/Models/Policies/GdprBasePolicy.php:15`: Avoid unused parameters such as '$_ability'.
- [ ] `app/Models/Policies/ProfilePolicy.php:23`: Avoid unused parameters such as '$_profile'.
- [ ] `app/Models/Policies/ProfilePolicy.php:39`: Avoid unused parameters such as '$_profile'.
- [ ] `app/Models/Policies/ProfilePolicy.php:47`: Avoid unused parameters such as '$_profile'.
- [ ] `app/Models/Policies/ProfilePolicy.php:55`: Avoid unused parameters such as '$_profile'.
- [ ] `app/Models/Policies/ProfilePolicy.php:63`: Avoid unused parameters such as '$profile'.
- [ ] `app/Models/Policies/TreatmentPolicy.php:23`: Avoid unused parameters such as '$_treatment'.
- [ ] `app/Models/Policies/TreatmentPolicy.php:39`: Avoid unused parameters such as '$_treatment'.
- [ ] `app/Models/Policies/TreatmentPolicy.php:47`: Avoid unused parameters such as '$_treatment'.
- [ ] `app/Models/Policies/TreatmentPolicy.php:55`: Avoid unused parameters such as '$_treatment'.
- [ ] `app/Models/Policies/TreatmentPolicy.php:63`: Avoid unused parameters such as '$treatment'.
- [ ] `tests/TestCase.php:37`: Avoid unused parameters such as '$app'.

### UnusedLocalVariable
- [ ] `app/Models/Policies/GdprBasePolicy.php:17`: Avoid unused local variables such as '$xotData'.

### BooleanArgumentFlag
- [ ] `app/Models/Traits/HasGdpr.php:63`: The method `hasGivenConsent` has a boolean flag argument `$cached`, which is a certain sign of a Single Responsibility Principle violation.

## PHPStan Issues
- [x] No errors found.

## PHPInsights Issues
- [ ] Unable to run due to missing composer.lock file.