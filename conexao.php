<?php

class Conexao{
    public static $instance;

    private function _contruct (){
//criar a funcionalidade - instanciar
    }
    private static fuction getConexao(){
        if(!isste(self::$instance)){
            self::$instance=new PDO( 'mysql:host=localhost;dbname=crud', 'senac', array(PDO::MYSQL_ATTR_INIT_COMMAND=> "SET NAMES UTF8"));
        }
    }
}
?>