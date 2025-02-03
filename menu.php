<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/362ff39427.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <title>Menu</title>
</head>
<body>

<?php
  include 'conexao.php';
  session_start();

  $usuario = $_SESSION['usuario'];

  if(!isset($usuario)){
    header('Location: index.php');
  }

  $sql = "select nivel_usuario from usuarios where email_usuario = '$usuario' and status = 'Ativo'";
  $buscar = mysqli_query($conexao, $sql);
  $array = mysqli_fetch_array($buscar);
  $nivel = $array['nivel_usuario'];
?>

<div class="container" style="width:500px; height:40px;text-align:center;color:white;background-color:green">
<?php
if($nivel == 1){
  $user = "Administrador";
}
if($nivel == 2){
  $user = "Funcionário";
}
if($nivel == 3){
  $user = "Conferente";
}
?>

<h5>Usuário Logado: <?php echo $user ?></h5>
</div>

<br><center><img src="img/logo.png" alt="TV THATHI SBT"></center>

<div class="container" style="margin-top:100px">

  <div class="container" style="text-align : right">
    <form action="index.php" method="post">
      <button class="btn btn-sm btn-danger" type="submit" ><i class="fas fa-arrow-right"></i>&nbsp;&nbsp;<b>Sair</b></button>
    </form>
  </div>

<div class="container" style="text-align:center; margin-bottom:50px">
  <h2>Menu de opções</h2>
</div>
<div class="row">
  <?php
    if(($nivel == 1) || ($nivel == 2)){

    
  ?>
  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Adicionar Produto</h5>
        <p class="card-text">Opção para adicionar produtos em nosso estoque.</p>
        <a href="adicionar_produto.php" class="btn btn-primary">Cadastrar Produto</a>
      </div>
    </div>
  </div>

  <?php } ?>    
  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Lista de Produtos</h5>
        <p class="card-text">Visualize os produtos existentes em estoque !</p>
        <a href="listar_produtos.php" class="btn btn-primary" >Listar</a>
      </div>
    </div>
  </div>

  <?php
    if(($nivel == 1) || ($nivel == 2)){

    
  ?>
  <div class="col-sm-6" style="margin-top:20px">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Adicionar Categoria</h5>
        <p class="card-text">Opção para adicionar categorias de produtos.</p>
        <a href="adicionar_categoria.php" class="btn btn-primary">Cadastrar Categoria</a>
      </div>
    </div>
  </div>
    <?php } ?>

  <div class="col-sm-6" style="margin-top:20px">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Lista de Categorias</h5>
        <p class="card-text">Visualize as categorias de produtos !</p>
        <a href="listar_categoria.php" class="btn btn-primary">Listar</a>
      </div>
    </div>
  </div>

  <?php
    if(($nivel == 1) || ($nivel == 2)){

    
  ?>

  <div class="col-sm-6" style="margin-top:20px">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Adicionar Fornecedor</h5>
        <p class="card-text">Opção para adicionar fornecedores.</p>
        <a href="adicionar_fornecedor.php" class="btn btn-primary">Cadastrar Fornecedores</a>
      </div>
    </div>
  </div>

    <?php } ?>

  <div class="col-sm-6" style="margin-top:20px">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Lista de Fornecedores</h5>
        <p class="card-text">Visualize os fornecedores de produtos !</p>
        <a href="listar_fornecedor.php" class="btn btn-primary" >Listar</a>
      </div>
    </div>
  </div>

  <?php

      if($nivel == 1){

  ?>
  <div class="col-sm-6" style="margin-top:20px">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Cadastrar Usuários</h5>
        <p class="card-text">Cadastro interno de usuários.</p>
        <a href="cadastro_usuario.php" class="btn btn-primary">Cadastrar</a>
      </div>
    </div>
  </div>

  <div class="col-sm-6" style="margin-top:20px">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Aprovar Usuários</h5>
        <p class="card-text">Aprovar usuários cadastrados.</p>
        <a href="aprovar_usuarios.php" class="btn btn-primary">Aprovar</a>
      </div>
    </div>
  </div>
  <?php } ?>

</div>
</div>
<br><br>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>