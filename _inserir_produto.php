<br><center><img src="img/logo.png" alt="TV THATHI SBT"></center>

 <?php
 
include 'conexao.php';

$nroproduto = $_POST['nroproduto'] ;
$nomeproduto = $_POST['nomeproduto'] ;
$categoria = $_POST['categoria'] ;
$quantidade = $_POST['quantidade'] ;
$fornecedor = $_POST['fornecedor'] ;

$sql = "insert into `estoque` (`nroproduto` , `nomeproduto` , `categoria` , `quantidade` , `fornecedor`) values ($nroproduto , '$nomeproduto' ,
'$categoria' , $quantidade , '$fornecedor')";

$inserir = mysqli_query($conexao , $sql);
?>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<div class="container" style="width : 500px; margin-top: 20px">
<center><h4>Produto Adicionado com sucesso !</h4></center>
<div style="padding-top:20px">
<center><a href="adicionar_produto.php" role="button" class="btn btn-sm btn-primary">Cadastrar novo item</a></center>
</div>
</div>