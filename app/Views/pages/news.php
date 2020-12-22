<?= $this->extend('layouts') ?>
<?= $this->section('page') ?>
<div class="container mx-auto col-span-6 py-8 px-4">
    <?php if (isset($news)) : ?>
        <div class="grid text-gray-300 text-center bg-gradient-to-b from-gray-900 to-gray-800 border-t-4 border-gray-800 rounded-lg py-4">
            <span class="z-0 text-2xl">
                <?= $news['title'] ?>
            </span>
            <div class="text-white text-xs place-items-center">
                <?= $news['created_at'] ?>
            </div>
        </div>
        <div class="bg-black rounded-b-lg">
            <div class="px-24 py-12 text-white place-items-center">
                <?= $news['content'] ?>
            </div>
        </div>
    <?php else : ?>
        <div class="grid text-center">
            <span class="text-gray-300 z-0 bg-gradient-to-b from-gray-900 to-gray-800 border-t-4 border-gray-800 rounded-lg py-4 text-2xl">Notícias</span>
        </div>
        <div class="bg-black rounded-b-lg">
            <div class="px-48 py-12 text-center text-white place-items-center">
                Notícia inexistente
            </div>
        </div>
    <?php endif; ?>
</div>
<?= $this->endSection() ?>