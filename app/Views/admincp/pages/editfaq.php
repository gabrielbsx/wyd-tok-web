<?= $this->extend('admincp/layouts') ?>
<?= $this->section('page') ?>
<div class="panel-body">
    <div class="table-wrapper">
        <div class="table-scroll-container scrollbar-inner">
            <table class="table table-hover dataTable table-striped width-full" id="gaTable">
                <thead>
                    <tr>
                        <th style="text-align:center;" colspan="3">
                            Editar FAQ
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <?php if (isset($faq)) : ?>
                        <form method="POST" id="loginForm" action="<?= base_url('auth/editfaq') ?>">
                            <tr>
                                <td style="text-align:center;" colspan="3">
                                    <span>
                                        <div id="emailTypeBlock">
                                            <div class="input-container">
                                                <input style="background-color: rgba(0, 0, 0, 0.4); border: none;" type="text" class="form-control empty" name="title" value="<?= $faq['title'] ?>" />
                                            </div>
                                        </div>
                                    </span>
                                </td>
                            </tr>
                            <tr>
                                <td colspan="3">
                                    <textarea name="article" class="editor"><?= $faq['article'] ?></textarea>
                                    <input name="id" value="<?= $faq['id'] ?>" type="hidden" />
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
                                        <button type="submit" class="btn-default">
                                            <span class="text"> Editar FAQ </span>
                                        </button>
                                    </div>
                                </td>
                            </tr>
                        </form>
                    <?php else : ?>
                        <tr>
                            <td style="text-align: center;" colspan="3">
                                <span>
                                    FAQ inexistente
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