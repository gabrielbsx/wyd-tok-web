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
                            <div class="table-wrapper" style="background-color:rgba(0, 0, 0, 0.4);margin:10px;">
                                <div class="news-block">
                                    <div class="newsContent">
                                        <div class="header" style="padding:20px;background-color:rgba(55, 55, 55, 0.5);border-bottom: 1px solid rgba(255, 255, 255, 0.2);">
                                            Droplist
                                        </div>
                                        <div class="teazer">
                                            <table style="background-color:rgba(55, 55, 55, 0.5);margin: 0 auto;text-align:center;width:100%;" class="dataTable table" id="dtBasicExample">
                                                <thead>
                                                    <tr>
                                                        <th>Mobname</th>
                                                        <th>Itemname</th>
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
                                        </div>
                                    </div>
                                    <br class="clearer" />
                                    <br class="clearer" />
                                </div>
                            </div>
                        <?php else : ?>
                            <div class="table-wrapper" style="background-color:rgba(0, 0, 0, 0.4);margin:10px;">
                                <div class="news-block">
                                    <div class="newsContent">
                                        <div class="header" style="padding:20px;background-color:rgba(0, 0, 0, 0.2);border-bottom: 1px solid rgba(255, 255, 255, 0.2);">
                                            Droplist
                                        </div>
                                        <div class="teazer">
                                            <div style="padding:20px;display:inline-block;">
                                                <table style="background-color:rgba(55, 55, 55, 0.5);margin: 0 auto;text-align:center;" class="dataTable table" id="dtBasicExample">
                                                    <tbody>
                                                        <tr>
                                                            <td>
                                                                Aguarde atualização do droplist!
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                    <br class="clearer" />
                                    <br class="clearer" />
                                </div>
                            </div>
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