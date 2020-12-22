<?= $this->extend('dashboard/layouts') ?>
<?= $this->section('page') ?>
<div class="container mx-auto col-span-6 py-8 px-4">
    <div class="grid text-center">
        <span class="text-gray-300 z-0 bg-gradient-to-b from-gray-900 to-gray-800 border-t-4 border-gray-800 rounded-lg py-4 text-2xl">Alteração de senha</span>
    </div>
    <div class="bg-black py-6 px-12 rounded-b-lg">
        <div class="text-white text-center place-items-center px-72">
            <form method="POST" action="<?= base_url('auth/alterpass') ?>" class="mt-6">
                <label for="oldpassword" class="block mt-2 text-xs font-semibold text-gray-400 uppercase">Senha atual</label>
                <input id="oldpassword" type="password" name="oldpassword" placeholder="********" autocomplete="new-password" class="block rounded w-full p-3 mt-2 text-gray-200 bg-gray-800 appearance-none focus:outline-none focus:bg-gray-900 focus:shadow-inner" required />
                <label for="password" class="block mt-2 text-xs font-semibold text-gray-400 uppercase">Nova senha</label>
                <input id="password" type="password" name="password" placeholder="********" autocomplete="new-password" class="block rounded w-full p-3 mt-2 text-gray-200 bg-gray-800 appearance-none focus:outline-none focus:bg-gray-900 focus:shadow-inner" required />
                <label for="password-confirm" class="block mt-2 text-xs font-semibold text-gray-400 uppercase">Confirmar nova senha</label>
                <input id="password-confirm" type="password" name="password_confirm" placeholder="********" autocomplete="new-password" class="block rounded w-full p-3 mt-2 text-gray-200 bg-gray-800 appearance-none focus:outline-none focus:bg-gray-900 focus:shadow-inner" required />
                <?php if (isset($recaptcha)) : ?>
                    <div class="g-recaptcha" data-sitekey="<?= $recaptcha ?>"></div>
                <?php endif; ?>
                <button type="submit" class="w-full py-3 mt-6 font-medium tracking-widest text-white uppercase bg-gray-800 rounded border-b-4 border-gray-700 shadow-lg focus:outline-none hover:bg-gray-900 hover:shadow-none">
                    Efetuar cadastro
                </button>
            </form>
        </div>
    </div>
</div>
<?= $this->endSection() ?>