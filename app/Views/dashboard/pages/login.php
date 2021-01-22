<?= $this->extend('dashboard/layouts') ?>
<?= $this->section('page') ?>
<div class="page-content form-content">
    <div class="form-wrapper" style="background-image: url('<?= base_url('views/template/images/new/form-bg.png') ?>');">
        <form method="post" action="<?= base_url('auth/login') ?>" id="loginForm">
            <div class="panel panel-body login-form">
                <div class="brand text-center">
                    <img class="brand-img" src="<?= base_url('logo.png') ?>" alt="..." />
                </div>
                <h2 class="form-title">Login</h2>
                <div class="clearfix"></div>
                <div id="emailTypeBlock">
                    <div class="input-container">
                        <label class="floating-label">Usuário</label>
                        <input type="text" class="form-control empty" name="username" maxlength="50" />
                    </div>
                </div>
                <div class="input-container">
                    <label class="floating-label">Senha</label>
                    <div class="pass-input">
                        <input type="password" class="form-control empty" name="password" maxlength="25" />
                        <a class="show-btn" href="#"><i class="fa fa-eye"></i></a>
                    </div>
                </div>
                <div class="form-group text-center">
                    <?php if (isset($recaptcha)) : ?>
                        <div class="g-recaptcha" style="display: inline-block" data-sitekey="<?= $recaptcha ?>"></div>
                    <?php endif; ?>
                </div>
                <div style="text-align:center;">
                    <button type="submit" class="btn-default" id="tagLogin">
                        <span class="text"> Entrar </span>
                    </button>
                </div>
            </div>
        </form>
    </div>
</div>
<?= $this->endSection() ?>