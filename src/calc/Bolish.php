<?php

    namespace Matematika\Calc;

    class Bolish{

        public function run($a, $b){
            if($b == 0 )
                return "Amal bajarib bo'lmaydi!";

            return $a/$b;
        }
    }

?>