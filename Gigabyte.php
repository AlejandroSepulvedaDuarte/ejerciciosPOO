<?php
require_once 'Valor.php';

class Gigabyte extends Valor{
    
   public function calcularBitAGigabyte(){
       return $this-> getValor()/ 8e+9;
   }

   public function calcularByteAGigabyte(){
      return $this->getValor() / 1e+9;
   }

   public function calcularKilobyteAGigabyte(){
       return $this->getValor() / 1e+6;
   }

   public function calcularMegabyteAGigabyte(){
       return $this->getValor() / 1000;
   }

   public function calcularTerabyteAGigabyte(){
       return $this->getValor() * 1000;
   }

}

?>

