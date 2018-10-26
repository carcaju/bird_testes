<?php
class Test extends CI_Controller {

    var $id_user = 1; //USUARIO HARDCODE, PARA EFEITO DE TESTE

    public function __construct()
    {
        parent::__construct();
        $this->load->model('test_model');
        $this->load->helper('url_helper');
        $this->load->helper('text_helper');
    }

    public function index() {
        $response = $this->test_model->get();

        $data['tests'] = $response->result();
        $data['title'] = "Testes";

        $this->load->view('templates/header', $data);
        $this->load->view('templates/menu', $data);
        $this->load->view('tests/index', $data);
        $this->load->view('templates/footer', $data);
    }

    public function view($slug= NULL) {
        $fields = array('id' => $slug);
        $data = (array) $this->test_model->get($fields);

        if(empty($data)) {
            show_404();
        }

        $data['title'] = $data['name'];

        $this->load->view('templates/header', $data);
        $this->load->view('templates/menu', $data);
        $this->load->view('tests/view', $data);
        $this->load->view('templates/footer', $data);
    }

    public function create() {
        $this->load->helper('form');
        $this->load->library('form_validation');

        $data['title'] = 'Adicionar um teste';

        $this->form_validation->set_rules('name','Nome','required');
        $this->form_validation->set_rules('description', 'Descrição', 'required');

        if($this->form_validation->run() === FALSE) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/menu', $data);
            $this->load->view('tests/create', $data);
            $this->load->view('templates/footer', $data);

        } else {
            $options = $this->input->post();
            $options['id_user'] = $this->id_user;
            unset($options['submit']);

            $id = $this->test_model->add($options);
            $this->load->view('tests/success');
        }


    }
}