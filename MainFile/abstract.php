<?php
    // Abstract class er kono object banano jayna and akta abstract method obossoi rakhbo
    //Abstract class ke onno class e extends kore use kora hoy 
    abstract class parentClass{
        public $name;

        abstract protected function calculate($a,$b);
    }

    class childClass extends parentClass{
        public function calculate($c, $d){
            return $c * $d;
        }
    }

    $object = new childClass();
    echo $object->calculate(7,7);
?>