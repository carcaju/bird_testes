<?php

class QuestionType_model extends MY_Model {

    var $primary_table = 'questions';

    var $validate_field_existence = TRUE;

    var $fields = array(
        'id',
        'id_test',
        'id_question_type',
        'title',
        'description',
        'url_video',
        'status'
    );

    var $required_fields = array(
        'id_test',
        'id_question_type',
        'title',
        'description',
        'status'
    );
}