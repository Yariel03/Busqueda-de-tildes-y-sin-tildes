<?php
require("../Modelo/productos.modelo.php");
$objproductos= new Clproductos;
$buscar=$_POST['txtbuscar'];
$lista=$objproductos->consultas("SELECT * FROM productos where Nombre = _utf8'$buscar'COLLATE utf8_general_ci");
require("../Vista/busqueda.view.php");
?>
    
    
      
   
        
  