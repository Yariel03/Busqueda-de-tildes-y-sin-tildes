<?php
require("../conexion.class.php");
class Clproductos
{
   
    public function __construct()
    {
        $objconn= new DB;
        $objconn->conectar();
    }
        
    
//    public function ingresar($sql)
//    {
//        $play=mysql_query($sql);
//    }
    
    public function consultas($sql)
    {
        $play=mysql_query($sql);
        $rows=mysql_fetch_array($play);
       
            do
            {
                
                $vector_productos[]=$rows;
            } 
            while($rows=mysql_fetch_array($play));
        return($vector_productos);     
    }
}
?> 