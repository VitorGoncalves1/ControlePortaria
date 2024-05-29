<?php 

$cpf=  $_GET['cpf'];

include('../../conexao.php');

$cont2  =  0;

if(count($_POST)>0){


$placa =  $_POST['placa'];
$hora =  $_POST['hora'];
$data  =  $_POST['data'];
$cont  =  0;

$sql_verifica = "SELECT * FROM horario_terceiro";
$query_verifica = $mysqli->query($sql_verifica) or die($mysqli->error);

while ($verifica = $query_verifica -> fetch_assoc()){

if( $verifica['data']== $data && $verifica['cpf']==$cpf){
    $cont++;
}
}

if($cont == 0){
    $sql_clientes = "INSERT INTO horario_terceiro (cpf,placa,data,hora_entrada) values ('$cpf','$placa','$data','$hora')";
    $query_clientes = $mysqli->query($sql_clientes) or die($mysqli->error); 
}

else {

    echo "<script> 
    
        alert('Arquivo já cadastrado');
        window.location.href = 'index.php';
    
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
    <title>Cadastrar Horario</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
</head>
<body>
 
<center>

<form action="" method="POST">

<?php

echo "<p> CPF </p> <input type = 'text' value = '" .$cpf."'> ";

$sql_placa = "SELECT * FROM veiculo_terceiro where cpf = '$cpf' ";
$query_placa = $mysqli->query($sql_placa) or die($mysqli->error); 


echo " <p>Selecione a placa do veiculo</p> <select name = 'placa'>";


while($placaf = $query_placa ->fetch_assoc()){


echo "<option value = '".$placaf['placa']."'> ".$placaf['placa']."</option>";    

if($placaf['placa']){
    $cont2++;
}

}

echo "</select>";

if($cont2==0){
    echo "<script> alert('Não possui nenhum veiculo cadastrado com esse cpf'); 
            window.location.href = '../../veiculo/veiculoGestor.php'; </script>";
}

?>


<a href="../../veiculo/veiculoGestor.php">Cadastrar Veiculo?</a>

<div class="form-group w-25 p-3">
    <label>INFORME A DATA</label>
    <input type="date" class="form-control" name="data">
</div>
<div class="form-group w-25 p-3">
    <label>INFORME A HORA ENTRADA</label>
    <input type="time" class="form-control" name="hora">
</div>


<button type="submit" class="btn btn-primary">Enviar</button>
</form>
<br><br>
<a href="../../index.html">Tela Inicio</a>

</center>

</body>



</html>