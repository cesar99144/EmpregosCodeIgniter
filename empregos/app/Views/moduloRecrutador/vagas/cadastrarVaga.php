<?= $this->extend('moduloRecrutador/dashboard'); ?>
<?= $this->section('content'); ?>
    
    <link rel="stylesheet" href="<?= base_url('assets/css/dashboard/vagasListagem.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/dashboard/sessao.css') ?>">

    <div class="container d-flex justify-content-between topoConteudo">
        <div>
            <h2 class="tituloTexto">Cadastrar vaga</h2>
        </div>
        
    </div>

    <div class="container">
        <form>
            <div class="form-row">
                <div class="form-group col-md-4">
                    <label for="tituloVaga">Título vaga</label>
                    <input type="email" class="form-control" name="tituloVaga" id="tituloVaga">
                </div>
                <div class="form-group col-md-5">
                    <label for="descricaoVaga">Descrição vaga</label>
                    <textarea class="form-control" name="descricaoVaga" id="descricaoVaga" cols="30" rows="2"></textarea>
                </div>
                <div class="form-group col-md-3">
                    <label for="descricaoVaga">Regime contratação</label>
                    <select id="inputState" class="form-control">
                        <option>CLT</option>
                        <option>Contrato</option>
                        <option>PJ</option>
                    </select>
                </div>
                <div class="form-group col-md-4">
                    <label for="tituloVaga">Carga horária</label>
                    <input type="time" class="form-control" name="tituloVaga" id="tituloVaga">          
                </div>
                <div class="form-group col-md-2">
                    <label for="descricaoVaga">Tipo de presença</label>
                    <select id="inputState" class="form-control">
                        <option>Presencial</option>
                        <option>Híbrido</option>
                        <option>Remoto</option>
                    </select>
                </div>
                <div class="form-group col-md-3">
                    <label for="descricaoVaga">Faixa salárial</label>
                    <select id="inputState" class="form-control">
                        <option value="Não informado">Não informar</option>
                        <option>R$ 1.100 até R$ 2.200</option>
                        <option>R$ 2.300 até R$ 3.000</option>
                        <option>R$ 3.100 até R$ 4.200</option>
                        <option>R$ 4.300 até R$ 6.200</option>
                    </select>
                </div>
                <div class="form-group col-md-3">
                    <label for="descricaoVaga">Categorias</label>
                    <select id="inputState" class="form-control">
                        <?php foreach($listagemCategorias as $categoria): ?>
                            <option value="<?php echo $categoria->idCategoria; ?>"><?php echo $categoria->tituloCategoria; ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
                <div class="form-group col-md-3">
                    <label for="descricaoVaga">Status vaga</label>
                    <select id="inputState" class="form-control">
                        <option>Aberta</option>
                        <option>Fechada</option>
                    </select>
                </div>
                
            </div>
            
            <button type="submit" class="btn btn-primary">Cadastrar</button>
        </form>

    </div>
<?= $this->endSection(); ?>