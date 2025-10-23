<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    if(isset($_REQUEST['Enviar'])){
        $nome = $_REQUEST['cliente'];
        $genero = $_REQUEST['sexo'];
        $valor = $_REQUEST['valorcompra'];

        if ($genero == "feminino") {
            $desconto = 0.20; 
        } elseif ($genero == "masculino") {
            $desconto = 0.05; 
        } else {
            $desconto = 0;
        }

        $valor_desconto = $valor * $desconto;
        $valor_final = $valor - $valor_desconto;

        echo "<h3>Resultado:</h3>";
        echo "Olá, <b>$nome !<br>";
        echo "Desconto aplicado: <b>" .$desconto;
        echo "<br>Valor final: R$ " .$valor_final;
    }
    ?>
</body>
</html>