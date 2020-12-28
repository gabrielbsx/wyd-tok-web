<?= $this->extend('layouts') ?>
<?= $this->section('page') ?>
<div class="container mx-auto col-span-4 py-8 px-4">
    <div class="grid text-center">
        <span class="text-gray-300 z-0 bg-gradient-to-b from-gray-900 to-gray-800 border-t-4 border-gray-800 rounded-lg py-4 text-2xl">Notícias</span>
    </div>
    <div class="bg-black rounded-b-lg py-2">
        <?php if ($news_paginate) : ?>
            <?php foreach ($news_paginate as $key => $value) : ?>
                <div class="grid px-4 py-2">
                    <div class="inline-grid lg:flex bg-gray-800 border-b-4 border-r-4 border-gray-900 rounded-lg shadow-lg pb-6 lg:pb-0">
                        <div class="w-full lg:w-1/3 lg:p-4">
                            <img src="https://wydbr.com/wp-content/uploads/2019/11/download-1.png" alt="image" class="rounded-lg h-64 lg:h-full object-cover object-center w-full">
                        </div>
                        <div class="w-full lg:w-2/3 p-4">
                            <div class="inline-grid">
                                <a href="<?= base_url('site/news/' . $value['id']) ?>" class="work-sans font-semibold text-xl text-white"><?= $value['title'] ?></a>
                                <span class="mt-1 text-gray-400"><?= $value['created_at'] ?></span>
                                <p class="raleway text-sm my-4 text-white">
                                    <?php if (strlen($value['content']) > 50) : ?>
                                        <?= substr(strip_tags($value['content']), 0, 50) ?>...
                                    <?php else : ?>
                                        <?= $value['content'] ?>
                                    <?php endif; ?>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
            <?php if ($news_pager) : ?>
                <?= $news_pager->links('news', 'pagination') ?>
            <?php endif; ?>
        <?php else : ?>
            <div class="grid px-4 py-4">
                <div class="inline-grid text-center lg:flex bg-gray-800 border-b-4 border-r-4 border-gray-900 rounded-lg shadow-lg pb-6 lg:pb-0">
                    <div class="w-full p-4">
                        <div class="inline-grid">
                            <p class="work-sans font-semibold text-xl text-white">Não há notícias registrada</p>
                        </div>
                    </div>
                </div>
            </div>
        <?php endif; ?>
    </div>
</div>
<?= view('template/aside') ?>
<?= $this->endSection() ?>