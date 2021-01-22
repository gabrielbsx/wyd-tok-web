<?= $this->extend('admincp/layouts') ?>
<?= $this->section('page') ?>
<div class="panel-body">
    <div class="table-wrapper">
        <div class="table-scroll-container scrollbar-inner">
            <table class="table table-hover dataTable table-striped width-full" id="gaTable">
                <thead>
                    <tr>
                        <th style="text-align:center;" colspan="3">
                            Editar de itens
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <?php if (isset($bonus)) : ?>
                        <form method="POST" id="loginForm" action="<?= base_url('auth/edititem') ?>">
                            <tr>
                                <td style="text-align:center;" colspan="3">
                                    <span>
                                        <div id="emailTypeBlock">
                                            <div class="input-container">
                                                <input style="background-color: rgba(0, 0, 0, 0.4); border: none;" type="text" class="form-control empty" name="itemname" value="<?= $bonus['itemname'] ?>" />
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
                                                <input style="background-color: rgba(0, 0, 0, 0.4); border: none;" type="text" class="form-control empty" name="itemid" value="<?= $bonus['itemid'] ?>" />
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
                                                <input style="background-color: rgba(0, 0, 0, 0.4); border: none;" type="text" class="form-control empty" name="effect1" value="<?= $bonus['effect1'] ?>" />
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
                                                <input style="background-color: rgba(0, 0, 0, 0.4); border: none;" type="text" class="form-control empty" name="effect_value1" value="<?= $bonus['effect_value1'] ?>" />
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
                                                <input style="background-color: rgba(0, 0, 0, 0.4); border: none;" type="text" class="form-control empty" name="effect2" value="<?= $bonus['effect2'] ?>" />
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
                                                <input style="background-color: rgba(0, 0, 0, 0.4); border: none;" type="text" class="form-control empty" name="effect_value2" value="<?= $bonus['effect_value2'] ?>" />
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
                                                <input style="background-color: rgba(0, 0, 0, 0.4); border: none;" type="text" class="form-control empty" name="effect3" value="<?= $bonus['effect3'] ?>" />
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
                                                <input style="background-color: rgba(0, 0, 0, 0.4); border: none;" type="text" class="form-control empty" name="effect_value3" value="<?= $bonus['effect_value3'] ?>" />
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
                                            <span class="text"> Editar Item </span>
                                        </button>
                                    </div>
                                    <input type="hidden" name="id" value="<?= $bonus['id'] ?>">
                                </td>
                            </tr>
                        </form>
                    <?php else : ?>
                        <tr>
                            <td style="text-align: center;" colspan="3">
                                <span>
                                    Item inexistente
                                </span>
                            </td>
                        </tr>
                    <?php endif; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<?= $this->endSection() ?>