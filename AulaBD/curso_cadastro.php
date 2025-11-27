 !DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

  <?php include "menu.php" ?>

    <div class="conteudo">

     <h1>Cadastro de Cursos</h1>
        <form action="curso_cadastro.php" method="post">
        <label>Informe o nome do curso:</label>
        <input type="text" name="curso" required>

        <label>Informe o nome do coordenador:</label>
        <input type="text" name="coordenador" required>

        <br>
        <input type="submit" value="Cadastrar Curso">
    </form>
     
</body>
</html>