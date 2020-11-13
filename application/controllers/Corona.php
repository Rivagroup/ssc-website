<?php

if (!defined('BASEPATH')) exit('No direct script access allowed');

include_once(APPPATH . 'controllers/MY_ContentController.php');


class Corona extends MY_ContentController
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        foreach ($this->meta as $meta => $daten) {
            $data[$meta] = $daten;
        }
        $data['title'] .= '- Coronainfo';
        $data['main_content'] = 'corona/corona_content';
        $this->load->view('template', $data);
    }

    public function extern()
    {
        $this->load->view('corona/corona_content');
    }
}
