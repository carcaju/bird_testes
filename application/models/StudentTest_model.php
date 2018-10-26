<?php

class StudentTest_model extends MY_Model {

    var $primary_table = 'student_test';

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