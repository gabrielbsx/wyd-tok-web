<?= $this->extend('layouts') ?>
<?= $this->section('page') ?>
<br class="clearer" />
<div class="center">
    <br class="clearer" />
    <br class="clearer" />
    <div class="contentMid">
        <div class="blockWithIMGHeader">
            <ul class="news">
                <div class="scroller">
                    <div class="page all" data-bind="1">
                        <?php foreach ($guides as $key => $value) : ?>
                            <li style="margin:10px;" class="news-block">
                                <div class="newsContent">
                                    <div class="header">
                                        <?= $value['name'] ?>
                                    </div>
                                    <div class="teazer">
                                        <?php if (count($value['articles']) > 0) : ?>
                                            <?php foreach ($value['articles'] as $key2 => $value2) : ?>
                                                <div style="padding:20px;display:inline-block;">
                                                    <a class="menu-item" href="<?= base_url('/site/article/' . $value2['id']) ?>">
                                                        <?= $value2['title'] ?>
                                                    </a>
                                                </div>
                                            <?php endforeach; ?>
                                        <?php else : ?>
                                            <div>
                                                Não há artigos nesse guia
                                            </div>
                                        <?php endif; ?>
                                    </div>
                                </div>
                                <br class="clearer" />
                                <br class="clearer" />
                            </li>
                        <?php endforeach; ?>
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