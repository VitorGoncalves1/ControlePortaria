<?php 

$cpf=  $_GET['cpf'];

include('../../conexao.php');


if(count($_POST)>0){


$placa =  $_POST['placa'];
$hora =  $_POST['hora'];
$data  =  $_POST['data'];
$visto = $_POST['visto'];

$cont  =  0;

$sql_verifica = "SELECT * FROM horario_visitante";
$query_verifica = $mysqli->query($sql_verifica) or die($mysqli->error);

while ($verifica = $query_verifica -> fetch_assoc()){

if( $verifica['data']== $data && $verifica['cpf']==$cpf){
    $cont++;
}
}

if($cont == 0){
    $sql_clientes = "INSERT INTO horario_visitante (cpf,placa,data,hora_entrada,visto) values ('$cpf','$placa','$data','$hora','$visto')";
    $query_clientes = $mysqli->query($sql_clientes) or die($mysqli->error); 

    echo "<script> alert('Arquivo inserido com sucesso');  
                    window.location.href = '../../index.html';
    </script>";
}

else {

    echo "<script> alert('Arquivo ja cadastrado');  
    window.location.href = '../../index.html';
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
    <title>Cadastrar Horario</title>
</head>
<body>
 
<center>

<h1>Cadastro de Expedição</h1>

<form method="post">   

<?php

echo "<p> CPF </p> <input type = 'text' value = '" .$cpf."' disabled > ";

$sql_placa = "SELECT * FROM veiculo_visitante where cpf = '$cpf' ";
$query_placa = $mysqli->query($sql_placa) or die($mysqli->error); 

echo " <p>Selecione a placa do veiculo</p> <select name = 'placa'>
       <option value = 'Não Possui'> "."Não possui"."</option>
        ";


while($placaf = $query_placa ->fetch_assoc()){


echo "<option value = '".$placaf['placa']."'> ".$placaf['placa']."</option>
            
        ";    


}

echo "</select>";

?>

<a href="../../veiculo/veiculoVisitante.php">Cadastrar Veiculo?</a>

<div class="form-group w-25 p-3">
    <label>INFORME A DATA</label>
    <input type="date" class="form-control" name="data">
</div>
<div class="form-group w-25 p-3">
    <label>INFORME A HORA ENTRADA</label>
    <input type="time" class="form-control" name="hora">
</div>
<div class="form-group w-25 p-3">
    <label>LIBERADO POR</label>
    <input type="text" class="form-control" name="visto">
</div>

<button type="submit" class="btn btn-primary">Enviar</button>
</form>
<br><br>
<a href="../index.html">Voltar</a>
<a href="../../index.html">Tela Inicio</a>

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