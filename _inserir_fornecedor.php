<br><center><img src="img/logo.png" alt="TV THATHI SBT"></center>

<?php

include 'conexao.php';

$fornecedor = $_POST['fornecedor'];

$sql = "insert into fornecedor (nome_forn) values ('$fornecedor')";
$inserir = mysqli_query($conexao, $sql);
?>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<div class="container" style="width : 500px; margin-top: 20px">
<center><h4>Fornecedor Adicionado com sucesso !</h4></center>
<div style="padding-top:20px">
<center><a href="adicionar_fornecedor.php" role="button" class="btn btn-sm btn-warning">Voltar</a></center>
</div>
</div>