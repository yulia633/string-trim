<?php

declare(strict_types=1);

namespace Yulia633\TrimString\Exceptions;

class TrimStringException extends \InvalidArgumentException
{
    protected $message = 'Значение не должно быть пустым.';
}
