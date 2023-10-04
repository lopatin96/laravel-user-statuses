<?php

namespace Atin\LaravelUserStatuses\Traits;

use App\Models\User;
use Atin\LaravelUserStatuses\Enums\UserStatus;
use Illuminate\Database\Eloquent\Builder;

trait HasUserStatus
{
    public function isBlocked(): bool
    {
        return $this->status === UserStatus::Blocked;
    }

    public function scopeActive(Builder $query): void
    {
        $query->where('status', '=', UserStatus::Active);
    }

    public function scopeRestricted(Builder $query): void
    {
        $query->where('status', '=', UserStatus::Restricted);
    }

    public function scopeBlocked(Builder $query): void
    {
        $query->where('status', '=', UserStatus::Blocked);
    }
}