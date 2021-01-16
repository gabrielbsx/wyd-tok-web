<!DOCTYPE html>
<html lang="pt">
<?= view('template/head') ?>

<body>
    <div id="wrapper">
        <div class="header">
            <?= view('template/navbar') ?>
            <?= view('template/header') ?>
        </div>
        <?= $this->renderSection('page') ?>
    </div>
</body>

</html>