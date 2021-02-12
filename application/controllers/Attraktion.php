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
        $data['attraktionGallery'] = [
            array('url' => base_url("/assets/images/slider_fotos spielcenter_bowling.png"), 'alt' => "Bowling Chemnitz - Bowlingbahnen"),
            array('url' => base_url("/assets/images/slider_fotos spielcenter_bowling2.png"), 'alt' => "Bowling Chemnitz - Eingangsbereich"),
            array('url' => base_url("/assets/images/slider_fotos spielcenter_bowling4.png"), 'alt' => "Bowling Chemnitz - Bowlingbahn")
        ];
        $data['attraktionGalleryThumbnails'] = [
            array('url' => base_url("/assets/images/thumbnail-000.jpg"), 'alt' => "Bowling Chemnitz - Bowlingbahnen"),
            array('url' => base_url("/assets/images/thumbnail-001.jpg"), 'alt' => "Bowling Chemnitz - Eingangsbereich"),
            array('url' => base_url("/assets/images/thumbnail-003.jpg"), 'alt' => "Bowling Chemnitz - Bowlingbahn")
        ];
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
        $data['attraktionDesc'] = "Erlebt die erste Schwarzlicht Minigolf Anlage mit einer Fläche von 500m² nun auch in Chemnitz. Ihr bewegt euch spielerisch auf einem 16-Loch-Indoor-Minigolf-Parcours durch 4 unterschiedliche Fantasiewelten. Die gesamte Spielfläche wurde mit Motiven in fluoreszierenden Farben gestaltet, die im Schwarzlicht gut zur Geltung kommen. Der Freizeitspaß ist natürlich wetterunabhängig und eignet sich daher sehr gut ganzjährig für gemeinsame Aktivitäten, egal ob Junggesellenabschied, Geburtstag, Familienausflug.";
        $data['attraktionUrl'] = "https://minigolf-chemnitz.de";
        $data['attraktionGallery'] = [
            array('url' => base_url("/assets/images/slider_fotos spielcenter_minigolf.png"), 'alt' => "Adventure Minigolf Chemnitz - Spielfeld 1"),
            array('url' => base_url("/assets/images/slider_fotos spielcenter_minigolf2.png"), 'alt' => "Adventure Minigolf Chemnitz - Spielfeld 2")
        ];
        $data['attraktionGalleryThumbnails'] = [
            array('url' => base_url("/assets/images/thumbnail-007.jpg"), 'alt' => "Bowling Chemnitz - Bowlingbahnen"),
            array('url' => base_url("/assets/images/thumbnail-008.jpg"), 'alt' => "Bowling Chemnitz - Bowlingbahnen")
        ];
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
        $data['attraktionDesc'] = "Egal wie man es nennt, Escape Room, Exit Games oder Live Escape Games ist ein neues Freizeitangebot. Dieser Trend ist seit geraumer Zeit global verbreitet Bei der Lösung der Rätsel und Aufgaben ist Teamarbeit gefragt. Dabei können man logisches und um-die-Ecke-Denken, Fingerfertigkeit, das Kombinieren von Hinweisen und gute Kommunikation ausschlag gebend für das Bestehen ";
        $data['attraktionUrl'] = "https://escaperoom-chemnitz.de";
        $data['attraktionGallery'] = [
            array('url' => base_url("/assets/images/slider_fotos spielcenter_esc_knast.png"), 'alt' => "Escaperoom Chemnitz - Prison Break"),
            array('url' => base_url("/assets/images/slider_fotos spielcenter_esc_psych.png"), 'alt' => "Escaperoom Chemnitz - Psychiatrie")
        ];
        $data['attraktionGalleryThumbnails'] = [
            array('url' => base_url("/assets/images/thumbnail-004.jpg"), 'alt' => "Bowling Chemnitz - Bowlingbahnen"),
            array('url' => base_url("/assets/images/thumbnail-005.jpg"), 'alt' => "Bowling Chemnitz - Bowlingbahnen")
        ];
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
        $data['attraktionDesc'] = "Durch unser geschultes Personal erfolgt vor der ersten Spielpartie eine Einweisung zur Funktionsweise der gesamten Lasermaxx-Hardware. Nach dieser Einführung in das System geht es mit dem aktiven Spiel los. Jeweils nach Spielende gibt es eine Auswertung, bei welcher der beste Spieler oder das beste Team ermittelt und benannt wird. Nach jedem Spiel haben Sie die Möglichkeit eine kleine Pause von etwa 10-15 Minuten zu nehmen. ";
        $data['attraktionUrl'] = "https://lasergame-chemnitz.de";
        $data['attraktionGallery'] = [
            array('url' => base_url("/assets/images/slider_fotos spielcenter_lasertag.png"), 'alt' => "Lasergame Chemnitz - Spielfeld 900m²")
        ];
        $data['attraktionGalleryThumbnails'] = [
            array('url' => base_url("/assets/images/thumbnail-006.jpg"), 'alt' => "Bowling Chemnitz - Bowlingbahnen")
        ];
        $data['main_content'] = 'attraktion/attraktion_details';
        $this->load->view('template', $data);
    }
}
