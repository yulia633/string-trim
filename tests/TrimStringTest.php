<?php

namespace Yulia633\TrimString\Tests;

use PHPUnit\Framework\TestCase;
use Yulia633\TrimString\TrimString;

class TrimStringTest extends TestCase
{
    public function testSuccess()
    {
        $currentString = "Пример очень длинной строки, о которой все писали в новостях,
        а также читали в интернет иточниках. Об этом примере очень длинной строки,
        мы вспомним ни раз, и не два.";

        $trimmed = new TrimString();
        $exampleString = $trimmed->trim($currentString, 10, '...');
        $expectedString = "Пример очень длинной строки, о которой все писали в ...";

        $this->assertEquals($expectedString, $exampleString);
    }

    public function testStringEmpty()
    {
        $currentString = '';

        $trimmed = new TrimString();
        $this->expectExceptionMessage("Значение не должно быть пустым.");
        $exampleString = $trimmed->trim($currentString, 10, '...');
    }
}
