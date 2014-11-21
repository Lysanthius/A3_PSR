# StringGenerator

This library can generate strings like password, Loremp Ipsum, etc.
    
    [![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/Lysanthius/A3_PSR/badges/quality-score.png?b=master)](https://scrutinizer-ci.com/g/Lysanthius/A3_PSR/?branch=master)

## Password

This lib generates passwords.

```php
require __DIR__.'/vendor/autoload.php';
echo \OKLM\StringGenerator\PasswordGenerator::generate(10, \OKLM\StringGenerator\PasswordGenerator::PASSWORD_EASY).'<br>';
```