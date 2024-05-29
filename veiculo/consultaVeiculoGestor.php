<?php 

include '../conexao.php';

if(count($_POST)>0){
    $nome = $_POST['nome'];
    $sql_veiculo = "SELECT * FROM terceiro WHERE nome LIKE '%$nome%'";
    $query_veiculo = $mysqli->query($sql_veiculo) or die($mysqli->error);
}
?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consulta de Nomes</title>
</head>
<body>

<center> 

<h1>Consulta de Usuários</h1>

<form action="" method="post">

<p>Informe o nome</p>
<input type="text" name="nome">

<input type="submit" value="Enviar">

</form>

<table border = '1' cellspadding = '3' >
    <thead >
        <tr>
            <th>Nome</th>
            <th>CPF</th>
        </tr>
    </thead>
    
    <?php if (count($_POST)>0) while ($visualizar = $query_veiculo->fetch_assoc()) { ?>
    
    <tbody>
        <tr>   
            <td><?php echo $visualizar['nome']; ?></td>
            <td><?php echo $visualizar['cpf']; ?></td>
        </tr>
    </tbody>
    <?php }?>
</table>


<br><br>

<a href="../index.html">Voltar</a>

</center>


</body>
</html>