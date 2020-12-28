<?= $this->extend('dashboard/layouts') ?>
<?= $this->section('page') ?>
<div class="container mx-auto col-span-6 py-8 px-4">
    <?php if (isset($package)) : ?>
        <form action="<?= base_url('auth/editpackage') ?>" method="POST">
            <div class="grid text-gray-300 text-center bg-gradient-to-b from-gray-900 to-gray-800 border-t-4 border-gray-800 rounded-lg py-4">
                <span class="z-0 text-2xl bg-transparent text-center">Editor de pacotes</span>
            </div>
            <div class="bg-black rounded-b-lg">
                <div class="px-24 py-12 text-white place-items-center">
                    <label for="name" class="block mt-2 text-xs font-semibold text-gray-400 uppercase">Nome</label>
                    <input id="name" type="text" name="name" value="<?= $package['name'] ?>" class="mb-4 block rounded w-full p-3 mt-2 text-gray-200 bg-gray-800 appearance-none focus:outline-none focus:bg-gray-900 focus:shadow-inner" required />

                    <label for="value" class="block mt-2 text-xs font-semibold text-gray-400 uppercase">Valor de doação</label>
                    <input id="value" type="number" name="value" value="<?= $package['value'] ?>" class="mb-4 block rounded w-full p-3 mt-2 text-gray-200 bg-gray-800 appearance-none focus:outline-none focus:bg-gray-900 focus:shadow-inner" required />

                    <label for="donate" class="block mt-2 text-xs font-semibold text-gray-400 uppercase">Quantidade de donate</label>
                    <input id="donate" type="number" name="donate" value="<?= $package['donate'] ?>" class="mb-4 block rounded w-full p-3 mt-2 text-gray-200 bg-gray-800 appearance-none focus:outline-none focus:bg-gray-900 focus:shadow-inner" required />

                    <label for="bonus" class="block mt-2 text-xs font-semibold text-gray-400 uppercase">Bônus</label>
                    <input id="bonus" type="number" name="bonus" value="<?= $package['bonus'] ?>" class="mb-4 block rounded w-full p-3 mt-2 text-gray-200 bg-gray-800 appearance-none focus:outline-none focus:bg-gray-900 focus:shadow-inner" required />

                    <input type="hidden" name="id" value="<?= $package['id'] ?>">
                    <?php if (isset($recaptcha)) : ?>
                        <div class="g-recaptcha" data-sitekey="<?= $recaptcha ?>"></div>
                    <?php endif; ?>
                    <button type="submit" class="w-full py-3 mt-6 font-medium tracking-widest text-white uppercase bg-gray-800 rounded border-b-4 border-gray-700 shadow-lg focus:outline-none hover:bg-gray-900 hover:shadow-none">
                        Editar
                    </button>
                    <a href="<?= base_url('admin/donate') ?>" class="block text-center w-full py-3 mt-6 font-medium tracking-widest text-white uppercase bg-gray-900 rounded border-b-4 border-gray-800 shadow-lg focus:outline-none hover:bg-gray-800 hover:border-gray-700 hover:shadow-none">
                        Voltar
                    </a>
                </div>
            </div>
        </form>
    <?php else : ?>
        <div class="grid text-center">
            <span class="text-gray-300 z-0 bg-gradient-to-b from-gray-900 to-gray-800 border-t-4 border-gray-800 rounded-lg py-4 text-2xl">Pacotes de doação</span>
        </div>
        <div class="bg-black rounded-b-lg">
            <div class="px-48 py-12 text-center text-white place-items-center">
                Pacote inexistente
            </div>
        </div>
    <?php endif; ?>
</div>
<?= $this->endSection() ?>