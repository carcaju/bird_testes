<?php

class User_model extends MY_Model {

    var $primary_table = 'users';

    var $validate_field_existence = TRUE;

    var $fields = array(
        'id',
        'name',
        'email',
        'user',
        'password',
        'admin'
    );

    var $required_fields = array(
        'name',
        'email',
        'user',
        'password',
        'admin'
    );
}