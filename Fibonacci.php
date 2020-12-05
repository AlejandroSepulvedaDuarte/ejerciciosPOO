<?php
require_once 'Valor.php';
class Fibonacci extends  Valor{
   

    public function calcularfib(){
        $a = 0;
        $b = 1;
        for($i=1; $i <= $this->getValor(); $i++){
            echo $a. "";
            $c = $a + $b;
            $a = $b;
            $b = $c;
        }
    }
}



?>