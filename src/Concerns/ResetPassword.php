<?php

namespace SFS\ResetPassword\Concerns;

use Closure;
use Filament\Facades\Filament;
use Filament\Notifications\Auth\ResetPassword as FilamentResetPassword;
use Filament\Notifications\Notification as FilamentNotification;

trait ResetPassword
{
    protected Closure|string|null $guard = null;

    protected Closure|string|null $backTo = null;

    public static function getDefaultName(): ?string
    {
        return 'impersonate';
    }

    public function guard(Closure|string $guard): self
    {
        $this->guard = $guard;

        return $this;
    }

    public function backTo(Closure|string $backTo): self
    {
        $this->backTo = $backTo;

        return $this;
    }

    public function getGuard(): string
    {
        return $this->evaluate($this->guard) ?? Filament::getCurrentPanel()->getAuthGuard();
    }

    public function getBackTo(): ?string
    {
        return $this->evaluate($this->backTo);
    }

    public function reset_password($record)
    {
        $token = app('auth.password.broker')->createToken($record);
        $notification = new FilamentResetPassword($token);
        $notification->url = Filament::getResetPasswordUrl($token, $record);
        $record->notify($notification);

        FilamentNotification::make()
            ->title('The password reset email is sent successfully!')
            ->success()
            ->send();
    }
}