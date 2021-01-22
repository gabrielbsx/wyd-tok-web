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
                        <?php foreach ($faq_paginate as $key => $value) : ?>
                            <div style="margin:10px;" class="news-block">
                                <div class="newsContent" style="background-color: rgba(55, 55, 55, 0.5);border: 1px solid rgba(55, 55, 55, 1);">
                                    <div class="header" style="padding:10px;background-color: rgba(0, 0, 0, 0.2);">
                                        <?= $value['title'] ?>
                                    </div>
                                    <div class="teazer">
                                        <div style="padding:20px;display:inline-block;">
                                            <?= $value['article'] ?>
                                        </div>
                                    </div>
                                </div>
                                <br class="clearer" />
                                <br class="clearer" />
                            </div>
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