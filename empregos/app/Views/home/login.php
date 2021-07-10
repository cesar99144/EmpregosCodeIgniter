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
        <form action="">
        <div class="itens-form">
            <div id="campoEmail" class="titulo-form">
                <label class="text-label" for="">Email</label>
            </div>
            <div class="input-form">
                <input class="entrada-valor" type="email">
            </div>
        </div>
        <div class="itens-form">
            <div class="titulo-form">
                <label class="text-label" for="">Senha</label>
            </div>
            <div class="input-form">
                <input class="entrada-valor" type="password">
            </div>
        </div>
        <div id="forms-buttons-area" class="itens-form">
            <div class="buttons-form">
                <a href="" class="btn btn-info">Login</a>
            </div>
            <div class="buttons-form">
                <a href="<?php echo base_url(); ?>home">Voltar</a>
            </div>
        </div>
    </section>
</body>
</html>