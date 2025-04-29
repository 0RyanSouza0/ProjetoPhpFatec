
<?php

if($_POST){
$host = 'localhost'; 
    $dbname = 'FORMULARIO'; 
    $username = 'root'; 
    $password = ''; 


    $banco = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);


    $nome=$_POST['nome'];
    $email=$_POST['email'];
    $telefone = $_POST['telefone'];
    $data_nascimento=$_POST['data_nascimento'];
    $genero=$_POST['genero'];
    $tipo_evento_inscricao=$_POST['tipo_evento_inscricao'];
    $descricao_evento=$_POST['descricao_evento'];

    $sql = "INSERT INTO USER (nome, email, telefone, data_nascimento,genero,tipo_evento_inscricao,descricao_evento) VALUES
    (:nome, :email, :telefone, :data_nascimento,:genero,:tipo_evento_inscricao,:descricao_evento)";

    $stmt = $banco->prepare($sql);

    $stmt->execute([
        ':nome'=>$nome,
        ':email'=>$email,
        ':telefone'=>$telefone,
        ':data_nascimento'=>$data_nascimento,
        ':genero'=>$genero,
        ':tipo_evento_inscricao'=>$tipo_evento_inscricao,
        ':descricao_evento'=>$descricao_evento
    ]);

    echo "conectou";
}else{
    echo "nao salvou os dados";
}




?>
