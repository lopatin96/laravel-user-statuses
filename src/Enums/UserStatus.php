<?php

namespace Atin\LaravelUserStatuses\Enums;

enum UserStatus: string
{
    case Active = 'active';
    case Restricted = 'restricted';
    case Blocked = 'blocked';
}
