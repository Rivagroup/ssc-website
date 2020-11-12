<?php

if (!defined('BASEPATH')) exit('No direct script access allowed');

include_once(APPPATH . 'controllers/MY_ContentController.php');


class Buffet extends MY_ContentController
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Buffet_model');
    }

    public function index()
    {
        foreach ($this->meta as $meta => $daten) {
            $data[$meta] = $daten;
        }
        $data['title'] .= '- Buffets';
        $data['buffets'] = $this->Buffet_model->getAllBuffets();
        $data['main_content'] = 'buffet/overview_content';
        $this->load->view('template', $data);
    }

    public function details($buffetname)
    {
        foreach ($this->meta as $meta => $daten) {
            $data[$meta] = $daten;
        }
        $data['title'] .= '- Buffets ' . $buffetname;
        $data['buffet'] = $this->Buffet_model->getBuffetByName($buffetname);
        $data['main_content'] = 'buffet/details_content';
        $this->load->view('template', $data);
    }
}
