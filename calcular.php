<?php


if(isset($_POST["btncalcular"])){

    require_once 'Bit.php';
    require_once 'Byte.php';
    require_once 'Kilobyte.php';
    require_once 'Megabyte.php';
    require_once 'Gigabyte.php';
    require_once 'Terabyte.php';

    $bit = new Bit();
    $byte = new Byte();
    $kilobyte = new Kilobyte();
    $megabyte = new Megabyte();
    $gigabyte = new Gigabyte();
    $Terabyte = new Terabyte();


    $valor = $_POST["txtvalor"];

    $tipomedida = $_POST["selmedidas"];
    $opcion = $_POST["medidas"];
    

    switch($opcion){
        case "bit":
            $bit->setValor($valor);
            switch($tipomedida){
                case "byte":
                    
                    echo "La conversion de Bit a Byte = " . $bit->calcularByteABit();

                break;

                case "kilo":
                    
                    echo "La conversion de Bit a Kilobyte = " . $bit->calcularKilobyteABit();
                break;

                case "mega":
                    
                    echo "La conversion de Bit a Megabyte = " . $bit->calcularMegabyteABit();
                break;

                case "giga":
                    
                    echo "La conversion de Bit a Gigabyte = " . $bit->calcularGigabyteABit();
                break;

                case "tera":
                    
                    echo "La conversion de Bit a Tirabyte = " . $bit->calcularTerabyteABit();
                break;

                default:
                echo "Opcion incorrecta";
                

            }    

            
        break;

        case "byte":
            $byte->setValor($valor);
            switch($tipomedida){
                case "bit":
                    
                    echo "La conversion de Byte a Bit = " . $byte->calcularBitAByte();

                break;

                case "kilo":
                    
                    echo "La conversion de Byte a Kilobyte = " . $byte->calcularKilobyteAByte();
                break;

                case "mega":
                    
                    echo "La conversion de Byte a Megabyte = " . $byte->calcularMegabyteAByte();
                break;

                case "giga":
                    
                    echo "La conversion de Byte a Gigabyte = " . $byte->calcularGigabyteAByte();
                break;

                case "tera":
                    
                    echo "La conversion de Byte a Terabyte = " . $byte->calcularTerabyteAByte();
                break;

                default:
                echo "Opcion incorrecta";

            }    
           
        break;

        case "kilobyte":
            $kilobyte->setValor($valor);
            switch($tipomedida){
                case "bit":
                    
                    echo "La conversion de Kilobyte a Bit = " . $kilobyte->calcularBitAKilobyte();

                break;

                case "byte":
                    
                    echo "La conversion de Kilobyte a Byte = " . $kilobyte->calcularByteAKilobyte();
                break;

                case "mega":
                    
                    echo "La conversion de Kilobyte a Megabyte = " . $kilobyte->calcularMegabyteAKilobyte();
                break;

                case "giga":
                    
                    echo "La conversion de Kilobyte a Gigabyte = " . $kilobyte->calcularGigabyteAKilobyte();
                break;

                case "tera":
                    
                    echo "La conversion de kilobyte a Terabyte = " . $kilobyte->calcularTerabyteAKilobyte();
                break;

                default:
                echo "Opcion incorrecta";

            }    

            
        break;

        case "megabyte":
            $megabyte->setValor($valor);
            switch($tipomedida){
                case "bit":
                    
                    echo "La conversion de Megabyte a Bit = " . $megabyte->calcularBitAMegabyte();

                break;

                case "byte":
                    
                    echo "La conversion de Megabyte a Byte = " . $megabyte->calcularByteAMegabyte();
                break;

                case "kilo":
                    
                    echo "La conversion de Megabyte a Kilobyte = " . $megabyte->calcularKilobyteAMegabyte();
                break;

                case "giga":
                    
                    echo "La conversion de Megabyte a Gigabyte = " . $megabyte->calcularGigabyteAMegabyte();
                break;

                case "tera":
                    
                    echo "La conversion de Megabyte a Tirabyte = " . $megabyte->calcularTerabyteAMegabyte();
                break;

                default:
                echo "Opcion incorrecta";

            }    

           
        break;

        case "gigabyte":
            $gigabyte->setValor($valor);
            switch($tipomedida){
                case "bit":
                    
                    echo "La conversion de Gigabyte a Bit = " . $gigabyte->calcularBitAGigabyte();

                break;

                case "byte":
                    
                    echo "La conversion de Gigabyte a Byte = " . $gigabyte->calcularByteAGigabyte();
                break;

                case "kilo":
                    
                    echo "La conversion de Gigabyte a Kilobyte = " . $gigabyte->calcularKilobyteAGigabyte();
                break;

                case "mega":
                    
                    echo "La conversion de Gigabyte a Megabyte = " . $gigabyte->calcularGigabyteAGigabyte();
                break;

                case "tera":
                    
                    echo "La conversion de Gigabyte a Terabyte = " . $gigabyte->calcularTirabyteAKilobyte();
                break;

                default:
                echo "Opcion incorrecta";

            }    

            
        break;
        


        case "terabyte":
            $Terabyte->setValor($valor);
            switch($tipomedida){
                case "bit":
                    
                    echo "La conversion de Terabyte a Bit = " . $Terabyte->calcularBitATerabyte();

                break;

                case "Byte":
                    
                    echo "La conversion de Terabyte a Byte = " . $Terabyte->calcularByteATerabyte();
                break;

                case "kilo":
                    
                    echo "La conversion de Terabyte a Kilobyte = " . $Terabyte->calcularKilobyteATerabyte();
                break;

                case "mega":
                    
                    echo "La conversion de Terabyte a Megabyte = " . $Terabyte->calcularMegabyteATerabyte();
                break;

                case "giga":
                    
                    echo "La conversion de Terabyte a Gigabyte = " . $Terabyte->calcularGigabyteATerabyte();
                break;

                default:
                echo "Opcion incorrecta";

            }    

           
        break;

    }


}else{

    echo "Acceso denegado.";
}

?>