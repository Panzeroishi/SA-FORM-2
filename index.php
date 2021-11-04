<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>
<body>
    

    <form action="#" method = "get">

    <label for="">Insira o CNPJ</label>
    <input type="text" name="cnpj">


<div class="resultado">
    <h3>Resultados</h3>
    <label for="">Razão Social</label>
    <input type="text">
    <label for="">Nome Fantasia</label>
    <input type="text">
    <label for="">Data de Abertura</label>
    
    
    <label for="">Matriz ou Filial</label>
    <input type="text">
    
    <label for="">Capital Social</label>
    <input type="text">
    
    <label for="">Porte</label>
    <input type="text">
    
    
    <label for="">Situação Cadastral</label>
    <input type="text">
    
    <label for="">Data da Situação Cadastral</label>
    <input type="date">
    
    <label for="">Motivo da Situação Cadastral</label>
    <input type="text">
    
    <label for="">Telefone</label>
    <input type="text">
    
</div>
    <input type="submit" name= "enviar">
    
    
</form>

    <?php
    if(isset($_GET["enviar"])){
        $cnpj = $_GET["cnpj"];
        $link = "https://www.receitaws.com.br/v1/cnpj/$cnpj&quot;;";
        $iniciar= curl_init($link);

        curl_setopt($iniciar,CURLOPT_RETURNTRANSFER,true)
    }
    
    
    ?>





</body>
</html>