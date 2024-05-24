<?php 


$cpf =  $_GET['cpf'];

include '../conexao.php';

$hoje = date('Y/m/d');

if(count($_POST)>0) {

$entrada = $_POST['entrada'];
$saida = $_POST['saida'];
$entrada2 = $_POST['entrada2'];
$saida2 = $_POST['saida2'];
$notafisc = $_POST['notafisc'];
$destino  = $_POST['destino'];
$observacao  = $_POST['observacao'];
$visto = $_POST['visto2'];
$romaneio  = $_POST['romaneio'];

$sql_inserir = "UPDATE horario_visitante
SET hora_entrada = '$entrada', 
hora_saida = '$saida',
hora_entrada2 = '$entrada2',
hora_saida2 = '$saida2',
notafiscal = '$notafisc',
destino = '$destino',
observacoes  = '$observacao',
visto2 = '$visto',
romaneio = '$romaneio'

where cpf = '$cpf' 
and data  = '$hoje'";

$query_inserir = $mysqli->query($sql_inserir) or die($mysqli->error);

if($query_inserir){
    echo "<script> 
    
    alert('Alterado com sucesso');
    window.location.href = '../index.html';

    </script>";

}
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <title>Document</title>
</head>
<body>


<?php
$sql_visualizar = "SELECT * FROM horario_visitante where cpf = '$cpf' and data  = '$hoje'";
$query_visualizar = $mysqli->query($sql_visualizar) or die($mysqli->error);

$visualizar = $query_visualizar->fetch_assoc()?>

<center>

<h1>SAÍDA</h1>

<form method="post">   

<div class="form-group w-25 p-3">
    <label>ENTRADA</label>
    <input type="time" class="form-control" name="entrada" value="<?php if (!empty($visualizar['hora_entrada']))echo $visualizar['hora_entrada'];?>">
</div>
<div class="form-group w-25 p-3">
    <label>SAIDA</label>
    <input type="time" class="form-control" name="saida" value="<?php if (!empty($visualizar['hora_saida']))echo $visualizar['hora_saida'];?>">
</div>
<div class="form-group w-25 p-3">
    <label>ENTRADA</label>
    <input type="time" class="form-control" name="entrada2" value="<?php if (!empty($visualizar['hora_entrada2']))echo $visualizar['hora_entrada2'];?>">
</div>
<div class="form-group w-25 p-3">
    <label>SAIDA</label>
    <input type="time" class="form-control" name="saida2" value="<?php if (!empty($visualizar['hora_saida2']))echo $visualizar['hora_saida2'];?>">
</div>
<div class="form-group w-25 p-3">
    <label>NOTA FISCAL</label>
    <input type="text" class="form-control" name="notafisc" value="<?php if (!empty($visualizar['notafiscal']))echo $visualizar['notafiscal'];?>">
</div>
<div class="form-group w-25 p-3">
    <label>DESTINO</label>
    <input type="text" class="form-control" name="destino" value="<?php if (!empty($visualizar['destino']))echo $visualizar['destino'];?>">
</div>
<div class="form-group w-25 p-3">
    <label>OBSERVAÇÃO</label>
    <input type="text" class="form-control" name="observacao" value="<?php if (!empty($visualizar['observacoes']))echo $visualizar['observacoes'];?>">
</div>
<div class="form-group w-25 p-3">
    <label>ROMANEIO</label>
    <input type="text" class="form-control" name="romaneio" value="<?php if (!empty($visualizar['romaneio']))echo $visualizar['romaneio'];?>">
</div>
<div class="form-group w-25 p-3">
    <label>LIBERADO POR</label>
    <input type="text" class="form-control" name="visto2" value="<?php if (!empty($visualizar['hora_entrada']))echo $visualizar['visto2'];?>">
</div>

<button type="submit" class="btn btn-primary">Enviar</button>
</form>
<br><br>
<a href="../index.html">Voltar</a>

</center>


<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
crossorigin="anonymous"></script>   

</body>
</html>