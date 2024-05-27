<?php
// Conexão com o banco de dados
$servername = "localhost";
$username = "root"; // Nome de usuário padrão do XAMPP
$password = ""; // Senha padrão do XAMPP (vazio por padrão)
$database = "lavajato"; // Nome do seu banco de dados no MySQL

$conn = new mysqli($servername, $username, $password, $database);

// Verifica a conexão
if ($conn->connect_error) {
    die("Falha na conexão: " . $conn->connect_error);
}

// Recebe os dados do formulário
$data = $_POST['data'];
$cliente = $_POST['cliente'];
$veiculo = $_POST['veiculo'];
$valor = $_POST['valor'];
$formaPagamento = $_POST['formaPagamento'];

// Prepara e executa a query SQL para inserir os dados
$sql = "INSERT INTO historico (data, cliente, veiculo, valor, formaPagamento) 
        VALUES ('$data', '$cliente', '$veiculo', '$valor', '$formaPagamento')";


if ($conn->query($sql) === TRUE) {
    echo "Dados salvos com sucesso!";
} else {
    echo "Erro ao salvar os dados: " . $conn->error;
}

// Fecha a conexão com o banco de dados
$conn->close();
?>
