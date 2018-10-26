<?php

class Test_model extends MY_Model {

    var $primary_table = 'tests';

    var $validate_field_existence = TRUE;

    var $fields = array(
        'id',
        'id_user',
        'name',
        'description',
        'status'
    );

    var $required_fields = array(
        'id_user',
        'name',
        'description',
        'status'
    );
}