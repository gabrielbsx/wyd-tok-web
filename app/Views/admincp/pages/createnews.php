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
                    <form method="POST" id="loginForm" action="<?= base_url('auth/createnews') ?>">
                        <tr>
                            <td style="text-align:center;" colspan="3">
                                <span>
                                    <div id="emailTypeBlock">
                                        <div class="input-container">
                                            <label class="floating-label">Título</label>
                                            <input style="background-color: rgba(0, 0, 0, 0.4); border: none;" type="text" class="form-control empty" name="title" />
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
                                            <textarea name="content" class="editor"></textarea>
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
                                            <div class="block" style="margin:10px;text-align:center;">
                                                <label style="display:block;text-align:center;margin:10px;">Categorias</label>
                                                <select style="color:black;" name="category">
                                                    <option value="1">Notícia</option>
                                                    <option value="2">Manutenção</option>
                                                    <option value="3">Evento</option>
                                                    <option value="4">Atualização</option>
                                                </select>
                                            </div>
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
                                    <button type="submit" class="btn-default">
                                        Criar
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