<?php

declare(strict_types=1);

namespace Modules\Gdpr\Actions;

use Illuminate\Support\Facades\Log;
use Modules\User\Models\User;
use Spatie\QueueableAction\QueueableAction;

/**
 * Action per la gestione delle notifiche di successo/errore registrazione.
 *
 * Estende QueueableAction per separazione responsabilità.
 */
class HandleRegistrationAction extends QueueableAction
{
    /**
     * Handle successful registration.
     *
     * @param array<string> $data
     */
    public function execute(User $user, array $data): void
    {
        Log::info('Registration successful', [
            'user_id' => $user->id,
            'user_email' => $user->email,
            'redirect_to' => $data['redirect_to'] ?? 'dashboard',
            'ip' => request()->ip(),
            'user_agent' => request()->userAgent(),
        ]);
    }

    /**
     * Handle registration errors.
     *
     * @param array<string> $data
     */
    public function execute(\Exception $exception, array $data): void
    {
        Log::error('Registration failed', [
            'exception' => get_class($exception),
            'message' => $exception->getMessage(),
            'ip' => request()->ip(),
            'user_agent' => request()->userAgent(),
            'form_data' => $data,
        ]);
    }

    /**
     * Get tags for the action.
     *
     * @return array<string>
     */
    public function tags(): array
    {
        return ['user', 'registration', 'notification'];
    }

    /**
     * Get the display name for the action.
     */
    public function displayName(): string
    {
        return 'Handle Registration Action';
    }

    /**
     * Get the description for the action.
     */
    public function description(): string
    {
        return 'Handles registration success/error notifications and logging.';
    }
}
