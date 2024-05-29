<?php 

include '../conexao.php';



?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Error</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>

<center>
<h1>Informe o erro</h1>

<form method="post">

<div class="mb-3 w-25">
  <label for="exampleFormControlInput1" class="form-label">Informe a tela</label>
  <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Ex: Tela Cadastro Terceiro">
</div>
<div class="mb-3 w-25">
  <label for="exampleFormControlTextarea1" class="form-label">Observações</label>
  <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea> 
</div>

<button class="btn btn-primary">Enviar</button>

</form> 

</center>
</body>
</html>