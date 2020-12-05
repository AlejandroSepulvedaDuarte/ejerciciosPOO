<?php
 
if(isset($_POST["btncalcular"])){
  require_once 'Factorial.php';
  $factorial = new Factorial();
  $valor = $_POST["txtvalor"];
  $factorial->setValor($valor);
  
  
  echo "La factorial de " . $valor . " es " . $factorial->calcularfact();
  


}else{
    echo "Acceso Denegado";
}


?>