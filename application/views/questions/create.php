<div class="container">
    <?php echo validation_errors(); ?>

    <?php echo form_open('test/create'); ?>

        <div class="container">
            <div class="row">
                <h2><?php echo $title; ?></h2>
            </div>

            <div class="row">
                <div class="col-6">
                    <div class="form-group">
                        <label for="Tipo">Tipo de Questão</label>
                        <select class="form-control" name="id_question_type">
                        <?php foreach($question_types as $key => $question_type): ?>
                            <option value="<?= $question_type->id; ?>"><?= $question_type->type; ?></option>
                        <?php endforeach;?>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="inputEmail1">Título</label>
                        <input type="text" class="form-control" name="name" id="name">
                    </div>

                    <div class="form-group">
                        <label for="inputEmail1">Descrição</label>
                        <textarea class="form-control" rows="4" name="description" id="description"></textarea>
                    </div>

                    <div class="form-group">
                        <label for="inputEmail1">URL Video</label>
                        <input type="text" class="form-control" name="name" id="name">
                    </div>

                    <div class="form-group">
                    * Todos os testes são criados inativos por padrão. Para ativa-lo, após a criação edite o teste.
                    </div>
                    <button class="btn btn-primary" type="submit">Gravar</button>
                </div>
            </div>
        </div>
    </form>
</div>