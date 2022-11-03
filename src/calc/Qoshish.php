<?php

    namespace Matematika\Calc;

    use Matematika\Interface\BaseInterface;

    class Qoshish implements BaseInterface{

        public function run($a, $b){
            return $a+$b;
        }
    }

?>