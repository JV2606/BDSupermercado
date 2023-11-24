<?php
if(isset($_POST["submit"]))
inclue_once("config.php")
$nome = $_POST['nome']
$endereco = $_POST['endereco']
$telefone = $_POST['telefone']
$email = $_POST['email']

$response = mysqli_query($conexao,"INSERT INTO cliente(nome,endereco,telefone,email)VALUES('$nome','$endereco','$telefone','$email'))")









?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style2.css">
</head>

<body>
    <main>
        <div>
         <form action="form1.php" method="post">
         <h1>FORMULÁRIO CLIENTE</h1> <br>
            <label for="nome">Nome</label> <br>
         <input type="text" name="nome" id="nome" placeholder="Inserir nome"> <br>
         <label for="endereco">Endereço</label><br>
         <input type="text" name="endereco" id="endereco" placeholder="Inserir Data"><br>
         <label for="telefone">Telefone</label> <br>
         <input type="text" name="telefone" id="telefone" placeholder="Inserir telefone"><br>
         <label for="email">E-mail</label><br>  
         <input type="text" name="email" id="email" placeholder="Inserir E-mail"><br>
       
         <form action="http://localhost/WEB-PHP-MYSQL/form2.php">
    <input type="submit" name="submit" value="Entrar" />
    </form>
    <a href= 'login.html'><button>Voltar</button></a>




         </form>

        </div>
    </main>
</body>
</html>