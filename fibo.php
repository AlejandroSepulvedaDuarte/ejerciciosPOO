<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div >
        <nav class="navegacion">
           <ul class="menu">
               <li ><a href="index.php">Regresar al menu principal</a></li>
               <li class="activo"><a href="fibo.php"><h2>Serie fibonacci</h2></a></li>
              
           </ul>
        </nav>
    </div>

    <form name="form" method="POST" action="ser.php">
         <p>Ingresa un número para conocer la serie: <input type="text" id="txtvalor" name="txtvalor"></p>
         <p> <input type="submit" name="btncalcular" value="Calcular"></p>
    </form>
</body>
</html>