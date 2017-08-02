<?php

/*
 * This file is part of Laravel Rewardable.
 *
 * (c) Brian Faust <hello@brianfaust.me>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace BrianFaust\Rewardable\Exceptions;

use Exception;

class InvalidCreditTypeException extends Exception
{
    public function __construct($typeId)
    {
        parent::__construct("Credit Type with ID [{$typeId}] does not exist.");
    }
}
