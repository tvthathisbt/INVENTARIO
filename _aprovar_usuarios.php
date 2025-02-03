<?php
include 'conexao.php';

$id = $_GET['id'];
$nivel = $_GET['nivel'];

if($nivel == 1){
    $update = "update usuarios set status = 'Ativo', nivel_usuario = 1 where id_usuario = $id";
    $atualiza = mysqli_query($conexao, $update);
    echo "Administrador Aprovado";
}

if($nivel == 2){
    $update = "update usuarios set status = 'Ativo', nivel_usuario = 2 where id_usuario = $id";
    $atualiza = mysqli_query($conexao, $update);
    echo "Funcionário Aprovado";
}

if($nivel == 3){
    $update = "update usuarios set status = 'Ativo', nivel_usuario = 3 where id_usuario = $id";
    $atualiza = mysqli_query($conexao, $update);
    echo "Conferente Aprovado";
}

header("Location: aprovar_usuarios.php"); //redireciona para a página de aprovação



?>