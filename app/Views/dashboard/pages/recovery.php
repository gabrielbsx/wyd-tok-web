<?= $this->extend('dashboard/layouts') ?>
<?= $this->section('page') ?>
<div class="page-content form-content">
    <div class="form-wrapper" style="background-image: url('<?= base_url('views/template/images/new/form-bg.png') ?>');">
        <form method="post" action="<?= base_url('auth/register') ?>" id="registerForm">
            <div class="panel panel-body register-form">
                <div class="brand text-center">
                    <img class="brand-img" src="<?= base_url('logo.png') ?>" alt="..." />
                </div>
                <h2 class="form-title">Recuperar conta</h2>
                <div class="clearfix"></div>

                <div id="emailTypeBlock">
                    <div class="input-container">
                        <label class="floating-label">Email</label>
                        <input type="email" class="form-control empty" name="email" />
                    </div>
                </div>
                <div class="form-group text-center">
                    <?php if (isset($recaptcha)) : ?>
                        <div class="g-recaptcha" style="display: inline-block" data-sitekey="<?= $recaptcha ?>"></div>
                    <?php endif; ?>
                </div>
                <div style="text-align:center;">
                    <button type="submit" class="btn-default" id="tagRegister">
                        <span class="text"> Recuperar </span>
                    </button>
                </div>
            </div>
        </form>
    </div>
</div>
<?= $this->endSection() ?>