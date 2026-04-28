<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Sistema de Matrícula</title>
</head>
<body>
    <h1>Nova Matrícula</h1>
    <form action="/" method="POST">
        <label>Nome do Aluno:</label><br>
        <input type="text" name="nome"><br><br>
        
        <label>Idade:</label><br>
        <input type="text" name="idade"><br><br>

        <label>Curso:</label><br>
        <select name="curso">
            <option value="">Selecione...</option>
            <option value="PHP Backend">PHP Backend</option>
            <option value="Frontend">Frontend</option>
        </select><br><br>

        <button type="submit">Enviar Matrícula</button>
    </form>
</body>
</html>