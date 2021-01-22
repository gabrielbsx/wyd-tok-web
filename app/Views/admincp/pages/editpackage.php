<?= $this->extend('admincp/layouts') ?>
<?= $this->section('page') ?>
<?php if (isset($package)) : ?>
    <div class="panel-body">
        <div class="table-wrapper">
            <div class="table-scroll-container scrollbar-inner">
                <table class="table table-hover dataTable table-striped width-full" id="gaTable">
                    <form method="POST" id="loginForm" action="<?= base_url('auth/editpackage') ?>">
                        <thead>
                            <tr>
                                <th style="text-align:center;" colspan="3">
                                    Editar de Pacotes
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td style="text-align:center;" colspan="3">
                                    <span>
                                        <div id="emailTypeBlock">
                                            <div class="input-container">
                                                <input style="background-color: rgba(0, 0, 0, 0.4); border: none;" type="text" class="form-control empty" name="name" value="<?= $package['name'] ?>" />
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
                                                <input style="background-color: rgba(0, 0, 0, 0.4); border: none;" type="number" class="form-control empty" name="value" value="<?= $package['value'] ?>" />
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
                                                <input style="background-color: rgba(0, 0, 0, 0.4); border: none;" type="number" class="form-control empty" name="donate" value="<?= $package['donate'] ?>" />
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
                                                <input style="background-color: rgba(0, 0, 0, 0.4); border: none;" type="number" class="form-control empty" name="bonus" value="<?= $package['bonus'] ?>" />
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
                                            <span class="text"> Editar Pacote </span>
                                        </button>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </form>
                </table>
            </div>
        </div>
        <div class="table-wrapper" style="margin: 30px 0;">
            <div class="table-scroll-container scrollbar-inner">
                <table class="table table-hover dataTable table-striped width-full" id="gaTable">
                    <thead>
                        <tr>
                            <th style="text-align:center;" colspan="3">
                                Editar de Bônus
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php if ($paginate_bonus) : ?>
                            <?php foreach ($paginate_bonus as $key => $value) : ?>
                                <tr>
                                    <td style="width:50vw" colspan="1">
                                        <span>
                                            <div id="emailTypeBlock">
                                                <div class="input-container">
                                                    <?= $value['itemname'] ?>
                                                </div>
                                            </div>
                                        </span>
                                    </td>
                                    <td style="text-align:center;" colspan="1">
                                        <span>
                                            <div id="emailTypeBlock">
                                                <div class="input-container">
                                                    <?= trim($value['itemid'] . ' ' . $value['effect1'] . ' ' . $value['effect_value1'] . ' ' . $value['effect2'] . ' ' . $value['effect_value2'] . ' ' . $value['effect3'] . ' ' . $value['effect_value3']) ?>
                                                </div>
                                            </div>
                                        </span>
                                    </td>
                                    <td colspan="1">
                                        <span>
                                            <div id="emailTypeBlock">
                                                <div class="input-container">
                                                    <a href="<?= base_url('admin/edititem/' . $value['id']) ?>" class="btn-default">
                                                        Editar guia
                                                    </a>
                                                </div>
                                            </div>
                                        </span>
                                    </td>
                                    <td colspan="1">
                                        <span>
                                            <div id="emailTypeBlock">
                                                <div class="input-container">
                                                    <a href="<?= base_url('auth/delitem/' . $value['id']) ?>" class="btn-default">
                                                        Deletar guia
                                                    </a>
                                                </div>
                                            </div>
                                        </span>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                            <tr>
                                <td colspan="3">
                                    <?php if ($pager_bonus) : ?>
                                        <?= $pager_bonus->links('bonus', 'pagination') ?>
                                    <?php endif; ?>
                                </td>
                            </tr>
                        <?php else : ?>
                            <tr>
                                <td style="text-align: center;" colspan="3">
                                    Não há bônus adicionado a esse pacote!
                                </td>
                            </tr>
                        <?php endif; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
<?php else : ?>
    <div class="panel-body">
        <div class="table-wrapper">
            <div class="table-scroll-container scrollbar-inner">
                <table class="table table-hover dataTable table-striped width-full" id="gaTable">
                    <thead>
                        <tr>
                            <th style="text-align:center;" colspan="3">
                                Editar de Pacotes
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td style="text-align:center;" colspan="3">
                                <span>
                                    Pacote inexistente
                                </span>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
<?php endif; ?>
<?= $this->endSection() ?>