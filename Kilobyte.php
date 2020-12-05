<?php
require_once 'Valor.php';

class Kilobyte extends Valor{
    
   public function calcularBitAKilobyte(){
       return $this-> getValor() / 8000;
   }

   public function calcularByteAKilobyte(){
      return $this->getValor() / 1000;
   }

   public function calcularMegabyteAKilobyte(){
       return $this->getValor() * 1000;
   }

   public function calcularGigabyteAKilobyte(){
       return $this->getValor() * 1e+6;
   }

   public function calcularTerabyteAKilobyte(){
       return $this->getValor() * 1e+9;
   }

}

?>

