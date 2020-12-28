<?= $this->extend('dashboard/layouts') ?>
<?= $this->section('page') ?>
<div class="container mx-auto col-span-6 py-8 px-4">
    <div class="grid text-center">
        <span class="text-gray-300 z-0 bg-gradient-to-b from-gray-900 to-gray-800 border-t-4 border-gray-800 rounded-lg py-4 text-2xl">Doações</span>
    </div>
    <div class="bg-black py-6 px-12 rounded-b-lg">
        <div class="grid text-center">
            <span class="title col text-center text-white py-4 bg-gray-800 rounded-lg">
                Doações efetuadas
            </span>
        </div>
        <div class="text-white grid grid-cols-4 bg-gray-900 py-4 mb-3 px-3 rounded-b-lg -my-2">
            <?php if ($donate_paginate) : ?>
                <?php foreach ($donate_paginate as $key => $value) : ?>
                    <div class="col-span-4 grid grid-cols-8 my-1 px-1 py-4 px-6 bg-gray-800 border-b-4 border-gray-900 text-gray-300 rounded-lg bg-black">
                        <div class="col-span-5 px-1 py-2">
                            <span class="text-left">
                                <span class="text-left">
                                    R$ <?= $value['value'] ?>,00
                                </span>
                            </span>
                        </div>
                        <div class="col-span-2 px-1 py-2">
                            <span class="text-left">
                                <?= $value['update_at'] ?? $value['created_at'] ?>
                            </span>
                        </div>
                        <div class="col-span-1 py-2 text-right">
                            <span class="col-span-1 px-12 py-2 rounded-lg border-b-4 <?= $value['status'] ? 'bg-green-700 hover:bg-green-600 hover:border-green-800 border-green-900' : 'bg-yellow-700 hover:bg-yellow-600 hover:border-yellow-800 border-yellow-900' ?>">
                                <?= $value['status'] ? 'Pago' : 'Pendente' ?>
                            </span>
                        </div>
                    </div>
                <?php endforeach; ?>
                <?php if ($donate_pager) : ?>
                    <?= $donate_pager->links('donate', 'pagination') ?>
                <?php endif; ?>
            <?php else : ?>
                <div class="col-span-4 px-1 text-center">
                    <p class="py-4 px-6 bg-gray-900 border-b-4 border-gray-800 text-gray-300 rounded bg-black">
                        Não há doação efetuada
                    </p>
                </div>
            <?php endif; ?>
        </div>
        <div class="col-span-4 grid grid-cols-8 my-2 px-1 py-4 px-6 bg-gray-800 border-b-4 border-gray-900 text-gray-300 rounded-lg bg-black">
            <div class="col-span-8 px-1 py-2 justify-center flex place-items-center">
                <!--<form method="POST" action="<?= base_url('auth/donation') ?>">
                    <div>
                        <label for="method" class="block text-xs font-semibold text-gray-400 uppercase mb-2">Método</label>
                        <select id="method" class="py-2 px-48 form-select text-gray-600 bg-gray-900 mb-4 text-center rounded-lg" name="method" required>
                            <option value="1">Mercadopago</option>
                            <option value="2">Picpay</option>
                        </select>
                    </div>
                    <label for="value" class="block text-xs font-semibold text-gray-400 uppercase">Valor</label>
                    <input id="value" type="number" value="1" name="value" class="block rounded w-full p-3 mt-2 text-gray-200 bg-gray-900 appearance-none focus:outline-none focus:bg-gray-700 focus:shadow-inner" required />

                    <?php if (isset($recaptcha)) : ?>
                        <div class="g-recaptcha" data-sitekey="<?= $recaptcha ?>"></div>
                    <?php endif; ?>
                    <button type="submit" class="w-full py-3 mt-6 font-medium tracking-widest text-white uppercase bg-gray-900 rounded border-b-4 border-gray-700 shadow-lg focus:outline-none hover:bg-gray-700 hover:shadow-none">
                        Gerar doação
                    </button>
                </form>-->

                <?php if ($package_paginate) : ?>
                    <div class="grid grid-cols-4 justify-center items-center">
                        <?php foreach ($package_paginate as $key => $value) : ?>
                            <div class="grid-span-2 mx-auto w-full p-4">
                                <div class="text-center bg-black py-6 shadow">
                                    <p class="uppercase text-gray-300 font-bold"><?= $value['name'] ?></p>
                                </div>
                                <div class="justify-center p-4 bg-gray-900 border border-r-4 border-l-4 border-gray-800">
                                    <div class="text-center flex justify-center">
                                        <img src="https://s3.amazonaws.com/preview.thegamecrafter.com/7C2E1DC8-245A-11EA-AA99-974C4E5FF538.png" class="w-3/5" />
                                    </div>
                                    <p class="text-center bg-black py-2 font-bold text-1xl rounded-lg">
                                        <?= $value['value'] ?> + <?= $value['bonus'] ?>% = <?= $value['value'] + ($value['value'] * ($value['bonus'] / 100)) ?> donate
                                    </p>
                                    <div class="flex justify-center grid text-center mt-4 items-center text-gray-900">
                                        <p class="font-bold text-xl mb-4 bg-black rounded-lg py-2">R$<?= $value['value'] ?></p>
                                        <button class="px-6 py-2 text-center bg-green-900 text-gray-200 uppercase rounded-full hover:bg-gray-800 hover:text-white border-2 border-gray-900 focus:outline-none">
                                            Mercadopago
                                        </button>
                                        <button class="px-6 py-2 text-center bg-green-900 text-gray-200 uppercase rounded-full hover:bg-gray-800 hover:text-white border-2 border-gray-900 focus:outline-none">
                                            Picpay
                                        </button>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                <?php else : ?>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection() ?>