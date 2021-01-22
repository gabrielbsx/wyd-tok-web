<?= $this->extend('admincp/layouts') ?>
<?= $this->section('page') ?>
<div class="panel-body">
    <div class="table-wrapper">
        <div class="table-scroll-container scrollbar-inner">
            <table class="table table-hover dataTable table-striped width-full" id="gaTable">
                <thead>
                    <tr>
                        <th style="text-align:center;" colspan="3">
                            Criar guia
                        </th>
                    </tr>
                    <form method="POST" action="<?= base_url('auth/createguide') ?>" id="loginForm">
                        <tr>
                            <th colspan="3">
                                <span>
                                    <div id="emailTypeBlock">
                                        <div class="input-container">
                                            <label class="floating-label">Nome da guia</label>
                                            <input style="background-color: rgba(0, 0, 0, 0.4); border: none;" type="text" class="form-control empty" name="name" />
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
                                        <span class="text"> Criar guia </span>
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