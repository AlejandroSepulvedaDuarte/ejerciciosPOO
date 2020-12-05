<!DOCTYPE html>
<html lang="es">
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
               <li class="activo"><a href="fact.php"><h2>El factorial de un número</h2></a></li>
              
           </ul>
        </nav>
    </div>

    <form name="form" method="POST" action="serfac.php">
         <p>Ingresa un número para conocer su factorial: <input type="text" id="txtvalor" name="txtvalor"></p>
         <p> <input type="submit" name="btncalcular" value="Calcular"></p>
    </form>
</body>
</html>