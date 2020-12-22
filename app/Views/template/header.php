<nav x-data="{show:false}" class="flex border-b-4 border-gray-900 justify-between items-center bg-black flex-wrap">
    <button @click="show=!show" class="text-white inline-flex p-3 hover:bg-gray-900 rounded lg:hidden ml-auto hover:text-white outline-none nav-toggler" data-target="#navigation">
        <i class="material-icons">menu</i>
    </button>
    <div @click.away="show = false" :class="{ 'block': show, 'hidden': !show }" class="hidden top-navbar w-full lg:inline-flex lg:flex-grow lg:w-auto" id="navigation">
        <div class="lg:inline-flex lg:flex-row lg:mr-auto lg:w-auto w-full lg:items-center items-start flex flex-col lg:h-auto">
            <a href="#" class="lg:inline-flex lg:w-auto w-full px-6 py-2 rounded text-gray-400 items-center justify-center hover:bg-gray-900 hover:text-white">
                <img class="w-2 mr-2 text-gray-400" src="<?= base_url('images/tower.png') ?>">
                <span><?= date('H:m:i', time() + time() + time()) ?></span>
            </a>
            <a href="#" class="lg:inline-flex lg:w-auto w-full px-6 py-2 rounded text-gray-400 items-center justify-center hover:bg-gray-900 hover:text-white">
                <i class='fas fa-crown mr-2'></i>
                <span><?= date('H:m:i') ?></span>
            </a>
            <a href="#" class="lg:inline-flex lg:w-auto w-full px-6 py-2 rounded text-gray-400 items-center justify-center hover:bg-gray-900 hover:text-white">
                <i class="fas fa-flag mr-2"></i>
                <span><?= date('H:m:i', time() + time()) ?></span>
            </a>
        </div>
        <div class="lg:inline-flex lg:flex-row lg:ml-auto lg:w-auto w-full lg:items-center items-start flex flex-col lg:h-auto">
            <?php if (session()->has('login')) : ?>
                <div class="mr-12" x-data="{ show: false }" @click.away="show = false">
                    <button @click="show = ! show" class="lg:inline-flex lg:w-auto w-full px-6 py-2 rounded text-gray-400 items-center justify-center hover:bg-gray-900 hover:text-white">
                        <span><i class="fas fa-user"></i> <?= ucfirst(session()->get('login')['username']) ?></span>
                        <svg class="fill-current text-gray-200" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24">
                            <path d="M7 10l5 5 5-5z" />
                            <path d="M0 0h24v24H0z" fill="none" />
                        </svg>
                    </button>
                    <div x-show="show" class="absolute text-white rounded-b-lg bg-black shadow-md" style="min-width:10rem;z-index:999;">
                        <?php if (session()->get('login')['access'] == 3) : ?>
                            <a class="block hover:bg-gray-800 px-3 py-2" href="<?= base_url('dashboard/news') ?>">Notícias</a>
                        <?php endif; ?>
                        <a class="block hover:bg-gray-800 px-3 py-2" href="<?= base_url('dashboard/tickets') ?>">Suporte</a>
                        <a class="block hover:bg-gray-800 px-3 py-2" href="<?= base_url('dashboard/alterpass') ?>">Alterar senha</a>
                        <a class="block hover:bg-gray-800 px-3 py-2" href="<?= base_url('dashboard/numericpass') ?>">Recuperar numérica</a>
                        <a class="block hover:bg-gray-800 px-3 py-2" href="<?= base_url('dashboard/guildmark') ?>">Guildmark</a>
                        <a class="block hover:bg-gray-800 px-3 py-2" href="<?= base_url('dashboard/donate') ?>">Doações</a>
                        <a class="block hover:bg-gray-800 px-3 py-2" href="<?= base_url('dashboard/logout') ?>">Sair</a>
                    </div>
                </div>
            <?php else : ?>
                <a href="<?= base_url('site/login') ?>" class="lg:inline-flex lg:w-auto w-full px-6 py-2 rounded text-gray-400 items-center justify-center hover:bg-gray-900 hover:text-white">
                    <span>Login</span>
                </a>
                <a href="<?= base_url('site/register') ?>" class="lg:inline-flex lg:w-auto w-full px-6 py-2 rounded text-gray-400 items-center justify-center hover:bg-gray-900 hover:text-white">
                    <span>Cadastrar</span>
                </a>
                <a href="<?= base_url('site/recovery') ?>" class="lg:inline-flex lg:w-auto w-full px-6 py-2 rounded text-gray-400 items-center justify-center hover:bg-gray-900 hover:text-white">
                    <span>Recuperar contas</span>
                </a>
            <?php endif; ?>
        </div>
    </div>
</nav>