<h1>Cadastro de Disciplinas</h1>

<form method="POST" action="">
    <label>Informe o nome da disciplina:</label><br>
    <input type="text" name="disciplina" required><br><br>

    <label>Escolha o curso:</label><br>
    <select name="curso" required>
        <option value="">Escolha o curso</option>
        <option value="Informática">Informática</option>
        <option value="Administração">Administração</option>
        <option value="Logística">Logística</option>
        <option value="Enfermagem">Enfermagem</option>
    </select><br><br>

    <input type="submit" value="Cadastrar Disciplina">
</form>
