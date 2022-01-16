<?= $this->extend('moduloRecrutador/dashboard'); ?>
<?= $this->section('content'); ?>

    <link rel="stylesheet" href="<?= base_url('assets/css/dashboard/vagasListagem.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/dashboard/sessao.css') ?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.3/css/dataTables.bootstrap4.min.css">


    <div class="container d-flex justify-content-between topoConteudo">
        <div>
            <h2 class="tituloTexto">Vagas</h2>
        </div>
        <div>
            <a href="#" class="btn btn-primary btn-sm">Adicionar vaga</a>
        </div>
    </div>

    <div class="container">
        <table id="tabelaVagas" class="content-table text-center">
            <thead>
                <tr>
                    <th>Código</th>
                    <th>Título</th>
                    <th>Contratação</th>
                    <th>Horarios</th>
                    <th>Categoria</th>
                    <th>Opções</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($listVagas as $vaga): ?>
                <tr>
                    <td><?php echo $vaga->idVaga; ?></td>
                    <td><?php echo $vaga->titulo; ?></td>
                    <td><?php echo $vaga->RegimeContratacao; ?></td>
                    <td><?php echo $vaga->cargaHoraria; ?></td>
                    <td><?php echo $vaga->tituloCategoria; ?></td>
                    <td>
                        <a href="" class="btn btn-primary btn-sm"><i class="fas fa-eye"></i></a>
                        <a href="" class="btn btn-primary btn-sm"><i class="fas fa-edit"></i></a>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
    </table>

    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.3/js/dataTables.bootstrap4.min.js"></script>
    
    <script>
        $(document).ready(function() {
            $('#tabelaVagas').DataTable({
                "searching": true,
                "language": {
                    "lengthMenu": "Exibindo _MENU_ registros por página",
                    "zeroRecords": "Nenhum dado cadastrado",
                    "info": "Exibindo página _PAGE_ de _PAGES_",
                    "infoEmpty": "Nenhum dado cadastrado",
                    "infoFiltered": "(filtered from _MAX_ total records)"
                }
            });
        });
    </script>
<?= $this->endSection(); ?>