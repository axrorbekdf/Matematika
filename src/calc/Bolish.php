<?php

    namespace Matematika\Calc;

    use Matematika\Interface\BaseInterface;

    class Bolish  implements BaseInterface{

        public function run($a, $b){
            if($b == 0 )
                return "Amal bajarib bo'lmaydi!";

            return $a/$b;
        }
    }

?>