<?php

namespace App\Enums;

use BenSampo\Enum\Enum;

/**
 * @method static static OptionOne()
 * @method static static OptionTwo()
 * @method static static OptionThree()
 */
final class UserGroup extends Enum
{
    const Administrator =   0;
    const Manager =   1;
    const Customer = 2;
}
