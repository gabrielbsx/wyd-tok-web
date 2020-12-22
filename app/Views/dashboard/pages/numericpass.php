<?= $this->extend('dashboard/layouts') ?>
<?= $this->section('page') ?>
<div class="container mx-auto col-span-6 py-8 px-4">
    <div class="grid text-center">
        <span class="text-gray-300 z-0 bg-gradient-to-b from-gray-900 to-gray-800 border-t-4 border-gray-800 rounded-lg py-4 text-2xl">Recuperar numérica</span>
    </div>
    <div class="bg-black py-6 px-12 rounded-b-lg">
        <div class="text-white text-center place-items-center px-72">
            <form method="POST" action="<?= base_url('auth/numericpass') ?>" class="mt-6">
                <?php if (isset($recaptcha)) : ?>
                    <div class="g-recaptcha" data-sitekey="<?= $recaptcha ?>"></div>
                <?php endif; ?>
                <button type="submit" class="w-full py-3 font-medium tracking-widest text-white uppercase bg-gray-800 rounded border-b-4 border-gray-700 shadow-lg focus:outline-none hover:bg-gray-900 hover:shadow-none">
                    Recuperar numérica
                </button>
            </form>
        </div>
    </div>
</div>
<?= $this->endSection() ?>