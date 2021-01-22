<?= $this->extend('admincp/layouts') ?>
<?= $this->section('page') ?>
<div class="panel-body">
    <div class="table-wrapper">
        <div class="table-scroll-container scrollbar-inner">
            <table class="table table-hover dataTable table-striped width-full" id="gaTable">
                <thead>
                    <tr>
                        <th style="text-align:center;" colspan="3">
                            Editor de artigos
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <?php if (isset($guide)) : ?>
                        <form method="POST" id="loginForm" action="<?= base_url('auth/editguide') ?>">
                            <tr>
                                <td style="text-align:center;" colspan="3">
                                    <span>
                                        <div id="emailTypeBlock">
                                            <div class="input-container">
                                                <input style="background-color: rgba(0, 0, 0, 0.4); border: none;" type="text" class="form-control empty" name="name" value="<?= $guide['name'] ?>" />
                                            </div>
                                        </div>
                                    </span>
                                </td>
                            </tr>
                            <tr>
                                <td colspan="3">
                                    <?php if (isset($recaptcha)) : ?>
                                        <div class="g-recaptcha" style="display: inline-block" data-sitekey="<?= $recaptcha ?>"></div>
                                    <?php endif; ?>
                                    <input type="hidden" name="id" value="<?= $guide['id'] ?>">
                                </td>
                            </tr>
                            <tr>
                                <td colspan="3">
                                    <div class="form-wrapper" style="border: none;text-align:center;">
                                        <button type="submit" class="btn-default" id="tagLogin">
                                            <span class="text"> Editar guia </span>
                                        </button>
                                    </div>
                                </td>
                            </tr>
                        </form>
                    <?php else : ?>
                        <tr>
                            <td style="text-align:center;" colspan="3">
                                <span>
                                    <div id="emailTypeBlock">
                                        <div class="input-container">
                                            Guia inexistente
                                        </div>
                                    </div>
                                </span>
                            </td>
                        </tr>
                    <?php endif; ?>
                </tbody>
            </table>
        </div>
    </div>
    <?php if ($paginate_articles) : ?>
        <div class="table-wrapper" style="margin:40px 0px;">
            <div class="table-scroll-container scrollbar-inner">
                <table class="table table-hover dataTable table-striped width-full" id="gaTable">
                    <thead>
                        <tr>
                            <th colspan="3">
                                Artigos do guia
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($paginate_articles as $key => $value) : ?>
                            <tr>
                                <td style="width:50vw;" style="text-align:center;" colspan="1">
                                    <?= $value['title'] ?>
                                </td>
                                <td colspan="1">
                                    <a href="<?= base_url('admin/editarticleguide/' . $value['id']) ?>" class="btn-default">
                                        Alterar Artigo
                                    </a>

                                </td>
                                <td colspan="1">
                                    <a href="<?= base_url('auth/delarticleguide/' . $value['id']) ?>" class="btn-default">
                                        Deletar Artigo
                                    </a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                        <tr>
                            <td colspan="3">
                                <?php if (isset($pager_articles)) : ?>
                                    <?= $pager_articles->links('answers', 'pagination') ?>
                                <?php endif; ?>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    <?php endif; ?>
</div>
<?= $this->endSection() ?>