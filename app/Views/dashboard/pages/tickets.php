<?= $this->extend('dashboard/layouts') ?>
<?= $this->section('page') ?>
<div class="panel-body">
    <div class="form-wrapper" style="height: auto;margin-bottom:40px;background-color: #231D24;">
        <div class="col-sm-0 col-md-2"></div>
        <div class=" col-sm-12 col-md-8">
            <div style="text-align: center;padding:20px;">
                <a href="<?= base_url('dashboard/createticket') ?>" class="btn-default" id="tagLogin">
                    <span class="text"> Criar Ticket </span>
                </a>
            </div>
        </div>
        <div class="clearfix"></div>
    </div>
    <div class="table-wrapper">
        <div class="table-scroll-container scrollbar-inner">
            <table class="table table-hover dataTable table-striped width-full" id="gaTable">
                <thead>
                    <tr>
                        <th style="text-align:center;" colspan="3">
                            Suporte
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <?php if ($paginate_tickets) : ?>
                        <?php foreach ($paginate_tickets as $key => $value) : ?>
                            <tr>
                                <td style="width:70vw" colspan="1">
                                    <span>
                                        <div id="emailTypeBlock">
                                            <div class="input-container">
                                                <?= $value['title'] ?>
                                            </div>
                                        </div>
                                    </span>
                                </td>
                                <td colspan="1">
                                    <span>
                                        <div id="emailTypeBlock">
                                            <div class="input-container">
                                                <a href="<?= base_url('dashboard/answerticket/' . $value['id']) ?>" class="btn-default">
                                                    Abrir
                                                </a>
                                            </div>
                                        </div>
                                    </span>
                                </td>
                                <td colspan="1">
                                    <span>
                                        <?php if ($value['status'] == 0) : ?>
                                            <div style="background-color:rgb(75,75,25);padding:10px 20px;">
                                                Pendente
                                            </div>
                                        <?php else : ?>
                                            <div style="background-color:rgb(75,25,25);padding:10px 20px;">
                                                Encerrado
                                            </div>
                                        <?php endif; ?>
                                    </span>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                        <tr>
                            <td colspan="3">
                                <?php if ($pager_tickets) : ?>
                                    <?= $pager_tickets->links('package', 'pagination') ?>
                                <?php endif; ?>
                            </td>
                        </tr>
                    <?php else : ?>
                        <tr>
                            <td style="text-align: center;" colspan="3">
                                Não há ticket!
                            </td>
                        </tr>
                    <?php endif; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<?= $this->endSection() ?>