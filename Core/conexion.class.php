<?php
class DB
{
    function conectar()
    {
        $conexion=mysql_connect("localhost","root","")or
        die(mysql_error());
        mysql_select_db("bd",$conexion) or die(mysql_error());
        return $conexion;
    }
}
?>