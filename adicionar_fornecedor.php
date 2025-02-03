<!DOCTYPE html>
<html lang="pt-br">
<head>

<br><center><img src="img/logo.png" alt="TV THATHI SBT"></center>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <title>Document</title>
    <style>
        #botao{
                background-color:green;
                color:#fff;
            }
    </style>
</head>
<body>
    <div class="container" style="margin-top:40px; width:500px;">
        <div class="container" style="text-align:right;">
            <a href="menu.php" class="btn btn-primary btn-sm">Voltar</a>
        </div>
        <h4>Cadastro de Fornecedor</h4>
        <form action="_inserir_fornecedor.php" method="post">
        <label>Fornecedor</label>
            <div class="form-group">
                <input autocomplete="off" type="text" class="form-control" placeholder="Digite o fornecedor" name="fornecedor" required>    
            </div>
        
        <div style="text-align:right">
            <button class="btn btn-sm" id="botao" type="submit">Cadastrar</button>
        </div>
        </form>    
    </div>



<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>