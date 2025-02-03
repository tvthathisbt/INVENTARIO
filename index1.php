<?php
include 'conexao.php';
include 'script/password.php';

$usuario = $_POST['usuario'];
$senhauser = $_POST['senha'];

// Depuração: Verifique os dados recebidos
var_dump($_POST);

// Usar prepared statements para evitar SQL injection
$sql = "SELECT email_usuario, senha_usuario FROM usuarios WHERE email_usuario = ? AND status = 'Ativo'";
$stmt = mysqli_prepare($conexao, $sql);
mysqli_stmt_bind_param($stmt, "s", $usuario);
mysqli_stmt_execute($stmt);
$result = mysqli_stmt_get_result($stmt);

$total = mysqli_num_rows($result);

if ($total > 0) {
    $array = mysqli_fetch_assoc($result);
    $senha = $array['senha_usuario'];

    // Depuração: Verifique a senha no banco e a senha fornecida
    echo "Senha no banco: " . $senha . "<br>";
    echo "Senha fornecida (sha1): " . sha1($senhauser) . "<br>";

    // Verificar a senha
    if (sha1($senhauser) == $senha) {
        session_start();
        $_SESSION['usuario'] = $usuario;
        header('Location: menu.php');
        exit();
    } else {
        echo "Senha incorreta."; // Depuração
        header('Location: erro.php');
        exit();
    }
} else {
    echo "Nenhum usuário encontrado ou status não é 'Ativo'."; // Depuração
    header('Location: erro.php');
    exit();
}
?>