<div class="container">
    <div class="row">
        <div class="col-12">
            <div class="text-center">
                <h5><?php echo $title; ?></h5>
            </div>
        </div>
    </div>

    <?php foreach($tests as $key => $test): ?>

        <?php if($key % 3 == 0) { ?>
            <div class="row">
        <?php } ?>

        <div class="col-4">
            <div class="card text-center">
                <div class="card-header"><?php echo $test->name; ?></div>
                <div class="card-body">
                    <p class="card-text"><?php echo $test->description; ?></p>
                    <a href="<?php echo site_url('tests/'.$test->id); ?>" class="btn btn-primary">Ver Teste</a>
                </div>
            </div>
        </div>

        <?php if($key % 3 == 2) { ?>
            </div>
        <?php } ?>

    <?php endforeach;?>

    <p><a href="<?php echo site_url('tests/create'); ?>">Adicionar Teste</a></p>

</div>