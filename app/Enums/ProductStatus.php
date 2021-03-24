<?php

namespace App\Enums;

use BenSampo\Enum\Enum;

/**
 * @method static static Pending()
 * @method static static Scheduled()
 * @method static static Publoshed()
 * @method static static Archived()
 */
final class ProductStatus extends Enum
{
    const Pending =   0;
    const Scheduled = 1;
    const Publoshed = 2;
    const Archived = 3;
}
