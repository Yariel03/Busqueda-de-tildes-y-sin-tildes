<!Doctype html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <title>Buscador</title>
        
    </head>

    <Body>
        <form action="busqueda.php" method="post">
            <input type="text" name="txtbuscar"/>
            <input type=submit value="Buscar">    
        </form>
        
        
         <?php
        error_reporting(0);
        include("conexion.php");
        $buscar=$_POST['txtbuscar'];
        $sql="SELECT * FROM productos where Nombre = _utf8'$buscar'COLLATE utf8_general_ci";
        $play=mysql_query($sql);
        $rows=mysql_fetch_array($play);
        $total=mysql_num_rows($play);
        
       if($total!=0)
       {
           
            do
            {
                echo("<br>".utf8_encode($rows['Nombre']));
            }while($rows=mysql_fetch_array($play));
       }else
       {
           echo "No se han encontrado resultados";
           
       }
            
      
        ?>
   
        
        
        
    </Body>
</html>


