<?php
require_once 'Valor.php';

class Terabyte extends Valor{
    
   public function calcularBitATerabyte(){
       return $this->getValor() / 8e+12;
   }

   public function calcularByteATerabyte(){
      return $this->getValor() / 1e+12;
   }

   public function calcularKilobyteATerabyte(){
       return $this-> getValor()/ 1e+9;
   }

   public function calcularMegabyteATerabyte(){
       return $this->getValor() / 1e+6;
   }

   public function calcularGigabyteATerabyte(){
       return $this-> getValor()/ 1000;
   }

}

?>

