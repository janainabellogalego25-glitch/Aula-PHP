!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="estilo.css">
</head>
<body>
    <?php include "menu.php" ?>
    <div class="conteudo">
<h1>Cadastro de Alunos</h1>

<form  action="#" method="POST">
    
    <p>
        Informe o nome do aluno:<br>
    <input type="text" name="aluno" required>
    <p>
    <p>
        Digite a cidade do aluno:<br>
    <input type="text" name="cidade" >
    <p>
    <p>
        Digite o estado:<br>
    <input type="text" name="estado" >
    <p>
    <input type="submit" name="enviar" value="Cadastrar ">
</form>
 
</body>
</html>