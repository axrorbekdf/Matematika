# Matematik amallar

Either run
```
composer require matematik/amallar:"*"
```

or add

```php
use matematika\Amal;
...
<?php
    $new = new Amal();

    $new->a = 25;
    $new->b = 23;

    echo $new->run('+');
?>
```
