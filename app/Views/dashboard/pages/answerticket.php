<?= $this->extend('dashboard/layouts') ?>
<?= $this->section('page') ?>
<div class="panel-body">
    <?php if (isset($ticket)) : ?>
        <div class="table-wrapper">
            <div class="table-scroll-container scrollbar-inner">
                <table class="table table-hover dataTable table-striped width-full" id="gaTable">
                    <thead>
                        <tr>
                            <th style="text-align:center;" colspan="3">
                                <?= $ticket['title'] ?>
                            </th>
                        </tr>
                        <tr>
                            <th colspan="3">
                                <?= $ticket['content'] ?>
                            </th>
                        </tr>
                        <tr>
                            <th colspan="3">
                                <div class="text-right">
                                    <?= $ticket['username'] ?> - <?= $ticket['updated_at'] ?? $ticket['created_at'] ?>
                                </div>
                            </th>
                        </tr>
                    </thead>
                </table>
            </div>
        </div>
        <?php if ($answers_paginate) : ?>
            <?php foreach ($answers_paginate as $key => $value) : ?>
                <div class="table-wrapper" style="margin:40px 0px;">
                    <div class="table-scroll-container scrollbar-inner">
                        <table class="table table-hover dataTable table-striped width-full" id="gaTable">
                            <thead>
                                <tr>
                                    <th style="text-align:center;" colspan="3">
                                        <?= $value['username'] ?>
                                    </th>
                                </tr>
                                <tr>
                                    <th colspan="3">
                                        <?= $value['content'] ?>
                                    </th>
                                </tr>
                                <tr>
                                    <th colspan="3">
                                        <div class="text-right">
                                            <?= $value['username'] ?> - <?= $value['updated_at'] ?? $value['created_at'] ?>
                                        </div>
                                    </th>
                                </tr>
                            </thead>
                        </table>
                    </div>
                </div>
            <?php endforeach; ?>
            <?php if (isset($answers_pager)) : ?>
                <?= $answers_pager->links('answers', 'pagination') ?>
            <?php endif; ?>
        <?php endif; ?>
        <?php if ($ticket['status'] == 0) : ?>
            <div class="table-wrapper" style="margin:30px 0;">
                <div class="table-scroll-container scrollbar-inner">

                    <table class="table table-hover dataTable table-striped width-full" id="gaTable">
                        <thead>
                            <tr>
                                <th colspan="3">
                                    <div style="text-align:center;">
                                        Responder ticket
                                    </div>
                                </th>
                            </tr>
                        </thead>
                        <form method="POST" action="<?= base_url('auth/answerticket') ?>">
                            <tbody>
                                <tr>
                                    <td style="text-align:center;" colspan="3">
                                        <textarea name="content" class="editor"></textarea>
                                        <input type="hidden" name="id_ticket" value="<?= $ticket['id'] ?>">
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
                                                <span class="text"> Responder </span>
                                            </button>
                                        </div>
                                    </td>
                                </tr>
                        </form>
                        <tr>
                            <td colspan="3">
                                <form class="mb-8" action="<?= base_url('auth/closeticket') ?>" method="POST">
                                    <input type="hidden" name="id_ticket" value="<?= $ticket['id'] ?>">
                                    <div class="form-wrapper" style="border: none;text-align:center;">
                                        <button type="submit" class="btn-default" id="tagLogin">
                                            <span class="text"> Encerrar Ticket </span>
                                        </button>
                                    </div>
                                </form>
                            </td>
                        </tr>
                        </tbody>
                    </table>

                </div>
            </div>
        <?php endif; ?>
    <?php endif; ?>
</div>
<?= $this->endSection() ?>