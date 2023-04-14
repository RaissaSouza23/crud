<?php
//importar a conexão com o banco
include("models/conexao.php");

//cabeçalho
include("views/blades/header.php");
?>

<div class="container border rounded mt-3 pt-3 ps-3 pe-3 pb-3 bg-white">
<a href="views/cadastro.php"><button class="btn btn-success">Cadastrar</button></a>
<hr>

<form action="index.php" method="post">
    <input class="form-control" type="text" name="buscar" placeholder="Digite a busca">
</form>




<?php
if(empty($_POST["buscar"])){

    echo "Nenhum resultado";
} else{

$varBuscar = $_POST["buscar"]

?>

<hr>


<table class="table table-bordered table-striped table-hover">
    <tr>
        <td><b>Nome</b></td>
        <td><b>Editar</b></td>
        <td>Excluir</td>
    </tr>
 



<?php
$query = mysqli_query($conexao, "SELECT * FROM alunos WHERE nome LIKE '%$varBuscar%' order by codigo desc");
while ($exibe = mysqli_fetch_array($query)){
    $vogal = ($exibe[3] =="m")?"o": "a";
?>

   <tr>
        <td><?php echo strtoupper($vogal) . " alun".$vogal ?> se chama <b><?php echo $exibe[1]?></b> 
        e mora na cidade de <b><?php echo $exibe[2]?></b>.</td>
        <td><a class="btn btn-primary" href="views/cadastroAtualiza.php?ida"><b>Editar</b></a></td>
        <td><a class="btn btn-danger" href="controllers/deletarAluno.php?ida=<?php echo $exibe[0]?>"><b>Excluir</b></a></td>
    </tr>

<?php } ?>
</table>

<?php } ?>
</div>
<?php
//rodapé
include("views/blades/footer.php");
?>

