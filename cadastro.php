<?php
    include("conexao.php");

  
    $nome_partida=$_POST['nome_partida'];
    $descricao_partida=$_POST['descricao_partida'];
    $data=$_POST['data'];
    $rua=$_POST['rua'];
    $bairro=$_POST['bairro'];
    $cidade=$_POST['cidade'];
    $estado=$_POST['estado'];
    $nome=$_POST['nome'];
    $email=$_POST['email'];
    $telefone=$_POST['telefone'];

    $result = "INSERT INTO partidatb (nome_partida, descricao_partida, data, rua, bairro, cidade, estado, nome, email, telefone) VALUES ('$nome_partida','$descricao_partida','$data','$rua','$bairro','$cidade','$estado','$nome','$email','$telefone')";
    $resultado = mysqli_query($mysqli, $result);


    if ($resultado === TRUE) {
    //echo "New record created successfully";
} else {
    echo "Error: " . $resultado . "<br>" . $mysqli->error;
}

$mysqli->close();


?>

<meta http-equiv="refresh" content="0; index.php">