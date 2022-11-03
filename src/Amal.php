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
                    return $this->qoshish(new Qoshish());
                case '-': 
                    return $this->ayirish(new Ayirish());
                case '*': 
                    return $this->kopaytirish(new Kopaytirish());
                case '/': 
                    return $this->bolish(new Bolish());
            }
        }

        private function qoshish(BaseInterface $amal){
            return $amal->run($this->a, $this->b);
        }

        private function ayirish(BaseInterface $amal){
            return $amal->run($this->a, $this->b);
        }

        private function kopaytirish(BaseInterface $amal){
            return $amal->run($this->a, $this->b);
        }

        private function bolish(BaseInterface $amal){
            return $amal->run($this->a, $this->b);
        }
    }

    

?>