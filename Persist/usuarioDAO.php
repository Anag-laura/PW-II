<?php
    include_once 'conexao.php';

    class usuarioDAO{
        //construtor
        public function __construct(){}

        public function Inserir(Usuario $usu){
            try{

                //
                echo "var_dump()";
                var_dump($usu);

                if(!empty($usu->getNome()) && !empty($usu->getEmail()) && !empty($usu->getSenha())){
                    $sql = "INSERT INTO usuario (idUsuario, nome, email, senha) VALUES (:i, :n, :e, :s);";

                    // Fazer conexão com o BD
                    $sp_sql = Conexao::getInstancia() -> prepare($sql);

                    // Passar valores para os parâmetros
                    $sp_sql->bindValue(":i", $usu->getIdUsuario());
                    $sp_sql->bindValue(":n", $usu->getNome());
                    $sp_sql->bindValue(":e", $usu->getEmail());
                    $sp_sql->bindValue(":s", $usu->getSenha());
                    
                    return $sp_sql->execute();

                } else {
                    return false;
                }

            }catch (Exception $e){
                print $e->getMessage();
            }
        }
    }
?>