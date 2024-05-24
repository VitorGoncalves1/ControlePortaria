<?php
include('../conexao.php');



    if(count($_POST)>0){

        $dataI = $_POST['dataI'];
        $dataF = $_POST['dataF'];

    //$sql_clientes = "SELECT vis.nome, vis.tipo, hor.data, hor.cpf, vei.modelo, hor.hora_entrada, hor.hora_saida, hor.notafiscal, hor.observacoes, hor.destino FROM horario_visitante hor 
    //inner join veiculo_visitante vei on hor.placa  =  vei.placa 
    //inner join visitantes vis on vei.cpf = vis.cpf  where hor.data between '$dataI' and '$dataF'";

      $sql_clientes = "SELECT vis.nome, vis.tipo, hor.cpf, hor.placa, hor.data, hor.observacoes, hor.notafiscal, hor.visto, hor.visto2 FROM horario_visitante hor 
    inner join visitantes vis on vis.cpf = hor.cpf
    where hor.data between '$dataI' and '$dataF'";
    

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
    <title>Visualizar Visitante</title>
    <link rel="stylesheet" href="../css/tabela.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
</head>

<center>

<body>


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
                <th>Nome</th>
                <th>Cpf</th>
                <th>Placa</th>
                <th>Data</th>
                <th>Tipo</th>
                <th>observações</th>
                <th>Nota Fiscal</th>
                <th>Libera Saida</th>
                <th>Libera Entrada</th>

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
                                <?php echo $cliente['cpf'] ?>
                            </td>

                            <td>
                                <?php echo $cliente['placa'] ?>
                            </td>

                            <td>
                                <?php echo $cliente['data'] ?>
                            </td>
                            <td>
                                <?php echo $cliente['tipo'] ?>
                            </td>
                            <td>
                                <?php echo $cliente['observacoes'] ?>
                            </td>
                            <td>
                                <?php echo $cliente['notafiscal'] ?>
                            </td>
                            <td>
                                <?php echo $cliente['visto'] ?>
                            </td>
                            <td>
                                <?php echo $cliente['visto2'] ?>
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