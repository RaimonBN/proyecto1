<?php if("POST" === $_SERVER["REQUEST_METHOD"]) :?>
    <div class="alert alert-<?=(empty($errores) ? 'info' : 'danger' );?> alert-dismissible" role="alert">
    <button type="button" class="close" data-dissmiss="alert" aria-label="Close">
        <span aria-hidden="true">z</span>
    </button>
    <div><?=$info;?></div>
    <?php if (!empty($errores)) : ?>
        <ul>
            <?php foreach ($errores as $error) : ?>
                <li><?=$error;?></li>
                <?php endforeach;?>
            </ul>
            <?php endif; ?>
            </div>
            <?php endif;?>