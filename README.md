# StringGenerator

This library can generate strings like password, Loremp Ipsum, etc.
    

## Password

This lib generates passwords.

```php
require __DIR__.'/vendor/autoload.php';
echo \OKLM\StringGenerator\PasswordGenerator::generate(10, \OKLM\StringGenerator\PasswordGenerator::PASSWORD_EASY).'<br>';
```