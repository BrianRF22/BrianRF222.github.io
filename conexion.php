<?php
class Conexion{
    public static function conectar(){
        return pg_connect("host='localhost' port='5432' dbname='sarad' user='postgres' password='123'");
    }
}
?>