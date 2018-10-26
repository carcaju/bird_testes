<?php

class AnswerStudent_model extends MY_Model {

    var $primary_table = 'answer_student';

    var $validate_field_existence = TRUE;

    var $fields = array(
        'id',
        'id_student_test',
        'id_question'
    );

    var $required_fields = array(
        'id_student_test',
        'id_question'
    );
}