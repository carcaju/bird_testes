<?php
class Question extends CI_Controller {

    var $id_user = 1; //USUARIO HARDCODE, PARA EFEITO DE TESTE

    public function __construct()
    {
        parent::__construct();
        $this->load->model('question_model');
        $this->load->model('questionType_model');
        $this->load->model('answer_model');
        $this->load->helper('url_helper');
        $this->load->helper('text_helper');
    }

    public function index() {
        $response = $this->question_model->get();
        $questions = $response->result();

        foreach ($questions as $key => $value) {
            $response_answers = $this->answer_model->get([
                'id_question =' => $value->id
            ]);
            $answers[$value->id] = $response_answers->result();
        }

        $title = "Questões";

        $data = [
            'title'=>$title,
            'questions'=>$questions,
            'answers'=>$answers
        ];

        $this->load->view('templates/header');
        $this->load->view('templates/menu');
        $this->load->view('questions/index', $data);
        $this->load->view('templates/footer');
    }

    public function view($slug= NULL) {
        $fields = array('id' => $slug);
        $data = (array) $this->question_model->get($fields);

        if(empty($data)) {
            show_404();
        }

        $data['title'] = $data['name'];

        $this->load->view('templates/header', $data);
        $this->load->view('templates/menu', $data);
        $this->load->view('questions/view', $data);
        $this->load->view('templates/footer', $data);
    }

    public function create() {
        $this->load->helper('form');
        $this->load->library('form_validation');
        $response = $this->questionType_model->get();

        $data['title'] = 'Adicionar uma Questão';
        $data['question_types'] = $response->result();

        $this->form_validation->set_rules('title','Título','required');
        $this->form_validation->set_rules('description', 'Descrição', 'required');

        if($this->form_validation->run() === FALSE) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/menu', $data);
            $this->load->view('questions/create', $data);
            $this->load->view('templates/footer', $data);
        } else {
            $options = $this->input->post();
            $options['id_user'] = $this->id_user;
            unset($options['submit']);

            $id = $this->question_model->add($options);

            if($id) {
                $this->load->view('templates/header', $data);
                $this->load->view('templates/menu', $data);
                $this->load->view('questions/success');
                $this->load->view('templates/footer', $data);
            } else {
                $message = 'Houve algum erro na gravação da Questão';
                $handling = "Opssss!!!";
                show_error($message,500,$handling);
                exit;
            }
        }

    }
}