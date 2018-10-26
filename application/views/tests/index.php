<h2><?php echo $title; ?></h2>

<?php foreach($tests as $test): ?>

    <h3><?php echo $test->name; ?></h3>
    <div class="main">
        <?php echo word_limiter($test->description,15); ?>
    </div>
    <p><a href="<?php echo site_url('tests/'.$test->id); ?>">Ver Teste</a></p>
<?php endforeach;?>

<p><a href="<?php echo site_url('tests/create'); ?>">Adicionar Teste</a></p>