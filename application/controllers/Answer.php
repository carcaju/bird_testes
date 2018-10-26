<?php
class News extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('answer_model');
        $this->load->helper('url_helper');
        $this->load->helper('text_helper');
    }

    public function index() {
        $data['answer'] = $this->news_model->get();
        $data['title'] = "Respostas";

        $this->load->view('templates/header', $data);
        $this->load->view('answer/index', $data);
        $this->load->view('templates/footer', $data);
    }

    public function view($slug= NULL) {
        $fields = array('id' => $slug);
        $data['news_item'] = $this->news_model->get($fields);

        if(empty($data['news_item'])) {
            show_404();
        }

        $data['title'] = $data['news_item']['title'];

        $this->load->view('templates/header', $data);
        $this->load->view('news/view', $data);
        $this->load->view('templates/footer', $data);
    }

    public function create() {
        $this->load->helper('form');
        $this->load->library('form_validation');

        $data['title'] = 'Create a news item';

        $this->form_validation->set_rules('title','Title','required');
        $this->form_validation->set_rules('text', 'Text', 'required');

        if($this->form_validation->run() === FALSE) {
            $this->load->view('templates/header',$data);
            $this->load->view('news/create');
            $this->load->view('templates/footer',$data);
        } else {
            $this->news_model->set_news();
            $this->load->view('news/success');
        }


    }
}