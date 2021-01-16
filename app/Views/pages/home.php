<?= $this->extend('layouts') ?>
<?= $this->section('page') ?>
<br class="clearer" />
<div class="center">
    <!--<div class="center">
        <div class="tffBlock">
            <div class="tffBlockBig">
                <div style="margin-left: 222px; margin-top: 61px; font-size: 21px">
                    Classic Interlude <br />with Modern Graphics
                </div>
                <div style="
                  margin-left: 222px;
                  margin-top: 25px;
                  font-size: 12px;
                  color: #ab8f54;
                  font-family: MontserratBold;
                  text-transform: uppercase;
                ">
                    Salvation Client
                </div>
                <div style="
                  margin-left: 222px;
                  margin-top: 25px;
                  font-size: 14px;
                  width: 240px;
                  color: #a0a0a0;
                  font-family: Montserrat;
                ">
                    Beautiful graphics with modern optimization, feel the classic world in a new way.
                </div>
            </div>
            <div class="tffBlockSmall" style="
                background: url(https://l2realm.com/template/lineage/site/images/bg-episode-021.png);
                margin: 0 39px;
              ">
                <div style="margin-left: 28px; margin-top: 143px; font-size: 17px">
                    Upgraded Balance
                </div>
                <div style="
                  margin-left: 28px;
                  margin-top: 25px;
                  font-size: 14px;
                  width: 161px;
                  color: #a0a0a0;
                  font-family: Montserrat;
                ">
                    Play any profession and race.
                </div>
            </div>
            <div class="tffBlockSmall" style="
                background: url(https://l2realm.com/template/lineage/site/images/bg-episode-031.png);
              ">
                <div style="margin-left: 28px; margin-top: 143px; font-size: 17px">
                    PVP & PVE
                </div>
                <div style="
                  margin-left: 28px;
                  margin-top: 25px;
                  font-size: 14px;
                  width: 161px;
                  color: #a0a0a0;
                  font-family: Montserrat;
                ">
                    Self-contained content for any player.
                </div>
            </div>
        </div>
        <div class="rateBlock">
            <div style="float: left; width: 100%; display: flex">
                <div class="rateBlockSlot">
                    <div class="rateBlockSlotRate">x3</div>
                    <div class="rateBlockSlotDesc">EXP / SP</div>
                </div>
                <div class="rateBlockSlot">
                    <div class="rateBlockSlotRate">x3</div>
                    <div class="rateBlockSlotDesc">ADENA</div>
                </div>
                <div class="rateBlockSlot">
                    <div class="rateBlockSlotRate">x3</div>
                    <div class="rateBlockSlotDesc">DROP</div>
                </div>
                <div class="rateBlockSlot">
                    <div class="rateBlockSlotRate">x3</div>
                    <div class="rateBlockSlotDesc">SPOIL</div>
                </div>
                <div class="rateBlockSlot">
                    <div class="rateBlockSlotRate">x3</div>
                    <div class="rateBlockSlotDesc">RAIDS</div>
                </div>
                <div class="rateBlockSlot">
                    <div class="rateBlockSlotRate">x3</div>
                    <div class="rateBlockSlotDesc">EPIC</div>
                </div>
            </div>
            <div style="
                /* float: left; */
                width: 896px;
                line-height: 1.5;
                text-align: center;
                margin: 0 auto;
                display: flex;
                font-size: 14px;
                padding: 33px 15px;
                font-family: Montserrat;
              ">
                Prove your mettle to earn every Adena and to wear every piece of gear branded with your sweat! Craft your items and shots, adventure into the wilderness to find rare spellbooks and become stronger or richer by your own means.
            </div>
            <div class="rateBlockDiagram">
                <img src="https://shock-world.com/tff_x3/static_promo/images/diagram.png" style="margin-top: 75px" />
                <div class="diagramBlock">
                    <div>Reaching max game stage</div>
                    <div class="diagramBlock1">Self-sufficiency PVP</div>
                    <div class="diagramBlock2">PVP</div>
                    <div class="diagramBlock3">Sociality <br />PVP</div>
                    <div class="diagramBlock4">PVE</div>
                    <div class="diagramBlock5">Difficulty <br />getting levels</div>
                </div>
            </div>
            <div class="rateBlockText">
                <div style="padding: 23px 16px">
                    <div class="rateBlockTextTitle">Game features</div>
                    <ul class="rateBlockTextList">
                        <li>New Chronicles: TFF</li>
                        <li>Modern game-client (software)</li>
                        <li>Comfortable play by any class</li>
                        <li>No stages or restrictions</li>
                        <li>New character development opportunities</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>-->
    <br class="clearer" />
    <br class="clearer" />
    <div style="text-align: center">
        <div class="rateBlockTextTitle">Notícias</div>
    </div>
    <div class="contentMid">
        <div class="blockWithIMGHeader">
            <ul class="news">
                <div class="scroller">
                    <div class="page all" data-bind="1">
                        <?php if ($news_paginate) : ?>
                            <?php foreach ($news_paginate as $key => $value) : ?>
                                <li class="news-block">
                                    <div class="newsIMG">
                                        <div class="top"></div>
                                        <img src="https://thor.universeofwar.com/images/post/altar_de_noatun.jpg" alt="" />
                                        <div class="bottom"></div>
                                    </div>
                                    <div class="newsContent">
                                        <div class="header">
                                            <?= $value['title'] ?>
                                        </div>
                                        <div class="date"><?= $value['created_at'] ?? $value['updated_at'] ?></div>
                                        <div class="teazer">
                                            <p>
                                                <?= $value['content'] ?>
                                            </p>
                                        </div>
                                        <a href="<?= base_url('site/news/' . $value['id']) ?>" class="learnMore">Ler mais</a>
                                    </div>
                                    <br class="clearer" />
                                    <br class="clearer" />
                                </li>
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