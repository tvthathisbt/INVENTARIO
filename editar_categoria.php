<br><center><img src="img/logo.png" alt="TV THATHI SBT"></center>

<?php

include 'conexao.php';

$id = $_GET['id'];


?>

<!DOCTYPE html>
<html lang="pt-br">
    <head>
        
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
        <title>Formulário de edição</title>
    </head>
    <body>
    <div class="container" id="tamanhoContainer" style="margin-top:40px">
            <h4>Formulário de Edição</h4>
        <form style="margin-top : 20px;" action="_atualizar_categoria.php" method="post">

            <?php
            $sql = "select * from categoria where id_categoria = $id";
            $busca = mysqli_query($conexao, $sql);

            while($array = mysqli_fetch_array($busca)){
                $id_categoria = $array['id_categoria'];
                $nomecategoria = $array['nome_categoria'];
                            
            ?>

            

                <div class="form-group">
                    <label>Nome Categoria</label>
                    <input type="text" class="form-control" name="nomecategoria" value="<?php echo $nomecategoria ?>">
                    <input type="text" class="form-control" name="id" value="<?php echo $id_categoria ?>" style="display:none">
                </div>
                
                <div style="text-align : right;">
                    <button id="botao" type="submit" class="btn btn-sm">Atualizar</button>        
                </div>
                <?php } ?>    
        </form>
    </div>
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    </body>
</html>