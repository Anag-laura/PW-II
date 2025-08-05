<?php
    // Incluir banco de dados
    include_once "..\Modelo\usuarioInserir.php";
    include_once '..\Persist\usuarioDAO.php';

    // Declaração de Variaveis
    $n = $_POST['nome'];
    $s = $_POST['senha'];
    $e = $_POST['email'];

    //Instanciar (criar) um objeto da classe Usuario
    $usu = new Usuario(1, $n, $e, $s, 'S');
    $usuDAO = new UsuarioDAO();
    $usuDAO->Inserir($usu);

    /*Conferir se o objeto foi criado corretamente
    echo "var_dump()";
    var_dump($usu);
    */
?>