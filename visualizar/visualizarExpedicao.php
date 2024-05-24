<?php 

include ('../conexao.php');

if(count($_POST)>0){


$dataI = $_POST['dataI'];
$dataF = $_POST['dataF'];

$sql_visualizar =  "SELECT * FROM expedicao where data between '$dataI' and '$dataF' ";
$query_visualizar = $mysqli->query($sql_visualizar) or die ("Erro ao acessar o banco de dados". $mysqli->error);

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/tabela.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <title>Visualizar Expedição</title>
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

        <button type="submit" class="btn btn-primary">BUSCAR</button>

</form>
<br><br>

<table>
  <thead>
    <tr>
      <th>OP</th>
      <th>QUANT/PECAS</th>
      <th>QUANT/VOLUME</th>
      <th>NOTA FISCAL</th>
      <th>HORA</th>
      <th>PLACA/VEICULO</th>
      <th>VISTO PORTARIA</th>
      <th>OBSERVAÇÕES</th>
    </tr>
  </thead>
  
  <?php if(count($_POST)>0){ 
          while($visualizar = $query_visualizar->fetch_assoc()){?>
  <tbody>
  <tr>
      <td><?php echo $visualizar['op']?></td>
      <td><?php echo $visualizar['pecas']?></td>
      <td><?php echo $visualizar['volume']?></td>
      <td><?php echo $visualizar['notafisc']?></td>
      <td><?php echo $visualizar['hora']?></td>
      <td><?php echo $visualizar['placa']?></td>
      <td><?php echo $visualizar['visto']?></td>
      <td><?php echo $visualizar['observacoes']?></td>
    </tr>
<?php }}?>
  </tbody>
</table>

<a href="../index.html">Voltar</a>

</center>

</body>
</html>