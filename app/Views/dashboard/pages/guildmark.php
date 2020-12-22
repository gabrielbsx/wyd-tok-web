<?= $this->extend('dashboard/layouts') ?>
<?= $this->section('page') ?>
<div class="container mx-auto col-span-6 py-8 px-4">
    <div class="grid text-center">
        <span class="text-gray-300 z-0 bg-gradient-to-b from-gray-900 to-gray-800 border-t-4 border-gray-800 rounded-lg py-4 text-2xl">Guildmark</span>
    </div>
    <div class="bg-black py-6 px-12 rounded-b-lg">
        <div class="text-white text-center place-items-center px-72">
            <form enctype="multipart/form-data" method="POST" action="<?= base_url('auth/guildmark') ?>" class="mt-6">
                <div class="guildmarks py-3 text-gray-600 bg-gray-900 mb-4 text-center rounded-lg">
                    <div class="py-3 mx-4 text-gray-300 bg-gray-800 mb-4 text-center rounded-lg">
                        Guild's permitidas!
                    </div>
                    <div>
                        <select class="guilds py-2 px-48 form-select text-gray-600 bg-gray-800 mb-4 text-center rounded-lg" name="guildid" required>
                        </select>
                    </div>
                    <div class="flex w-full items-center justify-center bg-grey-lighter">
                        <label class="w-64 flex flex-col items-center px-4 py-2 bg-gray-800 text-blue rounded-lg uppercase cursor-pointer hover:bg-gray-700 hover:text-gray-200">
                            <div class="flex">
                                <svg class="w-8 h-8" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                    <path d="M16.88 9.1A4 4 0 0 1 16 17H5a5 5 0 0 1-1-9.9V7a3 3 0 0 1 4.52-2.59A4.98 4.98 0 0 1 17 8c0 .38-.04.74-.12 1.1zM11 11h3l-4-4-4 4h3v3h2v-3z" />
                                </svg>
                                <span class="mt-1 ml-3">Guildmark</span>
                            </div>
                            <input class="hidden" type="file" accept="image/bmp" name="guildmark" required>
                        </label>
                    </div>
                </div>
                <?php if (isset($recaptcha)) : ?>
                    <div class="g-recaptcha" data-sitekey="<?= $recaptcha ?>"></div>
                <?php endif; ?>
                <button type="submit" class="send w-full py-3 font-medium tracking-widest text-white uppercase bg-gray-800 rounded border-b-4 border-gray-700 shadow-lg focus:outline-none hover:bg-gray-900 hover:shadow-none">
                    Enviar guildmark
                </button>
            </form>
        </div>
    </div>
</div>
<?= $this->endSection() ?>