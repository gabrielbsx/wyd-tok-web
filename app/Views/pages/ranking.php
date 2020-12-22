<?= $this->extend('layouts') ?>
<?= $this->section('page') ?>
<div class="container mx-auto col-span-6 py-8 px-4">
    <div class="grid text-center">
        <span class="text-gray-300 z-0 bg-gradient-to-b from-gray-900 to-gray-800 border-t-4 border-gray-800 rounded-lg py-4 text-2xl">Ranking</span>
    </div>
    <div class="bg-black rounded-b-lg">

        <div class="px-48 py-12 place-items-center">

            <div class="mx-auto px-4 sm:px-8">
                <div class="-mx-4 sm:-mx-8 px-4 sm:px-8 py-4 overflow-x-auto">
                    <div class="inline-block min-w-full shadow rounded-lg overflow-hidden">
                        <table class="min-w-full leading-normal">
                            <thead>
                                <tr>
                                    <th class="px-5 py-6 border-b-4 border-gray-900 bg-gray-800 text-left text-xs font-semibold text-gray-100 uppercase tracking-wider">
                                        Player
                                    </th>
                                    <th class="px-5 py-6 border-b-4 border-gray-900 bg-gray-800 text-left text-xs font-semibold text-gray-100 uppercase tracking-wider">
                                        Level
                                    </th>
                                    <th class="px-5 py-6 border-b-4 border-gray-900 bg-gray-800 text-left text-xs font-semibold text-gray-100 uppercase tracking-wider">
                                        Classe
                                    </th>
                                    <th class="px-5 py-6 border-b-4 border-gray-900 bg-gray-800 text-left text-xs font-semibold text-gray-100 uppercase tracking-wider">
                                        Evolução
                                    </th>
                                    <th class="px-5 py-6 border-b-4 border-gray-900 bg-gray-800 text-left text-xs font-semibold text-gray-100 uppercase tracking-wider">
                                        Guild
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="px-5 py-5 border-b-4 border-gray-500 bg-gray-700 text-sm">
                                        <p class="text-gray-200 whitespace-no-wrap">
                                            Vera Carpenter
                                        </p>
                                    </td>
                                    <td class="px-5 py-5 border-b-4 border-gray-500 bg-gray-700 text-sm">
                                        <p class="text-gray-200 whitespace-no-wrap">
                                            200
                                        </p>
                                    </td>
                                    <td class="px-5 py-5 border-b-4 border-gray-500 bg-gray-700 text-sm">
                                        <p class="text-gray-200 whitespace-no-wrap">
                                            Foema
                                        </p>
                                    </td>
                                    <td class="px-5 py-5 border-b-4 border-gray-500 bg-gray-700 text-sm">
                                        <p class="text-gray-200 whitespace-no-wrap">
                                            Mortal
                                        </p>
                                    </td>
                                    <td class="px-5 py-5 border-b-4 border-gray-500 bg-gray-700 text-sm">
                                        <p class="text-gray-200 whitespace-no-wrap">
                                            Mortal
                                        </p>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

        </div>

    </div>
</div>
<?= $this->endSection() ?>