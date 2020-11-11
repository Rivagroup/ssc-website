<?php

if (!defined('BASEPATH')) exit('No direct script access allowed');

include_once(APPPATH . 'controllers/MY_ContentController.php');


class Kombi extends MY_ContentController
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
        $data['title'] .= '- Kombipakete';
        $data['main_content'] = 'kombipakete/kombipakete_content';
        $this->load->view('template', $data);
    }
}