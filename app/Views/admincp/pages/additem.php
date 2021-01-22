<?= $this->extend('admincp/layouts') ?>
<?= $this->section('page') ?>
<div class="panel-body">
    <div class="table-wrapper">
        <div class="table-scroll-container scrollbar-inner">
            <table class="table table-hover dataTable table-striped width-full" id="gaTable">
                <thead>
                    <tr>
                        <th style="text-align:center;" colspan="3">
                            Adicionar de item
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <form method="POST" id="loginForm" action="<?= base_url('auth/additem') ?>">
                        <tr>
                            <td style="text-align:center;" colspan="3">
                                <span>
                                    <div id="emailTypeBlock">
                                        <div class="input-container">
                                            <label class="floating-label">Nome do Item</label>
                                            <input style="background-color: rgba(0, 0, 0, 0.4); border: none;" type="text" class="form-control empty" name="itemname" />
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
                                            <label class="floating-label">Item ID</label>
                                            <input style="background-color: rgba(0, 0, 0, 0.4); border: none;" type="text" class="form-control empty" name="itemid" />
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
                                            <label class="floating-label">Efeito 1 do item</label>
                                            <input style="background-color: rgba(0, 0, 0, 0.4); border: none;" type="text" class="form-control empty" name="effect1" />
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
                                            <label class="floating-label">Valor de Efeito 1 do item</label>
                                            <input style="background-color: rgba(0, 0, 0, 0.4); border: none;" type="text" class="form-control empty" name="effect_value1" />
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
                                            <label class="floating-label">Efeito 2 do item</label>
                                            <input style="background-color: rgba(0, 0, 0, 0.4); border: none;" type="text" class="form-control empty" name="effect2" />
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
                                            <label class="floating-label">Valor de Efeito 2 do item</label>
                                            <input style="background-color: rgba(0, 0, 0, 0.4); border: none;" type="text" class="form-control empty" name="effect_value2" />
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
                                            <label class="floating-label">Efeito 3 do item</label>
                                            <input style="background-color: rgba(0, 0, 0, 0.4); border: none;" type="text" class="form-control empty" name="effect3" />
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
                                            <label class="floating-label">Valor de Efeito 3 do item</label>
                                            <input style="background-color: rgba(0, 0, 0, 0.4); border: none;" type="text" class="form-control empty" name="effect_value3" />
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
                                <div class="form-wrapper" style="border: none;text-align:center;">
                                    <button type="submit" class="btn-default" id="tagLogin">
                                        <span class="text"> Adicionar Item </span>
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