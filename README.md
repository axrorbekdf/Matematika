# Matematik amallar

composer require matematik/amallar:"*"

use matematika\Amal;

$new = new Amal();

$new->a = 25;
$new->b = 23;

echo $new->run('+');

```php
use unclead\multipleinput\MultipleInput;

...

<?php
    echo $form->field($model, 'emails')->widget(MultipleInput::className(), [
        'max'               => 6,
        'min'               => 2, // should be at least 2 rows
        'allowEmptyList'    => false,
        'enableGuessTitle'  => true,
        'addButtonPosition' => MultipleInput::POS_HEADER, // show add button in the header
    ])
    ->label(false);
?>
```
