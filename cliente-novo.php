<?php 
if ($_POST) {
//incluir o arquivo de conexão
    include "includes/conexao.php";
    include "includes/funcoes.php";
//capturar os dados do post
    $nome = addslashes($_POST['nome']);
    $telefone = addslashes($_POST['telefone']);
    $email = addslashes($_POST['email']);
    $cpf = addslashes($_POST['cpf']);
    if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        echo 'Email inválido!';
    }else{
        //criar o sql
        $sql = "INSERT INTO cliente VALUES (default,'{$nome}','{$telefone}','{$email}','{$cpf}')";
        // tenta cadastrar, retorna true ou false
        $resposta = $conn->query($sql);
        // se true, cadastro efetuado
        if ($resposta === true) {
            $msg = "Cadastrado com sucesso!";
        }else{
            $msg = "Erro ao cadastrar!";
        }
    }







}

?>

<?php include'includes/header.php';?>
    <div class="container">
        
        <form class="form-horizontal" method="POST" action="cliente-novo.php">
        
        <fieldset>
        <!-- Form Name -->
        <h1>Cadastro de Cliente</h1>

        <!-- Text input-->
        <div class="form-group">
        <label class="col-md-4 control-label" for="nome">Nome:</label>  
        <div class="col-md-4">
        <input id="nome" name="nome" type="text" placeholder="Digite o seu Nome" class="form-control input-md" required="">
            
        </div>
        </div>

        <!-- Text input-->
        <div class="form-group">
        <label class="col-md-4 control-label" for="telefone">Telefone:</label>  
        <div class="col-md-4">
        <input id="telefone" name="telefone" type="text" placeholder="Digite o seu telefone aqui" class="form-control input-md">
            
        </div>
        </div>

        <!-- Text input-->
        <div class="form-group">
        <label class="col-md-4 control-label" for="email">Email:</label>  
        <div class="col-md-4">
        <input id="email" name="email" type="text" placeholder="Digite o seu email" class="form-control input-md" required="">
            
        </div>
        </div>

        <!-- Text input-->
        <div class="form-group">
        <label class="col-md-4 control-label" for="cpf">Cpf:</label>  
        <div class="col-md-4">
        <input id="cpf" name="cpf" type="text" placeholder="Digite o seu cpf" class="form-control input-md" required="">
            
        </div>
        </div>

        <!-- Button -->
        <div class="form-group">
        <label class="col-md-4 control-label" for="cadastro"></label>
        <div class="col-md-4">
            <button id="cadastro" name="cadastro" class="btn btn-primary">Cadastrar</button>
        </div>
        </div>

        </fieldset>
        </form>
        <div>
            <?php if(isset($msg)) echo $msg; // se existir (isset), imprima ?> 
        </div>
    </div>
<?php include'includes/footer.php' ?>

    