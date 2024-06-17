<?php

declare(strict_types=1);

namespace Yulia633\TrimString;

use Yulia633\TrimString\Exceptions\TrimStringException;

class TrimString
{
    public function trim(string $string, int $limit, string $end = '...'): string
    {
        if ($string === '') {
            throw new TrimStringException();
        }

        $words = explode(' ', $string, $limit);

        if (count($words) === $limit) {
            $words[$limit - 1] = $end;
        }

        return implode(' ', $words);
    }
}
