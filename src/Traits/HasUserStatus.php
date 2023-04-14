<?php

namespace Atin\LaravelUserStatuses\Traits;

use Atin\LaravelUserStatuses\Enums\UserStatus;

trait HasUserStatus
{
    public function isBlocked(): bool
    {
        return $this->status === UserStatus::Blocked;
    }
}