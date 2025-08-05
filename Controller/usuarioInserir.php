<?php
// Incluir banco de dados
include_once "../Modelo/usuarioInserir.php";
include_once "../Persist/usuarioDAO.php";

// Verificar se os dados foram enviados via POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Filtrar e validar os dados recebidos
    $n = isset($_POST['nome']) ? trim($_POST['nome']) : null;
    $s = isset($_POST['senha']) ? trim($_POST['senha']) : null;
    $e = isset($_POST['email']) ? trim($_POST['email']) : null;

    // Verifica se nenhum campo está vazio
    if ($n && $s && $e) {
        // Cria o objeto Usuario
        $usu = new Usuario(1, $n, $e, $s, 'S');

        // Cria o DAO e insere o usuário
        $usuDAO = new UsuarioDAO();
        $usuDAO->Inserir($usu);

        // Redireciona ou mostra mensagem de sucesso
        echo "Usuário inserido com sucesso!";
    } else {
        echo "Erro: Todos os campos devem ser preenchidos.";
    }
} else {
    echo "Acesso inválido.";
}
?>
