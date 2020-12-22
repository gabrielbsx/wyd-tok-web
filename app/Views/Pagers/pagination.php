<?php

/**
 * @var \CodeIgniter\Pager\PagerRenderer $pager
 */

$pager->setSurroundCount(2);

?>
<div class="flex" aria-label="<?= lang('Pager.pageNavigation') ?>">
    <ul class="mx-auto flex">
        <?php if ($pager->hasPrevious()) : ?>
            <li>
                <a href="<?= $pager->getPrevious() ?>" aria-label="<?= lang('Pager.previous') ?>" class="flex items-center font-bold mx-1 px-3 py-2 bg-gradient-to-b from-gray-700 to-gray-800 border-b-4 border-gray-600 hover:bg-gradient-to-t hover:from-gray-800 hover:to-gray-700 text-gray-100 rounded-lg">
                    <span>«</span>
                </a>
            </li>
        <?php endif ?>

        <?php foreach ($pager->links() as $link) : ?>
            <li>
                <a href="<?= $link['uri'] ?>" class="flex items-center font-bold mx-1 px-3 py-2 text-gray-100 rounded-lg <?= $link['active'] ? 'bg-gradient-to-b from-gray-500 to-gray-600 border-b-4 border-gray-400 hover:bg-gradient-to-t hover:from-gray-600 hover:to-gray-500' : 'bg-gradient-to-b from-gray-700 to-gray-800 border-b-4 border-gray-600 hover:bg-gradient-to-t hover:from-gray-800 hover:to-gray-700' ?>">
                    <?= $link['title'] ?>
                </a>
            </li>
        <?php endforeach ?>

        <?php if ($pager->hasNext()) : ?>
            <li>
                <a href="<?= $pager->getNext() ?>" aria-label="<?= lang('Pager.next') ?>" class="flex items-center font-bold mx-1 px-3 py-2 bg-gradient-to-b from-gray-700 to-gray-800 border-b-4 border-gray-600 hover:bg-gradient-to-t hover:from-gray-800 hover:to-gray-700 text-gray-100 rounded-lg">
                    <span aria-hidden="true">»</span>
                </a>
            </li>
        <?php endif ?>
    </ul>
</div>