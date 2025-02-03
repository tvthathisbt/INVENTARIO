<!DOCTYPE html>
<html lang="pt-br">
<head>

<br><center><img src="img/logo.png" alt="TV THATHI SBT"></center>
        
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <style>
            #tamanhoContainer{
                width:500px;
            }
            #botao{
                background-color:green;
                color:#fff;
            }
        </style>
    

        <meta charset="utf-8"/>
        <title>Formulário de cadastro</title>
    </head>
    <body>

    <div class="container" id="tamanhoContainer" style="margin-top:40px">
    <div class="container" style="text-align:right;">
        <a href="menu.php" class="btn btn-primary btn-sm">Voltar</a>
    </div>
            <h4>Formulário de Cadastro</h4>
        <form style="margin-top : 20px;" action="_inserir_produto.php" method="post">
                <div class="form-group">
                    <label>Numero de serie / Patrimonio</label>
                    <input type="text" class="form-control" name="nroproduto" placeholder="Insira o número do produto" required>
                
                </div>
                <div class="form-group">
                    <label>Nome do Produto / Modelo</label>
                    <input type="text" class="form-control" name="nomeproduto" placeholder="Insira o nome do produto" autocomplete="off" required>
                
                </div>
                <div class="form-group">
                    <label>Categoria</label>
                    <select class="form-control" name="categoria">


                    <?php
                    include 'conexao.php';

                    $sql = "select * from categoria order by nome_categoria ASC";
                    $buscar = mysqli_query($conexao, $sql);

                    while($array = mysqli_fetch_array($buscar)){
                        $id_categoria = $array['id_categoria'];
                        $nome_categoria = $array['nome_categoria'];
                        ?>

                    <option><?php echo $nome_categoria ?></option>                
                        
                <?php } ?>
                    </select>
                </div>
                <div class="form-group">
                    <label>Quantidade do Produto</label>
                    <input type="number" maxlength="10" class="form-control" name="quantidade" placeholder="Insira a quantidade do produto"  required>
                </div>
                <div class="form-group">
                    <label>Fornecedor</label>
                    <select class="form-control" name="fornecedor">
                    <?php
                    include 'conexao.php';

                    $sql2 = "select * from fornecedor order by nome_forn ASC";
                    $buscar2 = mysqli_query($conexao, $sql2);

                    while($array2 = mysqli_fetch_array($buscar2)){
                        $id_forn = $array2['id_forn'];
                        $nome_forn = $array2['nome_forn'];
                        ?>

                    <option><?php echo $nome_forn ?></option>                
                        
                <?php } ?>
                    </select>
                </div>
                <div style="text-align : right;">
                    <button id="botao" type="submit" class="btn btn-sm">Cadastrar</button>        
                </div>
                
        </form>
    </div>


        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    </body>
</html>