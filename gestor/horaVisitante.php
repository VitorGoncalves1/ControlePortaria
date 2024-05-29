<?php 

include ('../conexao.php');

$cpf = $_GET['cpf'];
$data = date('Y/m/d');

if(count($_POST)>0){


$horaentrada = $_POST['horaentrada'];
$horasaida = $_POST['horasaida'];
$horaentrada2 = $_POST['horaentrada2'];
$horasaida2 = $_POST['horasaida2'];


$sql_horario =  "UPDATE horario_terceiro SET

    hora_entrada = '$horaentrada',
    hora_saida = '$horasaida',
    hora_entrada2 = '$horaentrada2',
    hora_saida2 = '$horasaida2'

    WHERE 
        
        cpf = '$cpf' and data = '$data'
";
$query_horario = $mysqli->query($sql_horario) or die ("Erro ao acessar o banco de dados". $mysqli->error);

if($query_horario){
    echo "<script> 
                alert('Cadastrado com sucesso');
                window.location.href = '../index.html';
          </script>";

        }
}

$sql_visualizar = "SELECT * FROM horario_terceiro where cpf = '$cpf' and data =  '$data'";
$query_visualizar = $mysqli->query($sql_visualizar) or die ("Erro ao acessar o banco de dados". $mysqli->error);
$visualizar  = $query_visualizar->fetch_assoc();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <title>Horario</title>
</head>

<body>


    <center>

        <h1>Cadastro de Horario</h1>

     <form method="post">   
        <div class="form-group w-25 p-3">
            <label>HORA ENTRADA</label>
            <input type="time" class="form-control" name="horaentrada" value="<?php if(!empty($visualizar['hora_entrada'])) echo $visualizar['hora_entrada']; ?>">
        </div>
        <div class="form-group w-25 p-3">
            <label>HORA SAIDA</label>
            <input type="time" class="form-control" name="horasaida" value = "<?php if(!empty($visualizar['hora_saida'])) echo $visualizar['hora_saida'];?>">
        </div>
        <div class="form-group w-25 p-3">
            <label>HORA ENTRADA2</label>
            <input type="time" class="form-control" name="horaentrada2" value = "<?php if(!empty($visualizar['hora_entrada2'])) echo $visualizar['hora_entrada2'];?>">
        </div>
        <div class="form-group w-25 p-3">
            <label>HORA SAIDA2</label>
            <input type="time" class="form-control" name="horasaida2" value = "<?php if(!empty($visualizar['hora_saida2'])) echo $visualizar['hora_saida2'];?>">
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