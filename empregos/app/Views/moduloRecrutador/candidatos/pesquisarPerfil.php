<?= $this->extend('moduloRecrutador/dashboard'); ?>
<?= $this->section('content'); ?>
    
    <link rel="stylesheet" href="<?= base_url('assets/css/dashboard/vagasListagem.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/dashboard/sessao.css') ?>">

    <div class="container d-flex justify-content-between topoConteudo">
        <div>
            <h2 class="tituloTexto">Buscar candidatos</h2>
        </div>
        
    </div>

    <div class="container">
        <form>
            <div class="form-row">
               
                <div class="form-group col-md-3">
                    <label for="descricaoVaga">Categorias</label>
                    <select id="inputState" class="form-control">
                        <?php foreach($listagemCategorias as $categoria): ?>
                            <option value="<?php echo $categoria->idCategoria; ?>"><?php echo $categoria->tituloCategoria; ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
                <div class="form-group col-md-2">
                    <label for="descricaoVaga">Formação na área</label>
                    <select id="inputState" class="form-control">
                        <option>Sim</option>
                        <option>Não</option>
                        <option>Todos</option>
                    </select>
                </div>
                <div class="form-group col-md-2">
                    <label for="descricaoVaga">Experiência</label>
                    <select id="inputState" class="form-control">
                        <option>Sim</option>
                        <option>Não</option>
                        <option>Todos</option>
                    </select>
                </div>
                <div class="form-group col-md-2">
                    <label for="descricaoVaga">Estado</label>
                    <select id="inputState" class="form-control">
                        <option>Todos</option>
                        <option>PE</option>
                        <option>SP</option>
                        <option>RJ</option>
                    </select>
                </div>
                <div class="form-group col-md-2">
                    <label for="descricaoVaga">Cidade</label>
                    <select id="inputState" class="form-control">
                        <option>Todos</option>
                        <option>Sim</option>
                        <option>Não</option>
                        <option>Todos</option>
                    </select>
                </div>
                <button type="submit" class="btn btn-success"><i class="fas fa-search"></i> Pesquisar</button>
            </div>
            
            
        </form>

    </div>
<?= $this->endSection(); ?>