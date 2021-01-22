<?= $this->extend('dashboard/layouts') ?>
<?= $this->section('page') ?>
<div class="page-content form-content">
    <div class="form-wrapper" style="background-image: url('<?= base_url('views/template/images/new/form-bg.png') ?>');">
        <form method="POST" enctype="multipart/form-data" action="<?= base_url('auth/guildmark') ?>" id="registerForm">
            <div class="panel panel-body register-form">
                <h2 class="form-title">Guildmark</h2>
                <div class="clearfix"></div>
                <div class="form-group text-center">
                    <span>
                        <div id="emailTypeBlock">
                            <div class="input-container">
                                <label class="floating-label">Guild Index</label>
                                <input style="background-color: rgba(0, 0, 0, 0.4); border: none;" type="text" class="form-control empty" name="guildid" />
                            </div>
                        </div>
                    </span>
                </div>
                <div class="form-group text-center">
                    <span>
                        <div id="emailTypeBlock">
                            <div class="input-container">
                                <label class="floating-label">Guildmark</label>
                                <input style="background-color: rgba(0, 0, 0, 0.4); border: none;" class="form-file-control empty" type="file" accept="image/bmp" name="guildmark" required />
                            </div>
                        </div>
                    </span>
                </div>
                <div class="form-group text-center">
                    <?php if (isset($recaptcha)) : ?>
                        <div class="g-recaptcha" style="display: inline-block" data-sitekey="<?= $recaptcha ?>"></div>
                    <?php endif; ?>
                </div>
                <button type="submit" class="btn-default">
                    Enviar
                </button>
            </div>
        </form>
    </div>
</div>
<?= $this->endSection() ?>