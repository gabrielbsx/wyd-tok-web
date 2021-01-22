<?= $this->extend('admincp/layouts') ?>
<?= $this->section('page') ?>
<div class="panel-body">
    <div class="table-wrapper">
        <div class="table-scroll-container scrollbar-inner">
            <table class="table table-hover dataTable table-striped width-full" id="gaTable">
                <thead>
                    <tr>
                        <th style="text-align:center;" colspan="3">
                            Criação de artigo
                        </th>
                    </tr>
                    <form method="POST" action="<?= base_url('auth/addarticleguide') ?>" id="loginForm">
                        <tr>
                            <th colspan="3">
                                <span>
                                    <div id="emailTypeBlock">
                                        <div class="input-container">
                                            <label class="floating-label">Título</label>
                                            <input style="background-color: rgba(0, 0, 0, 0.4); border: none;" type="text" class="form-control empty" name="title" />
                                        </div>
                                    </div>
                                </span>
                            </th>
                        </tr>
                        <tr>
                            <th colspan="3">
                                <span>
                                    <div id="emailTypeBlock">
                                        <div class="input-container">
                                            <textarea style="margin:10px auto;" name="article" class="editor"></textarea>
                                        </div>
                                    </div>
                                </span>
                                <input type="hidden" name="id_guide" value="<?= $id ?>">
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
                            <th colspan="3" style="text-align:center;">
                                <button type="submit" class="btn-default">
                                    Criar Artigo
                                </button>
                            </th>
                        </tr>
                    </form>
                </thead>
            </table>
        </div>
    </div>
</div>
<?= $this->endSection() ?>