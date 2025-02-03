<!DOCTYPE html>
<html lang="pt-br">
<head>

<br><left><img src="img/logo.png" style="margin-left: 30px;" alt="TV THATHI SBT"></left>

    <script src="https://kit.fontawesome.com/362ff39427.js" crossorigin="anonymous"></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Aprovar Usuário</title>
</head>
<body>

<div class="container" style="margin-top:40px;">
    <div class="container" style="text-align:right;">
        <a href="menu.php" class="btn btn-primary btn-sm">Voltar</a>
    </div>
<h3>Lista de Usuários</h3>
<br/>
<table class="table">
  <thead>
    <tr>
      <th scope="col">Nome Usuário</th>
      <th scope="col">E-mail</th>
      <th scope="col">Nível</th>
      <th scope="col">Ação</th>
    </tr>
  </thead>
  <tbody>
  
    
        <?php
            include 'conexao.php';
            $sql = "select * from usuarios where status = 'Inativo'";
            $busca = mysqli_query($conexao,$sql);

            while($array = mysqli_fetch_array($busca)){
                $id_usuario = $array['id_usuario'];
                $nomeusuario = $array['nome_usuario'];
                $mail = $array['email_usuario'];
                $nivel = $array['nivel_usuario'];
        ?>

    <tr>

        <td><?php echo $nomeusuario ?></td>
        <td><?php echo $mail ?></td>
        <td><?php echo $nivel ?></td>


        <td><a class="btn btn-success btn-sm" style="color:#fff;" href="_aprovar_usuarios.php?id=<?php echo $id_usuario?> &nivel=1" role="button"><i class="fas fa-check"></i>&nbsp;Administrador</a>
        <a class="btn btn-warning btn-sm" style="color:#fff;" href="_aprovar_usuarios.php?id=<?php echo $id_usuario?> &nivel=2" role="button"><i class="fas fa-check"></i>&nbsp;Funcionário</a>
        <a class="btn btn-dark btn-sm" style="color:#fff;" href="_aprovar_usuarios.php?id=<?php echo $id_usuario?> &nivel=3" role="button"><i class="fas fa-check"></i>&nbsp;Conferente</a>
        <a class="btn btn-danger btn-sm" style="color:#fff;" href="deletar_usuarios.php?id=<?php echo $id_usuario?>" role="button"><i class="far fa-trash-alt"></i>&nbsp;Excluir</a></td>
        <?php } ?>

    </tr> 
    
  </tbody>
</table>



</div>




        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>