<?= $this->extend('layouts') ?>
<?= $this->section('page') ?>
<br class="clearer" />
<div class="center">
    <br class="clearer" />
    <br class="clearer" />
    <div style="text-align: left;">
        <div class="rateBlockTextTitle">Notícias</div>
    </div>
    <div class="contentMid">
        <div class="blockWithIMGHeader">
            <ul class="news">
                <div class="scroller">
                    <div class="page all" data-bind="1">
                        <?php if ($news_paginate) : ?>
                            <?php foreach ($news_paginate as $key => $value) : ?>
                                <div class="news-block" style="margin:10px;">
                                    <div class="newsContent" style="background-color: rgba(55, 55, 55, 0.5);border: 1px solid rgba(55, 55, 55, 1);">
                                        <div class="header" style="padding:10px;background-color: rgba(0, 0, 0, 0.2);">
                                            <?= $value['title'] ?>
                                        </div>
                                        <div style="padding:20px;text-align:center;">
                                            <a class="btn-default" href="<?= base_url('site/news/' . $value['id']) ?>" class="learnMore">Ler mais</a>
                                        </div>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                        <?php endif; ?>
                    </div>
                    <?php if ($news_pager) : ?>
                        <?= $news_pager->links('news', 'pagination') ?>
                    <?php endif; ?>
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