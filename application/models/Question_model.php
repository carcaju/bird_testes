<?php

class Question_model extends MY_Model {

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

    public function get_questions_answers() {
        $this->db->from('questions');
        $this->db->join('answers','answers.id_question=questions.id','left');

        return $this->db->get();
    }
}