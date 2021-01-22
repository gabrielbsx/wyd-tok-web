<?= $this->extend('dashboard/layouts') ?>
<?= $this->section('page') ?>
<div class="panel-body">
    <div class="table-wrapper">
        <div class="table-scroll-container scrollbar-inner">
            <table class="table table-hover dataTable table-striped width-full" id="gaTable">
                <thead>
                    <tr>
                        <th style="text-align:center;" colspan="3">
                            Painel do Usuário
                        </th>
                    </tr>
                    <tr>
                        <th colspan="3">
                            <span>Bem vindo novamente, <?= session()->get('login')['username'] ?>.
                            </span>
                        </th>
                    </tr>
                </thead>
            </table>
        </div>
    </div>
</div>
<?= $this->endSection() ?>