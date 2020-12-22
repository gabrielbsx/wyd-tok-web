<?php if (isset(session('web')['error'])) : ?>
    <div class="mx-6 mt-6 message col-span-6 py-4 text-center text-white rounded-lg border-b-4 border-red-600 bg-red-800">
        <?= session('web')['error'] ?>
    </div>
<?php endif; ?>

<?php if (isset(session('web')['success'])) : ?>
    <div class="mx-6 mt-6 message col-span-6 py-4 text-center text-white rounded-lg border-b-4 border-green-600 bg-green-800">
        <?= session('web')['success'] ?>
    </div>
<?php endif; ?>