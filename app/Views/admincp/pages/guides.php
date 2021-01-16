<?= $this->extend('admincp/layouts') ?>
<?= $this->section('page') ?>
<main class="content">
    <div class="news-p">
        <div class="block-title">
            <div class="title">
                <span>S</span>istema de Guias
            </div>
        </div>
        <div class="last-more-fon">
            <div id="content">
                <div style="margin:10px 0;text-align:center;">
                    <a href="<?= base_url('admin/createguide') ?>" style="background-color:rgb(55,55,55);padding:10px 20px;display:block;text-align:center;margin:0 auto;">Adicionar novo guia</a>
                </div>
                <?php if ($paginate_guides) : ?>
                    <?php foreach ($paginate_guides as $key => $value) : ?>
                        <div style="display:inline-block;width:100%;background-color:rgb(55,55,55);margin-top: 10px;">
                            <div style="padding:10px;display:flex;">
                                <span style="padding:10px;color:white;">
                                    <?= $value['name'] ?>
                                </span>
                                <div style="display:flex;margin-left:auto;">
                                    <a href="<?= base_url('admin/addarticleguide/' . $value['id']) ?>" style="background-color:rgb(25,25,75);padding:10px 20px;">
                                        Adicionar Artigo
                                    </a>
                                    <a href="<?= base_url('admin/editguide/' . $value['id']) ?>" style="background-color:rgb(25,75,25);padding:10px 20px;">
                                        Editar
                                    </a>
                                    <a href="<?= base_url('auth/delguide/' . $value['id']) ?>" style="background-color:rgb(75,25,25);padding:10px 20px;">
                                        Deletar
                                    </a>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                    <?php if ($pager_guides) : ?>
                        <?= $pager_guides->links('guides', 'pagination') ?>
                    <?php endif; ?>
                <?php else : ?>
                    Não há guia!
                <?php endif; ?>
            </div>
        </div>
    </div>
</main>
<?= $this->endSection() ?>