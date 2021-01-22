<?= $this->extend('admincp/layouts') ?>
<?= $this->section('page') ?>
<div class="panel-body">
    <div class="form-wrapper" style="height: auto;margin-bottom:40px;background-color: #231D24;">
        <div class="col-sm-0 col-md-2"></div>
        <div class=" col-sm-12 col-md-8">
            <div style="text-align: center;padding:20px;">
                <a href="<?= base_url('admin/createguide') ?>" class="btn-default" id="tagLogin">
                    <span class="text"> Criar nova guia </span>
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
                        <th style="text-align:center;" colspan="4">
                            Guia do jogo
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <?php if ($paginate_guides) : ?>
                        <?php foreach ($paginate_guides as $key => $value) : ?>
                            <tr>
                                <td style="width:40vw" colspan="1">
                                    <span>
                                        <div id="emailTypeBlock">
                                            <div class="input-container">
                                                <?= $value['name'] ?>
                                            </div>
                                        </div>
                                    </span>
                                </td>
                                <td style="text-align:center;" colspan="1">
                                    <span>
                                        <div id="emailTypeBlock">
                                            <div class="input-container">
                                                <a href="<?= base_url('admin/addarticleguide/' . $value['id']) ?>" class="btn-default">
                                                    Adicionar artigo
                                                </a>
                                            </div>
                                        </div>
                                    </span>
                                </td>
                                <td colspan="1">
                                    <span>
                                        <div id="emailTypeBlock">
                                            <div class="input-container">
                                                <a href="<?= base_url('admin/editguide/' . $value['id']) ?>" class="btn-default">
                                                    Editar guia
                                                </a>
                                            </div>
                                        </div>
                                    </span>
                                </td>
                                <td colspan="1">
                                    <span>
                                        <div id="emailTypeBlock">
                                            <div class="input-container">
                                                <a href="<?= base_url('auth/delguide/' . $value['id']) ?>" class="btn-default">
                                                    Deletar guia
                                                </a>
                                            </div>
                                        </div>
                                    </span>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                        <tr>
                            <td colspan="3">
                                <?php if ($pager_guides) : ?>
                                    <?= $pager_guides->links('package', 'pagination') ?>
                                <?php endif; ?>
                            </td>
                        </tr>
                    <?php else : ?>
                        <tr>
                            <td style="text-align: center;" colspan="3">
                                Não há guia!
                            </td>
                        </tr>
                    <?php endif; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<?= $this->endSection() ?>