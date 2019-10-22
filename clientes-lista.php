<?php
include 'includes/conexao.php';

$sql = "SELECT * FROM cliente";
if (rowCount($sql)>0) {
    $nome = $dados['nome'];
    $telefone = $_POST['telefone'];
    $email = $_POST['email'];
    $cpf = $_POST['cpf'];
}
mysql_fetch_assoc($dados);



?>
<?php include'includes/header.php' ?>
    <div class="container">
        <h1>Lista de Clientes</h1>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">NOME</th>
                    <th scope="col">TELEFONE</th>
                    <th scope="col">E-MAIL</th>
                    <th scope="col">CPF</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td><?php echo ""?></td>
                    <td>(21)9999-8888</td>
                    <td>bruna.martins@email.com</td>
                    <td>789.987.456-45</td>
                </tr>
            </tbody>
        </table>
    </div>    
<?php include'includes/footer.php' ?>

    