<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> </title>
</head>
<body>
    <div >
        <nav class="navegacion">
           <ul class="menu">
               <li ><a href="index.php">Regresar al menu principal</a></li>
               <li class="activo"><a href="pmm.php"></a></li>
              
           </ul>
        </nav>
    </div>

    <form name="form" method="POST" action="calpmm.php">
         <p>Ingresa el primer numero :  <input type="text" id="txtvalor1" name="txtvalor1"></p>
         <p>Ingresa el segundo numero:  <input type="text" id="txtvalor2" name="txtvalor2"></p>
         <p>Ingresa el tercer numero :  <input type="text" id="txtvalor3" name="txtvalor3"></p>
         <p> <input type="submit" name="btncalcular" value="Calcular"></p>
    </form>
</body>
</html>