<?= $this->extend('admincp/layouts') ?>
<?= $this->section('page') ?>
<div class="panel-body">
    <div class="table-wrapper">
        <div class="table-scroll-container scrollbar-inner">
            <table class="table table-hover dataTable table-striped width-full" id="gaTable">
                <thead>
                    <tr>
                        <th style="text-align:center;" colspan="3">
                            Editar de notícias
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <?php if (isset($news)) : ?>
                        <form method="POST" id="loginForm" action="<?= base_url('auth/editguide') ?>">
                            <tr>
                                <td style="text-align:center;" colspan="3">
                                    <span>
                                        <div id="emailTypeBlock">
                                            <div class="input-container">
                                                <input style="background-color: rgba(0, 0, 0, 0.4); border: none;" type="text" class="form-control empty" name="title" value="<?= $news['title'] ?>" />
                                            </div>
                                        </div>
                                    </span>
                                </td>
                            </tr>
                            <tr>
                                <td colspan="3">
                                    <textarea name="content" class="editor"><?= $news['content'] ?></textarea>
                                </td>
                            </tr>
                            <tr>
                                <td colspan="3">
                                    <div class="block" style="margin:10px;text-align:center;">
                                        <label style="margin:10px;text-align:center;display:block;">Categorias</label>
                                        <select style="margin:10px;text-align:center;color:black;" name="category">
                                            <option value="1" <?= $news['category'] == 1 ? 'selected' : '' ?>>Notícia</option>
                                            <option value="2" <?= $news['category'] == 2 ? 'selected' : '' ?>>Manutenção</option>
                                            <option value="3" <?= $news['category'] == 3 ? 'selected' : '' ?>>Evento</option>
                                            <option value="4" <?= $news['category'] == 4 ? 'selected' : '' ?>>Atualização</option>
                                        </select>
                                    </div>
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
                                            Editar Notícia
                                        </button>
                                    </div>
                                </td>
                            </tr>
                        </form>
                    <?php else : ?>
                        <tr>
                            <td style="text-align: center;" colspan="3">
                                <span>
                                    Notícia inexistente
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