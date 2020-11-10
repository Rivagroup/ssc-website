<?php

if (!defined('BASEPATH')) exit('No direct script access allowed');

include_once(APPPATH . 'controllers/MY_ContentController.php');


class Attraktion extends MY_ContentController
{

    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        redirect('/');
    }

    public function bowling()
    {
        foreach ($this->meta as $meta => $daten) {
            $data[$meta] = $daten;
        }
        $data['title'] .= '- Bowling Chemnitz';
        $data['attraktionHeaderImageUrl'] = base_url("/assets/images/slider_fotos spielcenter_bowling.png");
        $data['attraktionTitle'] = "Bowling Chemnitz";
        $data['attraktionDesc'] = "Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.";
        $data['attraktionUrl'] = "https://bowling-chemnitz.de";
        $data['main_content'] = 'attraktion/attraktion_details';
        $this->load->view('template', $data);
    }

    public function minigolf()
    {
        foreach ($this->meta as $meta => $daten) {
            $data[$meta] = $daten;
        }
        $data['title'] .= '- Adventure Minigolf Chemnitz';
        $data['attraktionHeaderImageUrl'] = base_url("/assets/images/slider_fotos spielcenter_minigolf2.png");
        $data['attraktionTitle'] = "Adventure Minigolf Chemnitz";
        $data['attraktionDesc'] = "Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.";
        $data['attraktionUrl'] = "https://minigolf-chemnitz.de";
        $data['main_content'] = 'attraktion/attraktion_details';
        $this->load->view('template', $data);
    }

    public function escaperoom()
    {
        foreach ($this->meta as $meta => $daten) {
            $data[$meta] = $daten;
        }
        $data['title'] .= '- Escaperoom Chemnitz';
        $data['attraktionHeaderImageUrl'] = base_url("/assets/images/slider_fotos spielcenter_esc_knast.png");
        $data['attraktionTitle'] = "Escaperoom Chemnitz";
        $data['attraktionDesc'] = "Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.";
        $data['attraktionUrl'] = "https://escaperoom-chemnitz.de";
        $data['main_content'] = 'attraktion/attraktion_details';
        $this->load->view('template', $data);
    }

    public function lasertag()
    {
        foreach ($this->meta as $meta => $daten) {
            $data[$meta] = $daten;
        }
        $data['title'] .= '- Lasergame Chemnitz';
        $data['attraktionHeaderImageUrl'] = base_url("/assets/images/slider_fotos spielcenter_lasertag.png");
        $data['attraktionTitle'] = "Lasergame Chemnitz";
        $data['attraktionDesc'] = "Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.";
        $data['attraktionUrl'] = "https://lasergame-chemnitz.de";
        $data['main_content'] = 'attraktion/attraktion_details';
        $this->load->view('template', $data);
    }
}
