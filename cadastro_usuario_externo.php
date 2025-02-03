<!DOCTYPE html>
<html lang="pt-br">
<head>

<br><center><img src="img/logo.png" alt="TV THATHI SBT"></center>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tela de Login</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body>

<div class="container" style="width:400px; margin-top:40px">
    <div style="text-align:right">
        <a href="index.php" class="btn btn-primary btn-sm" role="button">Voltar</a>
    </div>
    <h4>Cadastro de Usuário</h4>
    <form action="_inserir_usuario_externo.php" method="post">
        <div class="form-group">
            <label>Nome do Usuário</label>
            <input type="text" class="form-control" name="nomeusuario" autocomplete="off" placeholder="Nome Completo" required>
        </div>
        <div class="form-group">
            <label>Email</label>
            <input type="email" class="form-control" name="emailusuario" autocomplete="off" placeholder="Seu E-mail" required>
        </div>
        <div class="form-group">
            <label>Senha</label>
            <input type="password" id="txtSenha" class="form-control" name="senhausuario" autocomplete="off" placeholder="Digite a Senha" required>
        </div>
        <div class="form-group">
            <label>Confirmar Senha</label>
            <input type="password" class="form-control" name="senhausuario2" autocomplete="off" placeholder="Confirme a Senha" required oninput="validaSenha(this)">
            <small>As senhas devem ser iguais.</small>
        </div>
        
        <div style="text-align:right">
            <button type="submit" class="btn btn-sm btn-success">Cadastrar</button>
        </div>
    </form>
</div>



<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<script>
function validaSenha (input){ 
	if (input.value != document.getElementById('txtSenha').value) {
    input.setCustomValidity('Repita a senha corretamente');
  } else {
    input.setCustomValidity('');
  }
} 
</script>
</body>
</html>