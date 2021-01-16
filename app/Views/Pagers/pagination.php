<?php

/**
 * @var \CodeIgniter\Pager\PagerRenderer $pager
 */

$pager->setSurroundCount(2);

?>
<div class="page_navigator">
    <div id="pager" class="clearfix">
        <ul>
            <?php if ($pager->hasPrevious()) : ?>
                <li>
                    <a class="page_unactive all" data-bind="2" data-servername="all" aria-label="<?= lang('Pager.previous') ?>" href="<?= $pager->getPrevious() ?>">
                        << </a>
                </li>
            <?php endif; ?>
            <?php foreach ($pager->links() as $link) : ?>
                <li class="<?= $link['active'] ? 'current' : '' ?>">
                    <a class="<?= $link['active'] ? '' : 'page_unactive' ?> all" data-bind="2" data-servername="all" href="<?= $link['uri'] ?>">
                        <?= $link['title'] ?>
                    </a>
                </li>
            <?php endforeach; ?>
            <?php if ($pager->hasNext()) : ?>
                <a class="page_unactive all" data-bind="2" data-servername="all" aria-label="<?= lang('Pager.next') ?>" href="<?= $pager->getNext() ?>"> >> </a>
            <?php endif; ?>
        </ul>
    </div>
</div>