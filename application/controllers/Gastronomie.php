<?php

if (!defined('BASEPATH')) exit('No direct script access allowed');

include_once(APPPATH . 'controllers/MY_ContentController.php');


class Gastronomie extends MY_ContentController
{

    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        redirect('/');
    }
}
