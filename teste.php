<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>teste de conex</title>
</head>
<link rel="stylesheet" href="style.css">
<style>

input{
    display:block;


}
div{
width:300px;
margin:auto;


}
</style>






<body>


<div>
<h1>●▬▬▬▬▬▬▬▬▬▬▬ஜ۩۞۩ஜ▬▬▬▬▬▬▬▬▬▬▬●
 ░░░░░░FORMULARIO ░░░░░░ 
●▬▬▬▬▬▬▬▬▬▬▬ஜ۩۞۩ஜ▬▬▬▬▬▬▬▬▬▬▬●</h1>
    




</div>



<div>
    
<form method="get">
    <input type="text" name="nome" placeholder="nome">
    <input type="email" name="email"placeholder="email">
    <input type="number" name="idade"placeholder="idade" max="18">
    <input type="password" name="senha"placeholder="senha">
    <button type="submit">ENVIAR</button>

</form>

</div>
<div>
    <?php
     $nome = isset($_GET['nome'])?$_GET['nome']:"";
     echo "<br>";
     $email= isset($_GET['email'])?$_GET['email']:"";
     echo "<br>";
      $idade = isset($_GET['idade'])?$_GET['idade']:0;
     echo "<br>";
     $senha = isset($_GET['senha'])?$_GET['senha']:"";
     echo "<br>";
     
     
     if(isset($_GET['nome'])){
     $conexao = new PDO("mysql:dbname=lpw;host=localhost","root","ifpe");
     $inserir = $conexao->prepare("INSERT INTO alunos(nome,email,senha,idade)
     VALUES (:NOME,:EMAIL,:SENHA,:IDADE)");
     $inserir->bindparam(":NOME",$nome);
     $inserir->bindparam(":EMAIL",$email);
     $inserir->bindparam(":SENHA",$senha);
     $inserir->bindparam(":IDADE",$idade);
     $inserir->execute();
    
     $selecao = $conexao->prepare("SELECT*FROM alunos");
     $selecao->execute();
     $resultado = $selecao->fetchall(PDO::FETCH_ASSOC);
     print_r($resultado);
     
     


    }
     ?>
 
</div>
</body>
</html>