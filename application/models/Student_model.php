<?php

class Student_model extends MY_Model {

    var $primary_table = 'students';

    var $validate_field_existence = TRUE;

    var $fields = array(
        'id',
        'name',
        'email',
        'company'
    );

    var $required_fields = array(
        'name',
        'email'
    );
}