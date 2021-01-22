<?php $uri = $uri = new \CodeIgniter\HTTP\URI(current_url(true)); ?>
<div class="center">
    <a href="<?= base_url('site') ?>" class="logo"></a>
    <ul class="mainMenu">
        <li>
            <a class="menu-item" href="<?= base_url('site/guides') ?>">
                Guia do Jogo
            </a>
        </li>
        <li class="dropdown">
            <a class="menu-item" href="#">
                Comunidade
            </a>
            <ul class="dropdown-content">
                <li>
                    <a href="<?= base_url('site/ranking') ?>" class="menu-item">
                        Ranking
                    </a>
                </li>
                <li>
                    <a href="<?= base_url('dashboard/guildmark') ?>" class="menu-item">
                        Guildmark
                    </a>
                </li>
            </ul>
        </li>
        <li>
            <a class="menu-item" href="<?= base_url('site/downloads') ?>">
                Downloads
            </a>
        </li>
        <li class="dropdown">
            <a class="menu-item" href="#">
                Suporte
            </a>
            <ul class="dropdown-content">
                <li>
                    <a href="<?= base_url('site/faq') ?>" class="menu-item">
                        FAQ
                    </a>
                </li>
                <li>
                    <a href="<?= base_url('dashboard/tickets') ?>" class="menu-item">
                        Fale Conosco
                    </a>
                </li>
            </ul>
        </li>
    </ul>
    <div class="buttons">
        <a href="<?= !session()->has('login') ? base_url('dashboard/login') : base_url('dashboard') ?>" class="buyCoinsButton">PAINEL DO USUÁRIO</a>
    </div>
    <br class="clearer" />
</div>