<?php

    namespace Matematika\Calc;

    use Matematika\Interface\BaseInterface;

    class Kopaytirish implements BaseInterface{

        public function run($a, $b){
            return $a*$b;
        }
    }

?>