<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>
<body>
    

    <?php
    /**if(isset($_GET['enviar'])){
        $cnpj = $_GET["cnpj"];
        $link = "https://www.receitaws.com.br/v1/cnpj/$cnpj&quot;";
        $iniciar= curl_init($link);

        curl_setopt($iniciar,CURLOPT_RETURNTRANSFER,true);
        curl_setopt($iniciar, CURLOPT_SSL_VERIFYPEER, false);
        $resultados = json_decode(curl_exec($iniciar));
      var_dump($resultados);
        foreach($resultados as $chave=>$texto){
          $$chave = $texto;
      }
      curl_close($iniciar);
    }*/
    if (isset($_GET['enviar'])) {
        $cnpj = $_GET['cnpj'];
        $url = "https://www.receitaws.com.br/v1/cnpj/$cnpj";
        $ch = curl_init($url);

        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        $resultado = json_decode(curl_exec($ch));
        var_dump($resultado);
        foreach ($resultado as $res=>$index) {
            $$res = $index;
           
        }
        curl_close($ch);
    //______________________________________________________________________________
     }


    
    ?>

<form action="#" method ="get">

<label for="">Insira o CNPJ</label>
<input type="text" name="cnpj">



<input type="submit" name= "enviar">


</form>

<div class="resultado">
    <h3>Resultados</h3>
    <label for="">Razão Social</label>
    <input type="text" id="nome" value ="<?= isset($nome)?$nome:''?>">
    <label for="">Nome Fantasia</label>
    <input type="text" value ='<?=$nome?>'>
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





</body>
</html>