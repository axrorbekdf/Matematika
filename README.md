# Matematik amallar

Yuklab olish
```
composer require matematik/amallar:"*"
```

Ishlatish
```php

<?php
    
    require 'vendor/autoload.php';

    use Matematika\Amal;
    
    $new = new Amal();

    $new->a = 25;
    $new->b = 23;

    echo $new->run('+');
?>
```

Natija
```
48
```
