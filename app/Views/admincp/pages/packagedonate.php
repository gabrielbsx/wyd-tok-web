<?= $this->extend('admincp/layouts') ?>
<?= $this->section('page') ?>
<div class="panel-body">
    <div class="table-wrapper">
        <div class="table-scroll-container scrollbar-inner">
            <table class="table table-hover dataTable table-striped width-full" id="gaTable">
                <thead>
                    <tr>
                        <th style="text-align:center;" colspan="3">
                            Pacote de doação
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <form method="POST" id="loginForm" action="<?= base_url('auth/createnews') ?>">
                        <tr>
                            <td style="text-align:center;" colspan="3">
                                <span>
                                    <div id="emailTypeBlock">
                                        <div class="input-container">
                                            <label class="floating-label">Nome</label>
                                            <input style="background-color: rgba(0, 0, 0, 0.4); border: none;" type="text" class="form-control empty" name="name" />
                                        </div>
                                    </div>
                                </span>
                            </td>
                        </tr>
                        <tr>
                            <td style="text-align:center;" colspan="3">
                                <span>
                                    <div id="emailTypeBlock">
                                        <div class="input-container">
                                            <label class="floating-label">Valor/Preço</label>
                                            <input style="background-color: rgba(0, 0, 0, 0.4); border: none;" type="text" class="form-control empty" name="value" />
                                        </div>
                                    </div>
                                </span>
                            </td>
                        </tr>
                        <tr>
                            <td style="text-align:center;" colspan="3">
                                <span>
                                    <div id="emailTypeBlock">
                                        <div class="input-container">
                                            <label class="floating-label">Valor de doação</label>
                                            <input style="background-color: rgba(0, 0, 0, 0.4); border: none;" type="text" class="form-control empty" name="donate" />
                                        </div>
                                    </div>
                                </span>
                            </td>
                        </tr>
                        <tr>
                            <td style="text-align:center;" colspan="3">
                                <span>
                                    <div id="emailTypeBlock">
                                        <div class="input-container">
                                            <label class="floating-label">Bônus (%)</label>
                                            <input style="background-color: rgba(0, 0, 0, 0.4); border: none;" type="text" class="form-control empty" name="bonus" />
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
                            </td>
                        </tr>
                        <tr>
                            <td colspan="3">
                                <div class="form-wrapper" style="border: none;">
                                    <button type="submit" class="form-btn" id="tagLogin">
                                        <span class="text"> Criar </span>
                                        <span class="img">
                                            <img src="<?= base_url('views/template/images/new/sbutton_bg_hover.png') ?>" alt="" />
                                            <img src="<?= base_url('views/template/images/new/sbutton_bg.png') ?>" alt="" />
                                        </span>
                                    </button>
                                </div>
                            </td>
                        </tr>
                    </form>
                </tbody>
            </table>
        </div>
    </div>
</div>
<?= $this->endSection() ?>