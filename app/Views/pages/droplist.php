<?= $this->extend('layouts') ?>
<?= $this->section('page') ?>
<div class="center">
    <br class="clearer" />
    <br class="clearer" />
    <div class="contentMid">
        <div class="blockWithIMGHeader">
            <ul class="news">
                <div class="scroller">
                    <div class="page all" data-bind="1">
                        <?php if ($droplist) : ?>
                            <li class="news-block">
                                <div class="newsContent">
                                    <div class="header">
                                        Droplist
                                    </div>
                                    <div class="teazer">
                                        <p>
                                        <table style="background-color:rgba(55, 55, 55, 0.5);margin: 0 auto;text-align:center;" class="dataTable table" id="dtBasicExample">
                                            <thead>
                                                <tr>
                                                    <th style="color:white;">Mobname</th>
                                                    <th style="color:white;">Itemname</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php foreach ($droplist as $key => $value) : ?>
                                                    <?php if ($value['itemname'] == 'Sem item' || $value['itemname'] == '') continue; ?>
                                                    <tr>
                                                        <td><?= $value['mobname'] ?></td>
                                                        <td><?= $value['itemname'] ?></td>
                                                    </tr>
                                                <?php endforeach; ?>
                                            </tbody>
                                        </table>
                                        </p>
                                    </div>
                                </div>
                                <br class="clearer" />
                                <br class="clearer" />
                            </li>
                        <?php else : ?>
                            <li class="news-block">
                                <div class="newsContent">
                                    <div class="header">
                                        Droplist
                                    </div>
                                    <div class="teazer">
                                        <p>
                                            Aguarde atualização do droplist!
                                        </p>
                                    </div>
                                </div>
                                <br class="clearer" />
                                <br class="clearer" />
                            </li>

                        <?php endif; ?>
                    </div>
                </div>
                <div class="arhive">
                    <div class="arhive-im"></div>
                </div>
            </ul>
        </div>
    </div>
    <?= view('template/aside') ?>
    <br class="clearer" />
    <br class="clearer" />
    <br class="clearer" />
</div>
<?= $this->endSection() ?>