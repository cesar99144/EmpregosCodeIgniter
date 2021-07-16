<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/css/home/login.css">
    <title>Login</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
    <section id="areaLogin">
        <div id="titulo">
            <h3>Área do recrutador</h3>
        </div>
        <form action="<?php echo base_url(); ?>/autenticar"  method="POST">
        <div class="itens-form">
            <div id="campoEmail" class="titulo-form">
                <label class="text-label" for="">Email</label>
            </div>
            <div class="input-form">
                <input class="entrada-valor" name="email" type="email">
            </div>
        </div>
        <div class="itens-form">
            <div class="titulo-form">
                <label class="text-label" for="">Senha</label>
            </div>
            <div class="input-form">
                <input class="entrada-valor" name="senha" type="password">
            </div>
        </div>
        <div id="forms-buttons-area" class="itens-form">
            <div class="buttons-form">
                <input type="submit" class="btn btn-info"  value="Login">
            </div>
            <div class="buttons-form">
                <a href="<?php echo base_url(); ?>/">Voltar</a>
            </div>
        </div>
        </form>
    </section>
</body>
</html>