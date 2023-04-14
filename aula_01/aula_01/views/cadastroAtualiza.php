<?php
//cabeçalho

include("../models/conexao.php");
include("blades/header.php");

?>

<div class="container border rounded mt-3 pt-3 ps-3 pe-3 pb-3 bg-white">

<?php

$query = mysqli_query($conexao, "SELECT * FROM alunos WHERE codigo = 8");
$exibe = mysqli_fetch_array($query);

?>

<form action="../controllers/atualizarAluno.php" method="post">

    <label class="form-label">Nome</label><br>
    <input type="hidden" name="alunoCodigo" value="<?php echo $exibe[0] ?>"><br>
    <label class="form-label">Nome</label><br>
    <input class="form-control" type="text" name="alunoNome" value="<?php echo $exibe[1] ?>"><br>
    <label class="form-label">Cidade</label><br>
    <input class="form-control" type="text" name="alunoCidade" value="<?php echo $exibe[2] ?>"><br>






    
    <div class="my-3 row">

<div class="my-3 col">
    <input class="form-check-input" type="radio" name="alunoSexo" value="m" <?php echo ($exibe[3]=="m")?"checked":""; ?>>
    <label class="form-label" >Masculino</label>

    <input class="form-check-input" type="radio" type="radio" name="alunoSexo" value="f"  <?php echo ($exibe[3]=="f")?"checked":""; ?>>
    <label class="form-label">Feminino</label>
</div>

</div>



    <input class="btn btn-success" type="submit" value="Atualizar">
</form>

</div>

<?php
//rodapé
include("blades/footer.php");
?>