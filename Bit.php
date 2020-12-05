<?php
require_once 'Valor.php';

class Bit extends Valor{
    
   public function calcularByteABit(){
       return $this->getValor() * 8;
   }

   public function calcularKilobyteABit(){
      return $this-> getValor()* 8000;
   }

   public function calcularMegabyteABit(){
       return $this->getValor() * 8e+6;
   }

   public function calcularGigabyteABit(){
       return $this->getValor() * 8e+9;
   }

   public function calcularTerabyteABit(){
       return $this-> getValor()* 8e+12;
   }

}

?>

