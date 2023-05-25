<?php
$servername = "localhost"; 
$username = "seu_usuario"; 
$password = "sua_senha"; 
$dbname = "projeto3"; 


$conn = mysqli_connect($servername, $username, $password, $dbname);

o
if (!$conn) {
    die("Falha na conexão: " . mysqli_connect_error());
}
?>
<?php
session_start();


if (!isset($_SESSION["email"])) {
    header("Location: login.php");
    exit();
}

$tarefas = obterTarefas($_SESSION["email"]);

?>