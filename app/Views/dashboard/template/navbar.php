<nav class="site-navbar navbar navbar-fixed-top" role="navigation" style="background-image: url('<?= base_url('views/template/images/new/top_panel.png') ?>');">
    <div class="navbar-header">
        <button type="button" class="navbar-toggle hamburger hamburger-close navbar-toggle-left hided" data-toggle="menubar">
            <span class="sr-only">Toggle navigation</span>
            <span class="hamburger-bar"></span>
        </button>
        <button type="button" class="navbar-toggle collapsed nav-button" data-target="#site-navbar-collapse" data-toggle="collapse">
            <i class="icon wb-more-horizontal" aria-hidden="true"></i>
        </button>
    </div>
    <div class="container-fluid">
        <div class="collapse navbar-collapse navbar-collapse-toolbar" id="site-navbar-collapse">
            <ul class="nav navbar-toolbar">
                <li class="dropdown left language">
                </li>
                <li class="dropdown right">
                    <ul>
                        <li class="dropdown user">
                            <a class="nav-link navbar-avatar" data-toggle="dropdown" href="#" aria-expanded="true" data-animation="scale-up" role="button">
                                <span class="uesr_name">
                                    <span>
                                    </span>
                                </span>
                                <span class="avatar avatar-online">
                                    <img src="<?= base_url('cp/views/template/images/no_avatar.png') ?>" alt="">
                                    <?php if (session()->has('login')) : ?>
                                        <i></i>
                                    <?php endif; ?>
                                </span>
                            </a>
                            <ul class="dropdown-menu" role="menu">
                                <?php if (session()->has('login')) : ?>
                                    <?php if (session()->get('login')['access'] == 3) : ?>
                                        <li style="text-align:center;" role="presentation">
                                            <span>
                                                Administração
                                            </span>
                                        </li>
                                        <li role="presentation">
                                            <a href="<?= base_url('admin/news') ?>" role="menuitem">
                                                <i class="fas fa-user" aria-hidden="true"></i>
                                                <span class="value">Notícias</span>
                                            </a>
                                        </li>
                                        <li role="presentation">
                                            <a href="<?= base_url('admin/faq') ?>" role="menuitem">
                                                <i class="fas fa-user" aria-hidden="true"></i>
                                                <span class="value">FAQ</span>
                                            </a>
                                        </li>
                                        <li role="presentation">
                                            <a href="<?= base_url('admin/guides') ?>" role="menuitem">
                                                <i class="fas fa-user" aria-hidden="true"></i>
                                                <span class="value">Guia do jogo</span>
                                            </a>
                                        </li>
                                        <li role="presentation">
                                            <a href="<?= base_url('admin/donate') ?>" role="menuitem">
                                                <i class="fas fa-user" aria-hidden="true"></i>
                                                <span class="value">Pacote de Doação</span>
                                            </a>
                                        </li>
                                    <?php endif; ?>
                                    <li style="text-align:center;" role="presentation">
                                        <span>
                                            Painel do Usuário
                                        </span>
                                    </li>
                                    <li role="presentation">
                                        <a href="<?= base_url('dashboard/alterpass') ?>" role="menuitem">
                                            <i class="fas fa-user" aria-hidden="true"></i>
                                            <span class="value">Alterar senha</span>
                                        </a>
                                    </li>
                                    <li role="presentation">
                                        <a href="<?= base_url('dashboard/numericpass') ?>" role="menuitem">
                                            <i class="fas fa-user" aria-hidden="true"></i>
                                            <span class="value">Recupear numérica</span>
                                        </a>
                                    </li>
                                    <li role="presentation">
                                        <a href="<?= base_url('dashboard/guildmark') ?>" role="menuitem">
                                            <i class="fas fa-flag" aria-hidden="true"></i>
                                            <span class="value">Guildmark</span>
                                        </a>
                                    </li>
                                    <li role="presentation">
                                        <a href="<?= base_url('dashboard/tickets') ?>" role="menuitem">
                                            <i class="fas fa-info" aria-hidden="true"></i>
                                            <span class="value">Suporte</span>
                                        </a>
                                    </li>
                                    <li role="presentation">
                                        <a href="<?= base_url('dashboard/logout') ?>" role="menuitem">
                                            <i class="icon wb-power" aria-hidden="true"></i>
                                            <span class="value">Sair</span>
                                        </a>
                                    </li>
                                <?php else : ?>
                                    <li role="presentation">
                                        <a href="<?= base_url('dashboard/login') ?>" role="menuitem">
                                            <i class="fas fa-user" aria-hidden="true"></i>
                                            <span class="value">Login</span>
                                        </a>
                                    </li>
                                    <li role="presentation">
                                        <a href="<?= base_url('dashboard/register') ?>" role="menuitem">
                                            <i class="fas fa-user" aria-hidden="true"></i>
                                            <span class="value">Cadastrar</span>
                                        </a>
                                    </li>
                                    <li role="presentation">
                                        <a href="<?= base_url('dashboard/recovery') ?>" role="menuitem">
                                            <i class="fas fa-user" aria-hidden="true"></i>
                                            <span class="value">Recuperar conta</span>
                                        </a>
                                    </li>
                                <?php endif; ?>
                                <li role="presentation">
                                    <a href="<?= base_url('site') ?>">
                                        <i class="fas fa-arrow-circle-left"></i>
                                        Voltar ao site
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>