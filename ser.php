<?php
 
if(isset($_POST["btncalcular"])){
  require_once 'Fibonacci.php';
  $fibonacci = new Fibonacci();
  $valor = $_POST["txtvalor"];
  $fibonacci->setValor($valor);
  $fibonacci->calcularfib();
  


}else{
    echo "Acceso Denegado";
}


?>