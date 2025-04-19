<?php

namespace SFS\ResetPassword\Tables\Actions;

use Filament\Tables\Actions\Action;
use SFS\ResetPassword\Concerns\ResetPassword as ConcernsResetPassword;
use STS\FilamentImpersonate\Concerns\Impersonates;

class ResetPassword extends Action
{
    use ConcernsResetPassword;

    protected function setUp(): void
    {
        parent::setUp();

        $this
            ->label('Reset Password')
            ->iconButton()
            ->icon('impersonate-icon')
            ->action(fn ($record) => $this->reset_password($record));
    }
}
