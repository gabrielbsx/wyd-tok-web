<?php if (isset(session('web')['error'])) : ?>
    <div class="panel-body">
        <div class="table-wrapper">
            <div class="table-scroll-container scrollbar-inner">
                <div class="fast-links" style="text-align:center;padding:15px;background-color: rgba(155, 25, 25, 0.3);">
                    <h5 style="padding:0;margin:0;color:white;">
                        <?= session('web')['error'] ?>
                    </h5>
                </div>
            </div>
        </div>
    </div>
<?php endif; ?>

<?php if (isset(session('web')['success'])) : ?>
    <div class="panel-body">
        <div class="table-wrapper">
            <div class="table-scroll-container scrollbar-inner">
                <div class="fast-links" style="text-align:center;padding:15px;background-color: rgba(25, 155, 25, 0.3);">
                    <h5 style="padding:0;margin:0;color:white;">
                        <?= session('web')['success'] ?>
                    </h5>
                </div>
            </div>
        </div>
    </div>
<?php endif; ?>