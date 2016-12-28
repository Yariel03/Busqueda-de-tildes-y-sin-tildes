<!Doctype html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <meta charset="author" content="Yariel Baldeón,yariel.yb@gmail.com">
        <title>Buscador</title>
        
    </head>

    <Body>
        <form action="busqueda.controlador.php" method="POST">
            <h4>Ingrese el nombre del producto a buscar</h4>
            <input type="text" name="txtbuscar"/>
            <input type=submit value="Buscar">    
        </form>
        <?php
        
            foreach($lista as $producto)
            {
                echo "<br>".utf8_encode($producto['Nombre']) ;
            }
        ?>
        
    </Body>
</html>