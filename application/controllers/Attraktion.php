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
        $data['attraktionHeaderImageUrl'] = base_url("/assets/images/slider_bowling.jpg");
        $data['attraktionTitle'] = "Bowling Chemnitz";
        $data['attraktionDesc'] = "Bowling Chemnitz steht für Bowlingspaß pur - egal ob mit Freunden, Familie oder Kolleg(inn)en. Spiel, Sport und Vergnügen für Groß und Klein, Jung und Alt, für Freizeit- und Profispieler gleichermaßen.";
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
        $data['attraktionHeaderImageUrl'] = base_url("/assets/images/slider_golf.jpg");
        $data['attraktionTitle'] = "Adventure Minigolf Chemnitz";
        $data['attraktionDesc'] = "Ihr bewegt euch spielerisch auf einem 16-Loch-Indoor-Minigolf-Parcours durch 4 unterschiedliche Fantasiewelten. Die gesamte Spielfläche wurde mit Wandmotiven in fluoreszierenden Farben gestaltet, die im Schwarzlicht gut zur Geltung kommen. Der Freizeitspaß ist natürlich wetter unabhängig und eignet sich daher sehr gut ganzjährig für gemeinsame Aktivitäten mit Freunden und Familie, für Junggesellenabschiede, Geburtstag oder auch Firmenevents.";
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
        $data['attraktionHeaderImageUrl'] = base_url("/assets/images/slider_escape.jpg");
        $data['attraktionTitle'] = "Escaperoom Chemnitz";
        $data['attraktionDesc'] = "Entschlüsselt die Rätsel unserer Räume, sucht und kombiniert dafür versteckte Hinweise. Denkt logisch und seid kreativ! Nur durch gute Teamarbeit und Taktik habt Ihr eine Chance das Szenario zu lösen und aus dem Gefängnis auszubrechen, die Welt zu retten oder das Geheimnis um die gruselige Psychiatrie zu lösen.<br/><br/>Aber keine Angst, wenn ihr völlig auf dem Schlauch steht, kleine Hilfestellungen von uns sind möglich. Gerne gehen wir auch individuell auf die „erfahrenen Spieler“ ein. Wenn Ihr keine oder nur wenige Hinweise wollt, so sagt uns dies einfach im Vorfeld. Solltet Ihr die Lösung nicht rechtzeitig parat haben, müsst Ihr natürlich nicht auf ewig im Raum bleiben. Wir befreien Euch am Ende… vielleicht.";
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
        $data['attraktionHeaderImageUrl'] = base_url("/assets/images/slider_laser.jpg");
        $data['attraktionTitle'] = "Lasergame Chemnitz";
        $data['attraktionDesc'] = "Höchster Spaßfaktor und absolutes Highlight auf 900m² Spielfläche. Das Beste was Chemnitz zu bieten hat. Sitzt du noch, oder spielst du schon? Nichts für Couch-Potatos!";
        $data['attraktionUrl'] = "https://lasergame-chemnitz.de";
        $data['main_content'] = 'attraktion/attraktion_details';
        $this->load->view('template', $data);
    }
}
