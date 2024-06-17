### О коде

Простая обрезка строк.

#### Пример использования

```php

<?php

$currentString = "Пример очень длинной строки, о которой все писали в новостях, а также
читали в интернет иточниках. Об этом примере очень длинной строки, мы вспомним ни раз,
и не два.";

$trimmed = new TrimString();
$exampleString = $trimmed->trim($currentString, 10, '...');

print_r($exampleString); //Пример очень длинной строки, о которой все писали в ...

```

### Установка

Для установки в проект как библиотеку выполните команду:
```$ composer require yulia633/trim-string```

---

#### Поддержка
* PHP 8.1
* Composer