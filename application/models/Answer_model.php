<?php

class Answer_model extends MY_Model {

    var $primary_table = 'answers';

    var $validate_field_existence = TRUE;

    var $fields = array(
        'id',
        'id_test',
        'id_question',
        'description',
        'is_correct',
        'weight'
    );

    var $required_fields = array(
        'id_test',
        'id_question',
        'description',
        'is_correct'
    );
}