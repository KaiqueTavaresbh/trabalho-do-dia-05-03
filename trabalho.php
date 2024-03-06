<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <title>Document</title>
</head>
<body>
  <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">

    <label for="name">Nome</label>
    <input type="text" id="name" name="nome" required> <br>

    <label for="cpf">CPF</label>
    <input type="text" id="cpf" name="cpf"><br>

    <input type="checkbox" id="pao" name="queijo">
    <label for="pao">Come pão de queijo?</label><br>

    <label for="nascimento">Data de Nascimento</label>
    <input type="date" id="nascimento" name="nascimento"><br>

    <label for="telefone">Telefone</label>
    <input type="text" id="telefone" name="telefone"><br>

    <label for="email">Email</label>
    <input type="email" id="email" name="email"><br>

    <input type="checkbox" id="estudante" name="estudante">
    <label for="estudante">Você é estudante?</label><br>
    
    <input type="submit" value="Enviar"><br>
  </form>

  <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") { 
        $nome = isset($_POST["nome"]) ? $_POST["nome"] : "Não informado";
        $cpf = isset($_POST["cpf"]) ? $_POST["cpf"] : "Não informado";
        $queijo = isset($_POST["queijo"]) ? "Sim" : "Não";
        $nascimento = isset($_POST["nascimento"]) ? $_POST["nascimento"] : "Não informado";
        $telefone = isset($_POST["telefone"]) ? $_POST["telefone"] : "Não informado";
        $email = isset($_POST["email"]) ? $_POST["email"] : "Não informado";
        $estudante = isset($_POST["estudante"]) ? "Sim" : "Não";

        echo "<p>Eu, $nome, $estudante sou estudante. Meu número de CPF é $cpf, nasci em $nascimento e tenho " . (date("Y") - date("Y", strtotime($nascimento))) . " anos de idade. Meu telefone para contato é $telefone e o meu email é $email. Eu " . ($queijo == "Sim" ? "gosto" : "não gosto") . " de pão de queijo.</p>";
    } elseif ($_SERVER["REQUEST_METHOD"]=="GET" && !empty($_POST)) {
        echo "<p>Formulário preenchido de forma incorreta.</p>";
    }
  ?>
</body>
</html>
