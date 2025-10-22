<h1>Cadastro de Alunos</h1>

<form method="POST" action="">
    <label>Informe o nome do aluno:</label><br>
    <input type="text" name="aluno" required><br><br>

    <label>Escolha o curso:</label><br>
    <select name="curso" required>
        <option value="">Escolha o curso</option>
        <option value="Informática">Informática</option>
        <option value="Administração">Administração</option>
        <option value="Logística">Logística</option>
        <option value="Enfermagem">Enfermagem</option>
    </select><br><br>

    <input type="submit" value="Cadastrar Aluno">
</form>
