<?= $this->extend('layouts') ?>
<?= $this->section('page') ?>
<div class="container mx-auto col-span-6 py-8 px-4">
    <div class="grid text-center">
        <span class="text-gray-300 z-0 bg-gradient-to-b from-gray-900 to-gray-800 border-t-4 border-gray-800 rounded-lg py-4 text-2xl">Cadastro</span>
    </div>
    <div class="bg-black rounded-b-lg">
        <div class="px-24 py-12 place-items-center">
            <form method="POST" action="<?= base_url('auth/register') ?>" class="mt-6">
                <label for="username" class="block text-xs font-semibold text-gray-400 uppercase">Usuário</label>
                <input id="username" pattern="[0-9A-Za-z]{4,12}" title="Apenas de 4 a 12 caracteres alfa numéricos" type="text" name="username" placeholder="kentaro" autocomplete="given-name" class="block rounded w-full p-3 mt-2 text-gray-200 bg-gray-800 appearance-none focus:outline-none focus:bg-gray-700 focus:shadow-inner" required />
                <label for="email" class="block mt-2 text-xs font-semibold text-gray-400 uppercase">E-mail</label>
                <input id="email" type="email" name="email" placeholder="kentaro@gmail.com" autocomplete="email" class="block rounded w-full p-3 mt-2 text-gray-200 bg-gray-800 appearance-none focus:outline-none focus:bg-gray-700 focus:shadow-inner" required />
                <label for="password" class="block mt-2 text-xs font-semibold text-gray-400 uppercase">Senha</label>
                <input id="password" type="password" name="password" placeholder="********" autocomplete="new-password" class="block rounded w-full p-3 mt-2 text-gray-200 bg-gray-800 appearance-none focus:outline-none focus:bg-gray-700 focus:shadow-inner" required />
                <label for="password-confirm" class="block mt-2 text-xs font-semibold text-gray-400 uppercase">Confirmar senha</label>
                <input id="password-confirm" type="password" name="password_confirm" placeholder="********" autocomplete="new-password" class="block rounded w-full p-3 mt-2 text-gray-200 bg-gray-800 appearance-none focus:outline-none focus:bg-gray-700 focus:shadow-inner" required />
                <?php if (isset($recaptcha)) : ?>
                    <div class="g-recaptcha" data-sitekey="<?= $recaptcha ?>"></div>
                <?php endif; ?>
                <button type="submit" class="w-full py-3 mt-6 font-medium tracking-widest text-white uppercase bg-gray-800 rounded border-b-4 border-gray-700 shadow-lg focus:outline-none hover:bg-gray-700 hover:shadow-none">
                    Efetuar cadastro
                </button>
            </form>
        </div>
    </div>
</div>
<?= $this->endSection() ?>