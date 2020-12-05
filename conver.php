<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PROGRAMACIÓN ORIENTADA A OBJETOS</title>
    <link rel="stylesheet" type="text/css" href="css/estilos.css">
</head>
<body>

    <div >
        <nav class="navegacion">
           <ul class="menu">
               <li ><a href="index.php">Inicio</a></li>
               <li class="activo"><a href="conver.php"></a></li>
              
           </ul>
        </nav>
    </div>
       <h2>CONVERSOR DE MEDIDAS INFORMÁTICAS</h2>
       <br>
       <p>Ingresa una medida y luego seleciona a la cual deseas convertir</p>
       <br>
         
    <Form name="form" method="POST" action="calcular.php">
        
        <p>Valor a Convertir:<input type="text" id="txtvalor" name="txtvalor">
           <select name="selmedidas">
               <option value="">Selecione...</option>
               <option value="bit">Bit</option>
               <option value="byte">Byte</option>
               <option value="kilo">Kilobyte</option>
               <option value="mega">Megabyte</option>
               <option value="giga">Gigabyte</option>
               <option value="tera">Terabyte</option>
           </select> 
        </p>
        <p>Convertir a la medida de: </p>
        <p>
            <input type="radio" name="medidas" value="bit">Bit
            <br><input type="radio" name="medidas" value="byte">Byte
            <br><input type="radio" name="medidas" value="kilobyte">Kilobyte
            <br><input type="radio" name="medidas" value="megabyte">Megabyte
            <br><input type="radio" name="medidas" value="gigabyte">Gigabyte
            <br><input type="radio" name="medidas" value="terabyte">Terabyte
        </p>
        <p><input type="submit" name="btncalcular" value="Calcular"> </p>

       
   
    </Form>
    
</body>
</html>