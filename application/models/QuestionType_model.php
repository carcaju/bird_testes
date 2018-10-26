<?php

class QuestionType_model extends MY_Model {

    var $primary_table = 'question_type';

    var $validate_field_existence = TRUE;

    var $fields = array(
        'id',
        'type'
    );

    var $required_fields = array(
        'type'
    );
}