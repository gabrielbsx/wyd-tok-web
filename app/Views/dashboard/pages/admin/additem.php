<?= $this->extend('dashboard/layouts') ?>
<?= $this->section('page') ?>
<div class="container mx-auto col-span-6 py-8 px-4">
    <div class="grid text-center">
        <span class="text-gray-300 z-0 bg-gradient-to-b from-gray-900 to-gray-800 border-t-4 border-gray-800 rounded-lg py-4 text-2xl">Adicionar item ao pacote</span>
    </div>
    <div class="bg-black rounded-b-lg">
        <div class="px-72 py-12 place-items-center">
            <form method="POST" action="<?= base_url('auth/additem') ?>" class="mt-6">
                <label for="itemcode" class="block mt-2 text-xs font-semibold text-gray-400 uppercase">Código do item</label>
                <input id="itemcode" type="text" name="itemcode" placeholder="Código do item" class="mb-4 block rounded w-full p-3 mt-2 text-gray-200 bg-gray-800 appearance-none focus:outline-none focus:bg-gray-900 focus:shadow-inner" required />
                <label for="itemname" class="block mt-2 text-xs font-semibold text-gray-400 uppercase">Nome do item</label>
                <input id="itemname" type="text" name="itemname" placeholder="Nome do item" class="mb-4 block rounded w-full p-3 mt-2 text-gray-200 bg-gray-800 appearance-none focus:outline-none focus:bg-gray-900 focus:shadow-inner" required />
                <input type="hidden" name="id_donate" value="<?= $id ?>">
                <?php if (isset($recaptcha)) : ?>
                    <div class="g-recaptcha" data-sitekey="<?= $recaptcha ?>"></div>
                <?php endif; ?>
                <button type="submit" class="w-full py-3 mt-6 font-medium tracking-widest text-white uppercase bg-gray-800 rounded border-b-4 border-gray-700 shadow-lg focus:outline-none hover:bg-gray-900 hover:shadow-none">
                    Adicionar item
                </button>
                <a href="<?= base_url('admin/donate') ?>" class="block text-center w-full py-3 mt-6 font-medium tracking-widest text-white uppercase bg-gray-900 rounded border-b-4 border-gray-800 shadow-lg focus:outline-none hover:bg-gray-800 hover:border-gray-700 hover:shadow-none">
                    Voltar
                </a>
            </form>
        </div>
    </div>
</div>
<?= $this->endSection() ?>