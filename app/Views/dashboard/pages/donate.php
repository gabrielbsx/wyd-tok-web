<?= $this->extend('dashboard/layouts') ?>
<?= $this->section('page') ?>
<div class="container mx-auto col-span-6 py-8 px-4">
    <div class="grid text-center">
        <span class="text-gray-300 z-0 bg-gradient-to-b from-gray-900 to-gray-800 border-t-4 border-gray-800 rounded-lg py-4 text-2xl">Doação</span>
    </div>
    <div class="bg-black p-8 rounded-b-lg">
        <div class="text-white text-center place-items-center">
            <div x-data="{ tab: 'terms' }">
                <div class="mb-6">
                    <div class="py-8 bg-gray-900 rounded-lg w-full">
                        Escrever os termos aqui
                    </div>
                </div>
                <div>
                    <a href="<?= base_url('dashboard/donation') ?>" class="bg-blue-600 text-gray-200 rounded hover:bg-blue-500 px-4 py-3 text-sm focus:outline-none mr-4">Concordo com os termos</a>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection() ?>