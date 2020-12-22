<?= $this->extend('dashboard/layouts') ?>
<?= $this->section('page') ?>
<div class="container mx-auto col-span-6 py-8 px-4">
    <?php if (isset($ticket)) : ?>
        <div class="grid text-gray-300 text-center bg-gradient-to-b from-gray-900 to-gray-800 border-t-4 border-gray-800 rounded-lg py-4">
            <span class="z-0 text-2xl">
                <?= $ticket['title'] ?>
            </span>
            <div class="text-white text-xs place-items-center">
                <?= $ticket['username'] ?>
            </div>
        </div>
        <div class="bg-black rounded-b-lg">
            <div class="px-24 py-12 text-white place-items-center">
                <?= $ticket['content'] ?>
            </div>
        </div>
        <?php if ($answers_paginate) : ?>
            <?php foreach ($answers_paginate as $key => $value) : ?>
                <div class="my-4">
                    <div class="grid text-gray-300 text-center bg-gradient-to-b from-gray-900 to-gray-800 border-t-4 border-gray-800 rounded-lg py-4">
                        <span class="z-0 text-2xl">
                            Resposta
                        </span>
                        <div class="text-white text-xs place-items-center">
                            <?= $value['access'] == 3 ? 'Administração' : $value['username'] ?>
                        </div>
                    </div>
                    <div class="bg-black rounded-b-lg">
                        <div class="px-24 py-12 text-white place-items-center">
                            <?= $value['content'] ?>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
            <?php if (isset($answers_pager)) : ?>
                <?= $answers_pager->links('answers', 'pagination') ?>
            <?php endif; ?>
        <?php else : ?>
            <div class="my-4">
                <div class="bg-gradient-to-r from-gray-800 via-gray-900 to-gray-800 border-b-2 border-t-2 border-gray-800 rounded-lg text-center">
                    <div class="px-24 py-12 text-white place-items-center">
                        Não há resposta(s)
                    </div>
                </div>
            </div>
        <?php endif; ?>
        <div class="my-4">
            <div class="bg-black rounded-lg text-center">
                <div class="<?= $ticket['status'] == 0 ? 'px-24 py-12 text-white place-items-center' : '' ?>">
                    <?php if ($ticket['status'] == 0) : ?>
                        <form action="<?= base_url('auth/answerticket') ?>" method="POST">
                            <textarea name="content" class="editor"></textarea>
                            <input type="hidden" name="id_ticket" value="<?= $ticket['id'] ?>">
                            <?php if (isset($recaptcha)) : ?>
                                <div class="g-recaptcha" data-sitekey="<?= $recaptcha ?>"></div>
                            <?php endif; ?>
                            <button type="submit" class="w-full py-3 mt-4 font-medium tracking-widest text-white uppercase bg-gray-800 rounded border-b-4 border-gray-700 shadow-lg focus:outline-none hover:bg-gray-900 hover:shadow-none">
                                Responder ticket
                            </button>
                        </form>
                        <form class="mb-8" action="<?= base_url('auth/closeticket') ?>" method="POST">
                            <input type="hidden" name="id_ticket" value="<?= $ticket['id'] ?>">
                            <button type="submit" class="block text-center w-full py-3 mt-4 font-medium tracking-widest text-white uppercase bg-red-900 rounded border-b-4 border-red-600 shadow-lg focus:outline-none hover:bg-red-800 hover:border-red-500 hover:shadow-none">
                                Encerrar ticket
                            </button>
                        </form>
                    <?php endif; ?>
                    <a href="<?= base_url('dashboard/tickets') ?>" class="block text-center w-full py-3 font-medium tracking-widest text-white uppercase bg-gray-900 rounded border-b-4 border-gray-800 shadow-lg focus:outline-none hover:bg-gray-800 hover:border-gray-700 hover:shadow-none">
                        Voltar
                    </a>
                </div>
            </div>
        </div>
    <?php else : ?>
        <div class="grid text-center">
            <span class="text-gray-300 z-0 bg-gradient-to-b from-gray-900 to-gray-800 border-t-4 border-gray-800 rounded-lg py-4 text-2xl">Ticket</span>
        </div>
        <div class="bg-black rounded-b-lg">
            <div class="px-48 py-12 text-center text-white place-items-center">
                Ticket inexistente
            </div>
        </div>
    <?php endif; ?>
</div>
<?= $this->endSection() ?>