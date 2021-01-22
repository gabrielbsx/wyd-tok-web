<?= $this->extend('admincp/layouts') ?>
<?= $this->section('page') ?>
<div class="panel-body">
    <div class="form-wrapper" style="height: auto;margin-bottom:40px;background-color: #231D24;">
        <div class="col-sm-0 col-md-2"></div>
        <div class=" col-sm-12 col-md-8">
            <div style="text-align: center; padding:20px;">
                <a href="<?= base_url('admin/createnews') ?>" class="btn-default" >
                    <span class="text"> Adicionar nova notícia </span>
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
                            Notícias
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <?php if ($paginate_news) : ?>
                        <?php foreach ($paginate_news as $key => $value) : ?>
                            <tr>
                                <td style="width:50vw" colspan="1">
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
                                                <a href="<?= base_url('admin/editnews/' . $value['id']) ?>" class="btn-default">
                                                    Editar notícia
                                                </a>
                                            </div>
                                        </div>
                                    </span>
                                </td>
                                <td colspan="1">
                                    <span>
                                        <div id="emailTypeBlock">
                                            <div class="input-container">
                                                <a href="<?= base_url('auth/delnews/' . $value['id']) ?>" class="btn-default">
                                                    Deletar notícia
                                                </a>
                                            </div>
                                        </div>
                                    </span>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                        <tr>
                            <td colspan="3">
                                <?php if ($pager_news) : ?>
                                    <?= $pager_news->links('news', 'pagination') ?>
                                <?php endif; ?>
                            </td>
                        </tr>
                    <?php else : ?>
                        <tr>
                            <td style="text-align: center;" colspan="3">
                                Não há notícias!
                            </td>
                        </tr>
                    <?php endif; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<?= $this->endSection() ?>