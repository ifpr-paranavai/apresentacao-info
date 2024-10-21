<header class="section-header text-center py-4">
    <h1><?php echo $data['header']['title']; ?></h1>
    <p><?php echo $data['header']['subtitle']; ?></p>

    <div class="mt-3">
        <div class="row">
            <div class="col-md-1">
                <i class="fa-solid fa-book"></i> <br />
                <span class="sr-only">Prepara Para o mercado de trabalho</span>
            </div>
        </div>
        <?php foreach ($data['badges'] as $badge): ?>
        <span class="<?php echo $badge['class']; ?>"><?php echo $badge['text']; ?></span>
        <?php endforeach; ?>
    </div>
</header>