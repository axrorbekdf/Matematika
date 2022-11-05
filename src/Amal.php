<?php

    namespace Matematika;

    use Matematika\Calc\Qoshish;
    use Matematika\Calc\Ayirish;
    use Matematika\Calc\Kopaytirish;
    use Matematika\Calc\Bolish;
    use Matematika\Interface\BaseInterface;

    class Amal{

        public $a = 0;
        public $b = 0;
        
        public function run($amal){

            switch($amal){
                case '+': 
                    return $this->calculation(new Qoshish());
                case '-': 
                    return $this->calculation(new Ayirish());
                case '*': 
                    return $this->calculation(new Kopaytirish());
                case '/': 
                    return $this->calculation(new Bolish());
            }
        }

        private function calculation(BaseInterface $amal){
            return $amal->run($this->a, $this->b);
        }
    }

    

?>