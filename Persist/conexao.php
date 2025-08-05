<?php
class Conexao{
    private static $intancia;
    private $servidor ="localhost";
    private $usuario = "root";
    private $senha = "";
    private $banco = "etec2025";

    public static function getInstancia(){
        if (!isset(self::$instancia)){
            self::$instancia = new PDO("mysql:host='$servidor'; dbname='$banco', '$usuario', '$senha");
        }

        return $instancia;
    }
}
?>