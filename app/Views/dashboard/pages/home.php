<?= $this->extend('dashboard/layouts') ?>
<?= $this->section('page') ?>
<div class="container mx-auto col-span-6 py-8 px-4">
    <div class="grid text-center">
        <span class="text-gray-300 z-0 bg-gradient-to-b from-gray-900 to-gray-800 border-t-4 border-gray-800 rounded-lg py-4 text-2xl">Dashboard</span>
    </div>
    <div class="bg-black py-6 px-12 rounded-b-lg">
        <div class="text-white grid grid-cols-4">
            <div class="col-span-4 px-1 text-center">
                <p class="py-4 px-6 text-gray-300 rounded bg-gray-900">Seja bem-vindo <span><?= session()->get('login')['username'] ?></span></p>
            </div>
            <div class="col-span-2 px-1 text-center">
                <p class="py-4 px-6 border-b-4 border-gray-700 text-gray-300 rounded bg-black">Usuário: <span><?= session()->get('login')['username'] ?></span></p>
            </div>
            <div class="col-span-2 px-1 text-center">
                <p class="py-4 px-6 border-b-4 border-gray-700 text-gray-300 rounded bg-black">Data de criação: <span><?= session()->get('login')['created_at'] ?></span></p>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection() ?>