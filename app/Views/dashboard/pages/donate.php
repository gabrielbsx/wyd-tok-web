<?= $this->extend('dashboard/layouts') ?>
<?= $this->section('page') ?>
<main class="content">
    <div class="news-p">
        <div class="block-title">
            <div class="title">
                <span>S</span>uporte
            </div>
        </div>
        <div class="last-more-fon">
            <div id="content" style="padding:20px;">
                Escrever os termos aqui
                <div style="margin:0 auto;margin-top:20px;text-align:center;">
                    <a class="btn-default" href="<?= base_url('dashboard/donation') ?>">Concordo com os termos</a>
                </div>
            </div>
        </div>
    </div>
</main>
    <?= $this->endSection() ?>