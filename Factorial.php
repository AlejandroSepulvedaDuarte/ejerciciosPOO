<?php
require_once 'Valor.php';
class Factorial extends Valor{
  
    public function calcularfact(){
        
        $factorial = 1;
        for($i=1; $i <= $this->getValor(); $i++){
            $factorial = $factorial * $i;
        }
        return $factorial;
    }
}
