# Matematik amallar

composer require matematik/amallar:"*"

use matematika\Amal;

$new = new Amal();

$new->a = 25;
$new->b = 23;

echo $new->run('+');
