<header class="section-header text-center py-4">
    <h1><?php echo $data['header']['title']; ?></h1>
    <p><?php echo $data['header']['subtitle']; ?></p>

    <div class="mt-3">
        <div class="row">

            <?php foreach ($data['badges'] as $badge): ?>
            <div class="col-md-1">
                <i class="<?php echo $badge['icon']; ?> fa-2x"></i> <br />
                <span class="<?php echo $badge['class']; ?>"><?php echo $badge['text']; ?></span>
            </div>
            <?php endforeach; ?>
        </div>


    </div>
</header>