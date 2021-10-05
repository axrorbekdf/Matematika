<?php

    namespace matematika;

    use matematika\calc\Qoshish;
    use matematika\calc\Ayirish;
    use matematika\calc\Kopaytirish;
    use matematika\calc\Bolish;

    class Amal{
        public $a = 0;
        public $b = 0;
        
        public function run($amal){
            switch($amal){
                case '+': 
                    $amal = new Qoshish();
                    return $amal->run($this->a, $this->b);
                    break;
                case '-': 
                    $amal = new Ayirish();
                    return $amal->run($this->a, $this->b);
                    break;
                case '*': 
                    $amal = new Kopaytirish();
                    return $amal->run($this->a, $this->b);
                    break;
                case '/': 
                    $amal = new Bolish();
                    return $amal->run($this->a, $this->b);
                    break;
            }
        }
    }

?>