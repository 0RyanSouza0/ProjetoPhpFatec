<?php

if ($_POST) {
    $host = 'localhost';
    $dbname = 'FORMULARIO';
    $username = 'root';
    $password = '';

    // Conexão com o banco
    try {
        $banco = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
        $banco->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (PDOException $e) {
        die("Erro na conexão: " . $e->getMessage());
    }

    // Captura dos dados
    $nome = trim($_POST['nome']);
    $email = trim($_POST['email']);
    $telefone = trim($_POST['telefone']);
    $data_nascimento = $_POST['data_nascimento'];
    $genero = $_POST['genero'];
    $tipo_evento_inscricao = trim($_POST['tipo_evento_inscricao']);
    $descricao_evento = trim($_POST['descricao_evento']);

    // Validações
    $erros = [];

    if (empty($nome) || strlen($nome) < 3) {
        $erros[] = "Nome inválido (mínimo 3 caracteres).";
    }

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $erros[] = "Email inválido.";
    }

    if (!preg_match('/^\(?\d{2}\)?\s?\d{4,5}-?\d{4}$/', $telefone)) {
        $erros[] = "Telefone inválido.";
    }

    if (!DateTime::createFromFormat('Y-m-d', $data_nascimento)) {
        $erros[] = "Data de nascimento inválida.";
    }

    if (!in_array($genero, ['Masculino', 'Feminino', 'Outro'])) {
        $erros[] = "Gênero inválido.";
    }

    if (empty($tipo_evento_inscricao)) {
        $erros[] = "Tipo de evento é obrigatório.";
    }

    if (strlen($descricao_evento) < 10) {
        $erros[] = "Descrição do evento deve ter ao menos 10 caracteres.";
    }

    if (count($erros) > 0) {
        foreach ($erros as $erro) {
            echo "<p>$erro</p>";
        }
    } else {
        $sql = "INSERT INTO USER (nome, email, telefone, data_nascimento, genero, tipo_evento_inscricao, descricao_evento) 
                VALUES (:nome, :email, :telefone, :data_nascimento, :genero, :tipo_evento_inscricao, :descricao_evento)";

        $stmt = $banco->prepare($sql);

        $stmt->execute([
            ':nome' => $nome,
            ':email' => $email,
            ':telefone' => $telefone,
            ':data_nascimento' => $data_nascimento,
            ':genero' => $genero,
            ':tipo_evento_inscricao' => $tipo_evento_inscricao,
            ':descricao_evento' => $descricao_evento
        ]);

        echo "Dados salvos com sucesso!";
    }
} else {
    echo "Nenhum dado recebido.";
}

?>
