<?php
include('../conexao.php');



    if(count($_POST)>0){

        $dataI = $_POST['dataI'];
        $dataF = $_POST['dataF'];

    $sql_clientes = "SELECT ter.nome, hor.data, hor.cpf, vei.modelo, hor.hora_entrada, hor.hora_saida, hor.hora_entrada2, hora_saida2 FROM horario_terceiro hor 
    inner join veiculo_terceiro vei on hor.placa  =  vei.placa 
    inner join terceiro ter on vei.cpf = ter.cpf  where hor.data between '$dataI' and '$dataF'";
    
    $query_clientes = $mysqli->query($sql_clientes) or die($mysqli->error);
    $num_clientes = $query_clientes->num_rows;

    }
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Visualizar Gestor</title>
    <link rel="stylesheet" href="../css/tabela.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
</head>
<body>

<center>

<form action="" method="post">

<div class="form-group w-25 p-1">
            <label>DATA INÍCIO</label>
            <input type="date" class="form-control " name="dataI">
        </div>
<div class="form-group w-25 p-1">
            <label>DATA FINAL</label>
            <input type="date" class="form-control" name="dataF" >
        </div>

        <button type="submit" class="btn btn-primary">Enviar</button>

</form>

    <table>
        <thead>
            <tr>
                <th>NOME</th>
                <th>DATA</th>
                <th>CPF</th>
                <th>Modelo</th>
                <th>Hora Entrada</th>
                <th>Hora Saida</th>
                <th>Hora Entrada</th>
                <th>Hora Saida</th>
            </tr>
        </thead>
        <?php
   
   if(count($_POST)>0){
                while ($cliente = $query_clientes->fetch_assoc()) { ?>
                    <tbody>
                        <tr>
                            <td>
                                <?php echo $cliente['nome'] ?>
                            </td>
                            <td>
                                <?php echo $cliente['data'] ?>
                            </td>

                            <td>
                                <?php echo $cliente['cpf'] ?>
                            </td>

                            <td>
                                <?php echo $cliente['modelo'] ?>
                            </td>

                            <td>
                                <?php echo $cliente['hora_entrada'] ?>
                            </td>

                            <td>
                                <?php echo $cliente['hora_saida'] ?>
                            </td>

                            <td>
                                <?php echo $cliente['hora_entrada2'] ?>
                            </td>

                            <td>
                                <?php echo $cliente['hora_saida2'] ?>
                            </td>

                        
                        </tr>
                    </tbody>

                <?php

                }}
            
            ?>
    </table>
<a href="../index.html">Voltar</a>
</body>
</html>




</body>

</html>