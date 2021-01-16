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
                        <?php if (isset($article)) : ?>
                            <li style="margin:10px;" class="news-block">
                                <div class="newsContent">
                                    <div class="header">
                                        <?= $article['title'] ?>
                                    </div>
                                    <div class="date"><?= $article['updated_at'] ?? $article['created_at'] ?></div>
                                    <div class="teazer">
                                        <p>
                                            <?= $article['article'] ?>
                                        </p>
                                    </div>
                                </div>
                                <br class="clearer" />
                                <br class="clearer" />
                            </li>
                        <?php else : ?>
                            <li style="margin:10px;" class="news-block">
                                <div class="newsContent">
                                    <div class="header">
                                        <?= $value['name'] ?>
                                    </div>
                                    <div class="teazer">
                                        <div>
                                            Artigo inexistente
                                        </div>
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