<?php
session_start();
$nome_partida= $_POST["nomePartida"];
$descricao_partida = $_POST["descpartida"]; 
$endereco = $_POST["rua"];
$cidade= $_POST["cidade"];
$bairro = $_POST["Bairro"];    
$estado = $_POST["estado"];    

$_SESSION['valorEndereco'] = $endereco;

//$dbh = new PDO('mysql:host=localhost:8081;dbname=naTrave', 'root', '');
//$connect = mysqli_connect('127.0.0.1', 'root', 'root', 'natrave');
//echo("<br/>");
//echo("nome: $nome_partida");echo("<br/>");
//echo("descrição partida: $descricao_partida");echo("<br/>");
//echo("rua: $endereco");echo("<br/>");
//echo("cidade: $cidade");echo("<br/>");
//echo("bairro: $bairro");echo("<br/>");
//echo("estado: $estado");echo("<br/S>");



header('location: index.php');
?>