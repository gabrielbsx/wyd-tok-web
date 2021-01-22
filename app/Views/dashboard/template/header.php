<div class="site-menubar" style="background-image: url('<?= base_url('views/template/images/new/sidebar.png') ?>')">
    <div class="site-menubar-body">
        <div>
            <div>
                <ul class="site-menu">
                    <?php if (session()->has('login')) : ?>
                        <?php if (session()->get('login')['access'] >= 3) : ?>
                            <li class="site-menu-item has-sub">
                                <a href="javascript:void(0)">
                                    <i class="site-menu-icon fa fa-user" aria-hidden="true"></i>
                                    <span class="site-menu-title">Administração</span>
                                    <span class="site-menu-arrow"></span>
                                </a>
                                <ul class="site-menu-sub">
                                    <li class="site-menu-item">
                                        <a class="animsition-link" href="<?= base_url('admin/news') ?>">
                                            <span class="site-menu-title">Notícias</span>
                                        </a>
                                    </li>
                                    <li class="site-menu-item">
                                        <a class="animsition-link" href="<?= base_url('admin/faq') ?>">
                                            <span class="site-menu-title">FAQ</span>
                                        </a>
                                    </li>
                                    <li class="site-menu-item">
                                        <a class="animsition-link" href="<?= base_url('admin/guides') ?>">
                                            <span class="site-menu-title">Guia do jogo</span>
                                        </a>
                                    </li>
                                    <li class="site-menu-item">
                                        <a class="animsition-link" href="<?= base_url('admin/donate') ?>">
                                            <span class="site-menu-title">Pacote de Doação</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                        <?php endif; ?>
                        <li class="site-menu-item has-sub">
                            <a href="javascript:void(0)">
                                <i class="site-menu-icon fa fa-question-circle" aria-hidden="true"></i>
                                <span class="site-menu-title">Suporte</span>
                                <span class="site-menu-arrow"></span>
                            </a>
                            <ul class="site-menu-sub">
                                <li class="site-menu-item">
                                    <a class="animsition-link" href="<?= base_url('dashboard/tickets') ?>">
                                        <span class="site-menu-title">Tickets</span>
                                    </a>
                                </li>
                                <li class="site-menu-item">
                                    <a class="animsition-link" href="<?= base_url('site/faq') ?>">
                                        <span class="site-menu-title">FAQ</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="site-menu-item has-sub">
                            <a href="javascript:void(0)">
                                <i class="site-menu-icon fa fa-user" aria-hidden="true"></i>
                                <span class="site-menu-title">Perfil</span>
                                <span class="site-menu-arrow"></span>
                            </a>
                            <ul class="site-menu-sub">
                                <li class="site-menu-item">
                                    <a class="animsition-link" href="<?= base_url('dashboard/alterpass') ?>">
                                        <span class="site-menu-title">Alterar senha</span>
                                    </a>
                                </li>
                                <li class="site-menu-item">
                                    <a class="animsition-link" href="<?= base_url('dashboard/numericpass') ?>">
                                        <span class="site-menu-title">Recuperar numérica</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="site-menu-item">
                            <a class="animsition-link" href="<?= base_url('dashboard/guildmark') ?>">
                                <i class="site-menu-icon fa fa-flag" aria-hidden="true"></i>
                                <span class="site-menu-title">Guildmark</span>
                            </a>
                        </li>
                        <li class="site-menu-item active">
                            <a class="animsition-link" href="<?= base_url('dashboard/logout') ?>">
                                <i class="site-menu-icon fa fa-sign-in" aria-hidden="true"></i>
                                <span class="site-menu-title">Sair</span>
                            </a>
                        </li>
                    <?php else : ?>
                        <li class="site-menu-item active">
                            <a class="animsition-link" href="<?= base_url('dashboard/login') ?>">
                                <i class="site-menu-icon fa fa-sign-in" aria-hidden="true"></i>
                                <span class="site-menu-title">Login</span>
                            </a>
                        </li>
                        <li class="site-menu-item">
                            <a class="animsition-link" href="<?= base_url('dashboard/register') ?>">
                                <i class="site-menu-icon fa fa-plus" aria-hidden="true"></i>
                                <span class="site-menu-title">Cadastrar</span>
                            </a>
                        </li>
                        <li class="site-menu-item has-sub">
                            <a href="javascript:void(0)">
                                <i class="site-menu-icon fa fa-question-circle" aria-hidden="true"></i>
                                <span class="site-menu-title">Esqueci minha conta</span>
                                <span class="site-menu-arrow"></span>
                            </a>
                            <ul class="site-menu-sub">
                                <li class="site-menu-item">
                                    <a class="animsition-link" href="<?= base_url('dashboard/recovery') ?>">
                                        <span class="site-menu-title">Recuperar conta</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                    <?php endif; ?>
                </ul>
                <a class="site-menubar-section select-server selected" href="#">
                    <h5>Servidor: Online</h5>
                    <div class="progress progress-xs">
                        <div class="progress-bar active" style="width: 10%" role="progressbar"></div>
                    </div>
                </a>
            </div>
        </div>
    </div>
    <footer class="site-footer">
        <div class="actions">
            <a href="<?= base_url('site') ?>" class="go-to-site">
                <img src="<?= base_url('views/template/images/new/go-to-site.jpg') ?>" alt="" />
                <span>Voltar ao site</span>
            </a>
        </div>
        <div class="site-footer-legal">
            © 2021 <a href="#">Tales of Kersef</a> - Desenvolvido por Kentaro
        </div>
    </footer>
</div>