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
                        <div style="margin:10px;" class="news-block">
                            <div class="newsContent" style="background-color: rgba(55, 55, 55, 0.5);border: 1px solid rgba(55, 55, 55, 1);">
                                <div class="header" style="padding:10px;background-color: rgba(0, 0, 0, 0.2);">
                                    Downloads
                                </div>
                                <div class="teazer">
                                    <div style="display:block;text-align:center;padding:20px;">
                                        <a class="btn-default" style="margin:10px;" href="#">
                                            Mediafire
                                        </a>
                                        <a class="btn-default" style="margin:10px;" href="#">
                                            4shared
                                        </a>
                                        <a class="btn-default" style="margin:10px;" href="#">
                                            Mega
                                        </a>
                                    </div>
                                </div>
                            </div>  
                        </div>
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