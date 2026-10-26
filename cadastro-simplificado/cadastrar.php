<?php

include("conexao.php");
//Verifica se os campos estao vazios, se algum campo estiver vazio da um aviso, caso tudo esteja preenchido segue-se com o cadastro
if(empty($_POST['nome']) || empty($_POST['email']) || empty($_POST['senha'])) {
    print "<script>alert('ERROR NO CADASTRO , OS CAMPOS OBRIGATÓRIOS DEVEM SER PREENCHIDOS!')</script>";   
}else{
    $table = "usuarios";
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    //Faz a verificaçao se o email esta no formato correto, se nao da um aviso que e invalido
    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $senha_criptografada = password_hash($senha, PASSWORD_DEFAULT);
        $sql = "INSERT INTO $table (nome, email, senha) VALUES ('$nome', '$email', '$senha_criptografada')";
        //Verifica se o Cadastro Foi efetuado com sucesso ou nao
        if (mysqli_query($conn, $sql)) {
            print "<script>alert('Cadastro efetuado com sucesso!')</script>";
        }else{
            print "<script>alert('Ocorreu um erro ao cadastrar!.')</script>";
        }
        mysqli_close($conn);
    }else{
    print "<script>alert('Email invalido')</script>";
    }
}
print "<script>location.href='index.php'</script>";

?>




























