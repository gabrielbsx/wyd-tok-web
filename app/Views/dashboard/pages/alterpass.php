<?= $this->extend('dashboard/layouts') ?>
<?= $this->section('page') ?>
<div class="panel-body">
    <div class="table-wrapper">
        <div class="table-scroll-container scrollbar-inner">
            <table class="table table-hover dataTable table-striped width-full" id="gaTable">
                <thead>
                    <tr>
                        <th style="text-align:center;" colspan="3">
                            Alteração de senha
                        </th>
                    </tr>
                    <form method="POST" action="<?= base_url('auth/alterpass') ?>" id="loginForm">
                        <tr>
                            <th colspan="1">
                                <span>
                                    <div id="emailTypeBlock">
                                        <div class="input-container">
                                            <label class="floating-label">Senha antiga</label>
                                            <input style="background-color: rgba(0, 0, 0, 0.4); border: none;" type="password" class="form-control empty" name="oldpassword" />
                                        </div>
                                    </div>
                                </span>
                            </th>
                            <th colspan="1">
                                <span>
                                    <div id="emailTypeBlock">
                                        <div class="input-container">
                                            <label class="floating-label">Senha nova</label>
                                            <input style="background-color: rgba(0, 0, 0, 0.4); border: none;" type="password" class="form-control empty" name="password" />
                                        </div>
                                    </div>
                                </span>
                            </th>
                            <th colspan="1">
                                <span>
                                    <div id="emailTypeBlock">
                                        <div class="input-container">
                                            <label class="floating-label">Confirmar senha nova</label>
                                            <input style="background-color: rgba(0, 0, 0, 0.4); border: none;" type="password" class="form-control empty" name="password_confirm" />
                                        </div>
                                    </div>
                                </span>
                            </th>
                        </tr>
                        <tr>
                            <th colspan="3">
                                <?php if (isset($recaptcha)) : ?>
                                    <div class="g-recaptcha" style="display: inline-block" data-sitekey="<?= $recaptcha ?>"></div>
                                <?php endif; ?>
                            </th>
                        </tr>
                        <tr>
                            <th colspan="3">
                                <div class="form-wrapper" style="border: none;text-align:center;">
                                    <button type="submit" class="btn-default" id="tagLogin">
                                        <span class="text"> Alterar senha </span>
                                    </button>
                                </div>
                            </th>
                        </tr>
                    </form>
                </thead>
            </table>
        </div>
    </div>
</div>
<?= $this->endSection() ?>