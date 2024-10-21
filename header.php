<header class="section-header text-center pt-4 pb-2">
    <h1><?php echo $data['header']['title']; ?></h1>
    <p><?php echo $data['header']['subtitle']; ?></p>

    <div class="mt-3">
        <div class="row justify-content-center">
            <?php foreach ($data['badges'] as $badge): ?>
            <div class="col-6 col-sm-4 col-md-2 col-lg-1 mb-3">
                <i class="<?php echo $badge['icon']; ?> fa-2x"></i> <br />
                <span class="<?php echo $badge['class']; ?>"><?php echo $badge['text']; ?></span>
            </div>
            <?php endforeach; ?>
        </div>


    </div>
</header>