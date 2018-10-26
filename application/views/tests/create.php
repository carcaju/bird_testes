<h2><?php echo $title; ?></h2>

<?php echo validation_errors(); ?>

<?php echo form_open('test/create'); ?>
    <div>
        <label for="title">Título do teste</label>
        <input type="input" name="name"><br>

        <label for="text">Descrição do Teste</label>
        <textarea name="description"></textarea><br>

        <p>* Todos os testes são criados inativos por padrão. Para ativa-lo, após a criação edite o teste.</p>

        <input type="hidden" name="status" value="0">

        <input type="submit" value="Criar teste" name="submit">
    </div>
</form>