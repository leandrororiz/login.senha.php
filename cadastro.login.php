<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <h2>Cadastro</h2>
    <form method="post">
        Nome: <input type="text" name="nome" /><br />
        Usuário: <input type="text" name="user" /><br />
        Email: <input type="text" name="email" /><br />
        CPF: <input type="text" name="CPF" /><br />
        Data de Nascimento: <input type="text" name="DatadeNascimento" /><br />
        Sexo: 
        <select name="Sexo">
            <option value="Masculino">Masculino</option>
            <option value="Feminino">Feminino</option>
        </select><br><br>
        Endereço: <input type="text" name="End" /><br />
        UF: 
        <select name="UF">
            <option value="AC">AC</option>
            <option value="RO">RO</option>
            <option value="AM">AM</option>
            <option value="RR">RR</option>
            <option value="PA">PA</option>
            <option value="AP">AP</option>
            <option value="TO">TO</option>
            <option value="MA">MA</option>
            <option value="PI">PI</option>
            <option value="CE">CE</option>
            <option value="RN">RN</option>
            <option value="PB">PB</option>
            <option value="PE">PE</option>
            <option value="AL">AL</option>
            <option value="SE">SE</option>
            <option value="BA">BA</option>
            <option value="MG">MG</option>
            <option value="ES">ES</option>
            <option value="RJ">RJ</option>
            <option value="SP">SP</option>
            <option value="PR">PR</option>
            <option value="SC">SC</option>
            <option value="RS">RS</option>
            <option value="MS">MS</option>
            <option value="MT">MT</option>
            <option value="GO">GO</option>
            <option value="DF">DF</option>
        </select><br>
        Senha: <input type="password" name="Senha"> <br>
        <input type="submit" value="Cadastrar" />
    </form>

    <h2>Login</h2>
    <form action="processa_login.php" method="post">
        <label for="username">Usuário:</label><br>
        <input type="text" id="username" name="username" required><br>
        <label for="password">Senha:</label><br>
        <input type="password" id="password" name="password" required><br><br>
        <input type="submit" value="Entrar">
    </form>

    <?php
    // Processamento do formulário de login
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $username = $_POST['username'];
        $password = $_POST['password'];

        // Aqui você deve ter uma lógica para validar o usuário e senha
        $valid_username = 'user'; // Nome de usuário válido
        $valid_password = 'senha'; // Senha válida

        if ($username === $valid_username && $password === $valid_password) {
            echo "Login realizado com sucesso";
        } else {
            echo "Usuário ou senha incorretos.";
        }
    }
    ?>
</body>
</html>
