<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="<?php echo base_url();?>/assets/css/painel/vagas.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
    <header>
        <div id="itens">
            <div class="topoItens">
                <h3 id="tituloLogo">JobsVagas</h3>
            </div>
            <div class="topoItens">
                <nav id="menu">
                    <ul>
                    <li><a class="links" href="">Home</a></li>
                    <li><a class="links" href="">Vagas</a></li>
                    <li><a class="links" href="">Sobre</a></li>
                    </ul>
                </nav>
            </div>
            <div class="topoItens">
                <a href="<?php echo base_url();?>/home/login" class="btn btn-light btn-sm">Login</a>
                <a href="<?php echo base_url();?>/home/cadastro" class="btn btn-danger btn-sm">Cadastro</a>
            </div>
        </div>
        <div id="text-div">
            <h3 id="text-apresentacao">Olá, aqui você encontra a vaga ideal</h3>
        </div>
        <div id="buttons-top">
            <a href="" class="btn btn-dark">Sou candidato</a>
            <a href="" class="btn btn-success">Sou recrutador</a>
        </div>
        
    </header>
    <section id="painel">
        <div id="categorias">
        <ul class="list-group">
            <li class="list-group-item d-flex justify-content-between align-items-center">
                Cras justo odio
                <span class="badge badge-primary badge-pill">14</span>
            </li>
            <li class="list-group-item d-flex justify-content-between align-items-center">
                Dapibus ac facilisis in
                <span class="badge badge-primary badge-pill">2</span>
            </li>
            <li class="list-group-item d-flex justify-content-between align-items-center">
                Morbi leo risus
                <span class="badge badge-primary badge-pill">1</span>
            </li>
        </ul>
        </div>
        <div id="vagas">
           <table class="table">
            <thead>
                <tr>
                <th scope="col">#</th>
                <th scope="col">Título</th>
                <th scope="col">Descrição</th>
                <th scope="col">Salário</th>
                <th scope="col">Opções</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                <th scope="row">1</th>
                <td>Programador php</td>
                <td>Desenvolver backend de sites</td>
                <td>A combinar</td>
                <td><a href="" class="btn btn-primary btn-sm">Vizualizar</a> <a href="" class="btn btn-success btn-sm">Candidatar</a></td>
                </tr>
                
            </tbody>
          </table>
        </div>
    </section>
</body>
</html>