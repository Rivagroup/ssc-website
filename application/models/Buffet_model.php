<?php

class Buffet_model extends CI_Model
{

    private $buffets = [
        array(
            'title' => 'Americano',
            'desc' => 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.',
            'img' => 'http://lorempixel.com/640/400/',
            'starter' => array("Macaroni Salad", "Cowlslaw", "Bic Mäc Salad"),
            'entree' => array("hausgemachte Spare-Ribs", "Chicken Nuggets", "selfmade” Burger - Corner", "Chili con Carne", "Baked Beans", "gegrillte Maiskolben", "Ofenkartoffeln mit SourCreme", "Süßkartoffel-Pommes", "Kartoffelspalten", "Honey Mustard~ / SourCreme~ / Meerrettich-Knoblauch Dip"),
            'dessert' => array("Frische Obstplatte", "Mini-Donuts & Mini-Muffins"),
            'tier1price' => '21,40',
            'tier1quantity' => '25',
            'tier2price' => '20,90',
            'tier2quantity' => '50',
            'tier3price' => '20,40',
            'tier3quantity' => '100'
        ),
        array(
            'title' => 'Avantgarde',
            'desc' => 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.',
            'img' => 'http://lorempixel.com/640/400/',
            'starter' => array(
                "Kartoffel-Avocado-Salat mit Kresse",
                "Zucchini-Carpaccio mit Ingwer-Vinaigrette",
                "Gnocchi-Gemüse-Salat",
                "Rote Bete - Apfel Salat",
                "Feine Wurst~ und Bratenplatten",
                "Frisches Brot und Brötchen",
                "Butterplatte"
            ),
            'entree' => array(
                "Bolivianische Erdnusssuppe",
                "Vegetarische Couscous-Pfanne",
                "Honig-Fleisch-Fackeln mit Kohl und Petersilienkartoffeln",
                "Burgunderbraten mit Rotkraut und Wickelknödel",
                "Fischfilet auf Himbeerlinsen"
            ),
            'dessert' => array(
                "Himbeeren unter Knusperdecke",
                "Bunte Obstplatte am Schokobrunnen"
            ),
            'tier1price' => '26,90',
            'tier1quantity' => '25',
            'tier2price' => '26,40',
            'tier2quantity' => '50',
            'tier3price' => '25,90',
            'tier3quantity' => '100'
        ),
        array(
            'title' => 'El Americano',
            'desc' => 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.',
            'img' => 'http://lorempixel.com/640/400/',
            'starter' => array(
                "Auswahl von frischem Brot & Brötchen",
                "Asia-Bratnudel auf Sticks direkt auch China-Town",
                "Blattsalat der Saison mit verschiedenen Dressings und Toppings",
                "American Cowlslaw - amerikanischer Krautsalat"
            ),
            'entree' => array(
                "Chicken Nuggets",
                "Chicken Wings",
                "Lollipop Garnelen",
                "Veggie-Balls",
                "Potatoe Dippers & Wedges"
            ),
            'dessert' => array(
                "Mini-Donuts & Cookies"
            ),
            'tier1price' => '20,90',
            'tier1quantity' => '25',
            'tier2price' => '20,40',
            'tier2quantity' => '50',
            'tier3price' => '19,90',
            'tier3quantity' => '100'
        ),
        array(
            'title' => 'Heilige Nacht',
            'desc' => 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.',
            'img' => 'http://lorempixel.com/640/400/',
            'starter' => array(
                "Schwarzwurzelrahmsuppe mit roter Beete",
                "Reibekuchen mit Räucherlachs und Salatgarnitur",
                "Kleine Pilzpastetchen"
            ),
            'entree' => array(
                "Gänse~ und Entenkeulen mit hausgemachtem Apfelrotkohl und Klößen",
                "Gefüllter Schweinebraten mit deftigem Sauerkraut und Petersilienkartoffeln",
                "Fischfilet in der Kartoffelkruste mit Vanille-Ingwer-Möhren"
            ),
            'dessert' => array(
                "Lebkuchenmousse auf Glühweinsoße",
                "Spekulatius-Schicht-Dessert"
            ),
            'tier1price' => '23,90',
            'tier1quantity' => '25',
            'tier2price' => '23,40',
            'tier2quantity' => '50',
            'tier3price' => '22,90',
            'tier3quantity' => '100'
        ),
        array(
            'title' => 'Italienisch',
            'desc' => 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.',
            'img' => 'http://lorempixel.com/640/400/',
            'starter' => array(
                "Tomate-Mozzarella mit frischem Basilikum",
                "mediterrane Gemüseplatte",
                "Melonenschiffchen mit Parmaschinken",
                "Pennesalat mit Thunfisch, getrockneten Tomaten und Rucola",
                "Italienische Käseauswahl",
                "Bruschetta – Variationen",
                "Ciabatta & Baguette"
            ),
            'entree' => array(
                "Kalbs-Rahm-Geschnetzeltes mit Butterreis",
                "Kleine Schweineschnitzel an Parmesansauce, dazu Risoléekartoffeln",
                "Hähnchenbrust - Filet mit Kräuterkruste auf Tomaten"
            ),
            'dessert' => array(
                "Tiramisu",
                "Frischer Obstsalat mit Maraschino"
            ),
            'tier1price' => '21,80',
            'tier1quantity' => '25',
            'tier2price' => '21,30',
            'tier2quantity' => '50',
            'tier3price' => '20,80',
            'tier3quantity' => '100'
        ),
        array(
            'title' => 'Mr. President',
            'desc' => 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.',
            'img' => 'http://lorempixel.com/640/400/',
            'starter' => array(
                "Auswahl von frischem Brot & Brötchen",
                "Blattsalate der Saison mit Ceasar~, Yoghurt~ und Honey-Mustard-Dressing",
                "American Cowlslaw - amerikanischer Krautsalat",
                "Platte regionaler Wurst~ und Käsespezialitäten",
                "Räucherfisch-Pralinen"
            ),
            'entree' => array(
                "fruchtige Kartoffelsuppe mit Apfel und Ingwer",
                "Saftiger Lachs auf Blattspinat",
                "geräucherte Schweinerippchen, mit geheimen Barbecue-Gewürz mariniert",
                "zartes Roastbeef, im Niedrigtemperaturverfahren gegart",
                "Kartoffelstampf",
                "Variation verschiedener Bohnen und Maiskolben"
            ),
            'dessert' => array(
                "Käsekuchen nach amerikanischem Vorbild"
            ),
            'tier1price' => '36,90',
            'tier1quantity' => '25',
            'tier2price' => '35,90',
            'tier2quantity' => '50',
            'tier3price' => '34,90',
            'tier3quantity' => '100'
        ),
        array(
            'title' => 'Perfect Game',
            'desc' => 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.',
            'img' => 'http://lorempixel.com/640/400/',
            'starter' => array(
                "Tomate-Mozzarella mit frischem Basilikum",
                "gefüllte Peperoni, Tomaten & Champignons",
                "Melonenschiffchen mit Parmaschinken",
                "Rustikale Wurst~ und Käseplatte",
                "Brot- und Brötchen-Arrangemant im Flechtkorb",
                "Buttertablett"
            ),
            'entree' => array(
                "Kleine Schweineschnitzel mit Blumenkohl und Brokkoli, Sauce Hollandaise und Salzkartoffeln",
                "Hähnchenbrust-Filet mit Kräuterkruste auf Tomaten",
                "Ratatouille mit Wildreis-Mischung",
                "Fisch in Sahne-Weißwein-Sauce und Möhren-Kohlrabi-Gemüse"
            ),
            'dessert' => array(
                "Himbeer-Orangen-Dessert mit rosa Pfefferbeeren",
                "frisches Obst am Schokobrunnen"
            ),
            'tier1price' => '20,90',
            'tier1quantity' => '25',
            'tier2price' => '20,40',
            'tier2quantity' => '50',
            'tier3price' => '19,90',
            'tier3quantity' => '100'
        ),
        array(
            'title' => 'Pure Burger',
            'desc' => 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.',
            'img' => 'http://lorempixel.com/640/400/',
            'starter' => array(
                "Cowlslaw",
                "Bic Mäc Salad"
            ),
            'entree' => array(
                "Big Selfmade Burger - Corner",
                "Steakhouse - Fries",
                "Wedges",
                "Dips: Honey-Mustard / SourCreme / Horseradish-Garlic"
            ),
            'dessert' => array(
                "Donuts & Muffins",
                "Marshmallows",
                "Cookies"
            ),
            'tier1price' => '14,90',
            'tier1quantity' => '25',
            'tier2price' => '14,50',
            'tier2quantity' => '50',
            'tier3price' => '14,10',
            'tier3quantity' => '100'
        ),
        array(
            'title' => 'Running Man',
            'desc' => 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.',
            'img' => 'http://lorempixel.com/640/400/',
            'starter' => array(
                "bunter, frischer gemischter Salat",
                "Kartoffelsalat mit Radieschen und Lauch",
                "Mini-Bouletten",
                "deftige Wurstplatte",
                "kleine Käseplatte",
                "Brot- und Brötchensortiment",
                "Butter & Schmalztopf"
            ),
            'entree' => array(
                "Zucchini-Wurzelgemüse-Auflauf",
                "Krustenbraten in Schwarzbiersauce",
                "Hähnchenbrust - Filet mit Kräuterkruste auf Tomaten",
                "Sauerkraut & Mischgemüse",
                "Semmelknödel, Eierspätzle, Rosmarinkartoffeln"
            ),
            'dessert' => array(
                "Topfencreme auf Waldbeeren",
                "frische Obstplatte"
            ),
            'tier1price' => '19,90',
            'tier1quantity' => '25',
            'tier2price' => '19,50',
            'tier2quantity' => '50',
            'tier3price' => '18,90',
            'tier3quantity' => '100'
        ),
        array(
            'title' => 'Rustikales Buffet',
            'desc' => 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.',
            'img' => 'http://lorempixel.com/640/400/',
            'starter' => array(
                "Hausgemachte Fleischpflanzerl",
                "Kalter Schweinebraten mit Meerrettich",
                "Kartoffelsalat mit Rauke und Radieserl",
                "Krautsalat mit Speck",
                "Gurkensalat",
                "Großer Brotkorb mit Semmeln, Brez´n, Bauernbrot, Butter und Schmalz"
            ),
            'entree' => array(
                "gefüllter Schweinebraten mit Blaukraut",
                "Krustenbraten mit Sauerkraut",
                "Hähnchenbrust - Filet mit Kräuterkruste auf Tomaten",
                "Semmelknödel, Petersilienkartoffeln"
            ),
            'dessert' => array(
                "Frischer Apfelstrudel mit Vanillesauce",
                "Bayerische Creme auf Erdbeermark"
            ),
            'tier1price' => '24,30',
            'tier1quantity' => '25',
            'tier2price' => '23,60',
            'tier2quantity' => '50',
            'tier3price' => '22,90',
            'tier3quantity' => '100'
        ),
        array(
            'title' => 'Schulanfänger',
            'desc' => 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.',
            'img' => 'http://lorempixel.com/640/400/',
            'starter' => array(
                "Tomate-Mozarella-Platte",
                "bunte gemischte Gemüse-Stick-Platte",
                "Wurst~ und Käseplatte",
                "Brot~ und Brötchen-Sortiment",
                "Butter & Frischkäse-Variationen"
            ),
            'entree' => array(
                "Soljanka & Kartoffelsuppe mit Wienern",
                "Spannferkel mit Sauerkraut und Knödeln",
                "Hähnchen-Hawaii (überbacken)",
                "Butterreis",
                "Semmelknödel, Petersilienkartoffeln",
                "Für die “Kleinen” nun Großen:",
                "Pommes Frittes",
                "Mini-Schnitzel , Fischstäbchen, Chicken-Nuggets",
                "Nudeln mit Tomatensoße"
            ),
            'dessert' => array(
                "Zarte Vanille-Creme auf Himbeermark",
                "frische Obstplatten"
            ),
            'tier1price' => '18,40',
            'tier1quantity' => '25',
            'tier2price' => '17,90',
            'tier2quantity' => '50',
            'tier3price' => '17,40',
            'tier3quantity' => '100'
        ),
        array(
            'title' => 'Vital',
            'desc' => 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.',
            'img' => 'http://lorempixel.com/640/400/',
            'starter' => array(
                "Antipasti-Salat mit Schafskäse und Pesto-Dressing",
                "Salat mit Birnen, Zwiebeln und Blauschimmelkäse",
                "Brot~ und Brötchen-Sortiment",
                "Buttertablett"
            ),
            'entree' => array(
                "Steckrüben - Möhrentopf",
                "Ratatouille",
                "Glasierte Putenbrust mit Preiselbeeren",
                "Kasseler Lammerbraten",
                "Fischfilet in Sahne-Weißwein-Sauce und Möhren-Kohlrabi-Gemüse",
                "Petersilien-Kartoffeln",
                "Eierspätzle",
                "Rosenkohl",
                "Rotkraut"
            ),
            'dessert' => array(
                "Zarte Vanille-Creme auf Himbeermark",
                "Obstplatten mit Schokobrunnen"
            ),
            'tier1price' => '23,90',
            'tier1quantity' => '25',
            'tier2price' => '23,40',
            'tier2quantity' => '50',
            'tier3price' => '22,90',
            'tier3quantity' => '100'
        )
    ];

    public function getAllBuffets()
    {
        $result = $this->buffets;
        return $result;
    }

    public function getBuffetByName($name)
    {
        $key = array_search($name, array_column($this->buffets, 'title'));
        return $this->buffets[$key];
    }
}
