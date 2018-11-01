<div class="container">
    <div class="row">
        <div class="col-12">
            <div class="text-center">
                <h5><?php echo $title; ?></h5>
            </div>
        </div>
    </div>

    <?php foreach($questions as $key => $question): ?>

        <?php if($key % 2 == 0) { ?>
            <div class="row">
        <?php } ?>

        <div class="col-6">
            <div class="card text-center">
                <div class="card-header"><?php echo $question->title; ?></div>
                <div class="card-body">
                    <?php foreach($answers[$question->id] as $answer): ?>
                            <p class="card-text"><?php echo $answer->description; ?></p>
                    <?php endforeach;?>
                    <a href="<?php echo site_url('questions/'.$question->id); ?>" class="btn btn-primary">Editar Questões</a>
                </div>
            </div>
        </div>

        <?php if($key % 3 == 2) { ?>
            </div>
        <?php } ?>

    <?php endforeach;?>

    <p><a href="<?php echo site_url('questions/create'); ?>">Adicionar Questão</a></p>

</div>