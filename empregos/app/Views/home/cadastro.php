<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="<?php echo base_url();?>/usuario/cadastro" method="POST">
        <input type="text" name="nome" placeholder="Nome"><br>
        <input type="text" name="sobrenome" placeholder="Sobrenome"><br>
        <input type="text" name="cnpj" placeholder="CNPJ da empresa em que você representa"><br>
        <select name="nivelRepresentante" id="">
            <option onselect="" value="">Nível de representação</option>
            <option value="RH">Departamento RH</option>
            <option value="Ceo">CEO</option>
            <option value="Gerente">Gerente</option>
        </select><br>
        <input type="email" name="email" placeholder="Email"><br>
        <input type="password" name="senha" placeholder="Senha"><br>
        <input type="submit" value="Cadastrar">
    </form>
</body>
</html>