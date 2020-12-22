<?= $this->extend('dashboard/layouts') ?>
<?= $this->section('page') ?>
<div class="container mx-auto col-span-6 py-8 px-4">
    <div class="grid text-center">
        <span class="text-gray-300 z-0 bg-gradient-to-b from-gray-900 to-gray-800 border-t-4 border-gray-800 rounded-lg py-4 text-2xl">Suporte</span>
    </div>
    <div class="bg-black py-6 px-12 rounded-b-lg">
        <div class="grid text-center mb-6">
            <a href="<?= base_url('dashboard/createticket') ?>" class="py-4 px-6 w-full text-gray-300 bg-gray-800 hover:bg-gray-700 rounded">Adicionar novo ticket</a>
        </div>
        <div class="text-white grid grid-cols-4">
            <?php if ($paginate_tickets) : ?>
                <?php foreach ($paginate_tickets as $key => $value) : ?>
                    <div class="col-span-4 grid grid-cols-8 my-2 px-1 py-4 px-6 bg-gray-800 border-b-4 border-gray-900 text-gray-300 rounded-lg bg-black">
                        <div class="col-span-5 px-1 py-2">
                            <span class="text-left"><?= $value['title'] ?></span>
                        </div>
                        <div class="col-span-1 px-1 py-2">
                            <span class="text-left">
                                <?php if ($value['updated_at']) : ?>
                                    <?= $value['updated_at'] ?>
                                <?php else : ?>
                                    <?= $value['created_at'] ?>
                                <?php endif; ?>
                            </span>
                        </div>
                        <div class="col-span-2 text-right">
                            <div class="grid grid-cols-2 text-center">
                                <a href="<?= base_url('dashboard/answerticket/' . $value['id']) ?>" class="bg-blue-700 hover:bg-blue-600 hover:border-blue-800 col-span-1 px-12 mr-2 py-2 rounded-lg border-b-4 border-blue-900">
                                    Abrir
                                </a>
                                <?php if ($value['status'] == 0) : ?>
                                    <a class="bg-yellow-700 hover:bg-yellow-600 hover:border-yellow-800 col-span-1 px-12 py-2 rounded-lg border-b-4 border-yellow-900">
                                        Pendente
                                    </a>
                                <?php else : ?>
                                    <a class="bg-red-700 hover:bg-red-600 hover:border-red-800 col-span-1 px-12 py-2 rounded-lg border-b-4 border-red-900">
                                        Encerrado
                                    </a>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            <?php else : ?>
                <div class="col-span-4 px-1 text-center">
                    <p class="py-4 px-6 bg-gray-900 border-b-4 border-gray-800 text-gray-300 rounded bg-black">
                        Não há ticket!
                    </p>
                </div>
            <?php endif; ?>
        </div>
    </div>
</div>
<?= $this->endSection() ?>