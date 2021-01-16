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
                        <?php if (isset($news)) : ?>
                            <li class="news-block">
                                <div class="newsContent">
                                    <div class="header">
                                        <?= $news['title'] ?>
                                    </div>
                                    <div class="date"><?= $news['updated_at'] ?? $news['created_at'] ?></div>
                                    <div class="teazer">
                                        <p>
                                            <?= $news['content'] ?>
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