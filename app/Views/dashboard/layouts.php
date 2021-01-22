<!DOCTYPE html>
<html lang="pt">
<?= view('dashboard/template/head') ?>

<body>
    <?= view('dashboard/template/navbar') ?>
    <?= view('dashboard/template/header') ?>
    <div class="page animsition" style="background-image: url('<?= base_url('views/template/images/new/page_overlay.png') ?>');">
        <?= view('dashboard/template/message') ?>
        <?= $this->renderSection('page') ?>
    </div>
    <?= view('dashboard/template/scripts') ?>
</body>

</html>