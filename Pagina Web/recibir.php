<?php
    function conectarBD()
    {
        $host="host=localhost";
        $port="port=5432";
        $dbname="dbname=papeleria";
        $user="user=postgres";
        $password="password=12345";
        
        $bd = pg_connect("$host $port $dbname $user $password");
        if(!$bd) {
            echo "error: ",pg_last_error;
        }else{
            return $bd;
            
        }
    }

    
    /*function insertarDato($conexion, $razonsoc, $nombre, $apat, $apmat, $estado, $calle, $cp,
                            $col, $num)
    {
        $sql="insert into cliente values ('".$razonsoc."', '".$nombre."', '".$apat."', 
        '".$apmat."', '".$estado."', '".$calle."', ".$cp.", '".$col."', ".$num.")";    
        return pg_query( $conexion, $sql);
    }*/
    
?>
















