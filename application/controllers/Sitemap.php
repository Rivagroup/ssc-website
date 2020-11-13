<?php

if (!defined('BASEPATH')) exit('No direct script access allowed');

class Sitemap extends CI_Controller
{
    function index()
    {
        $data['urls'] = [
            /*array("loc" => base_url("/buffet"), "lastmod" => "2020-11-13T09:00:00+00:00", "priority" => "0.8"),*/
            array("loc" => base_url("/corona"), "lastmod" => "2020-11-13T09:00:00+00:00", "priority" => "0.8"),
            array("loc" => base_url("/hygiene"), "lastmod" => "2020-11-13T09:00:00+00:00", "priority" => "0.8"),
            array("loc" => base_url("/karte"), "lastmod" => "2020-11-13T09:00:00+00:00", "priority" => "0.8"),
            array("loc" => base_url("/kombi"), "lastmod" => "2020-11-13T09:00:00+00:00", "priority" => "0.8"),
            array("loc" => base_url("/silvester"), "lastmod" => "2020-11-13T09:00:00+00:00", "priority" => "0.8"),
            array("loc" => base_url("/attraktion/bowling"), "lastmod" => "2020-11-13T09:00:00+00:00", "priority" => "0.6"),
            array("loc" => base_url("/attraktion/escaperoom"), "lastmod" => "2020-11-13T09:00:00+00:00", "priority" => "0.6"),
            array("loc" => base_url("/attraktion/minigolf"), "lastmod" => "2020-11-13T09:00:00+00:00", "priority" => "0.6"),
            array("loc" => base_url("/attraktion/lasertag"), "lastmod" => "2020-11-13T09:00:00+00:00", "priority" => "0.6")/*,
            array("loc" => base_url("buffet/details/Americano"), "lastmod" => "2020-11-13T09:00:00+00:00", "priority" => "0.4"),
            array("loc" => base_url("buffet/details/Avantgarde"), "lastmod" => "2020-11-13T09:00:00+00:00", "priority" => "0.4"),
            array("loc" => base_url("buffet/details/El Americano"), "lastmod" => "2020-11-13T09:00:00+00:00", "priority" => "0.4"),
            array("loc" => base_url("buffet/details/Heilige Nacht"), "lastmod" => "2020-11-13T09:00:00+00:00", "priority" => "0.4"),
            array("loc" => base_url("buffet/details/Italienisch"), "lastmod" => "2020-11-13T09:00:00+00:00", "priority" => "0.4"),
            array("loc" => base_url("buffet/details/Mr. President"), "lastmod" => "2020-11-13T09:00:00+00:00", "priority" => "0.4"),
            array("loc" => base_url("buffet/details/Perfect Game"), "lastmod" => "2020-11-13T09:00:00+00:00", "priority" => "0.4"),
            array("loc" => base_url("buffet/details/Pure Burger"), "lastmod" => "2020-11-13T09:00:00+00:00", "priority" => "0.4"),
            array("loc" => base_url("buffet/details/Running Man"), "lastmod" => "2020-11-13T09:00:00+00:00", "priority" => "0.4"),
            array("loc" => base_url("buffet/details/Rustikales Buffet"), "lastmod" => "2020-11-13T09:00:00+00:00", "priority" => "0.4"),
            array("loc" => base_url("buffet/details/Schulanfänger"), "lastmod" => "2020-11-13T09:00:00+00:00", "priority" => "0.4"),
            array("loc" => base_url("buffet/details/Vital"), "lastmod" => "2020-11-13T09:00:00+00:00", "priority" => "0.4")*/
        ];
        header("Content-Type: text/xml;charset=iso-8859-1");
        $this->load->view("sitemap/sitemap", $data);
    }
}
