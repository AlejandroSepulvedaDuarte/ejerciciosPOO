<?php
require_once 'Valor.php';

class Byte extends Valor{
    
   public function calcularBitAByte(){
       return $this-> getValor()/ 8;
   }

   public function calcularKilobyteAByte(){
      return $this->getValor() * 1000;
   }

   public function calcularMegabyteAByte(){
       return $this->getValor() * 1e+6;
   }

   public function calcularGigabyteAByte(){
       return $this->getValor() * 1e+9;
   }

   public function calcularTerabyteAByte(){
       return $this-> getValor()* 1e+12;
   }

}

?>

