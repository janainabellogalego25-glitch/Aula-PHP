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
        $nome = $_POST['cliente'];
        $genero = $_POST['sexo'];
        $valor = $_POST['valorcompra'];

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
        echo "Olá, <b>$nome</b>!<br>";
        echo "Desconto aplicado: <b>" . ($desconto * 100);
        echo "Valor do desconto: <b>R$ " .$valor_desconto, "</b><br>";
        echo "Valor final: <b>R$ " . $valor_final "</b>";
    }
    ?>
</body>
</html>