<?php
require_once 'Valor.php';

class Megabyte extends Valor{
    
   public function calcularBitAMegabyte(){
       return $this-> getValor()/ 8e+6;
   }

   public function calcularByteAMegabyte(){
      return $this->getValor() / 1e+6;
   }

   public function calcularKilobyteAMegabyte(){
       return $this->getValor() / 1000;
   }

   public function calcularGigabyteAMegabyte(){
       return $this-> getValor()* 1000;
   }

   public function calcularTerabyteAMegabyte(){
       return $this->getValor() * 1e+6;
   }

}

?>

