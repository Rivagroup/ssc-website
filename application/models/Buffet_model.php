<?php

class Buffet_model extends CI_Model
{

    private $buffets = [
        array(
            'title' => 'Americano',
            'teaser' => 'Burger, viel Fleisch und Pommes.',
            'desc' => 'Bei typisch amerikanischem Essen denkt man mit Sicherheit zuerst an Burger, viel Fleisch und Pommes. All das finden Sie bei unserem Buffet „American“ in Form eines selfmade Burger Corners, hausgemachten Spare Ribs und Chicken Nuggets, sowie Kartoffelspalten und vielem mehr. Ideal zum Schlemmen nach einer Runde Bowling im Spielcenter-Chemnitz, eben typisch amerikanisch.',
            'img' => 'https://picsum.photos/640/241/',
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
            'teaser' => 'Die Avantgarde-Küche vereint Essen und Kunst. Lernen Sie ganz neue Geschmackserlebnisse mit unserem Buffet „Avantgarde“ kennen.',
            'desc' => 'Die Avantgarde-Küche vereint Essen und Kunst. Lernen Sie ganz neue Geschmackserlebnisse mit unserem Buffet „Avantgarde“ kennen. Es erwarten Sie zartes Fleisch mit exotischen Beilagen, aber auch Fisch und vegetarische Gerichte. Kombiniert mit einer Auswahl an feinen Vorspeisen und traumhaften Desserts wird unser Buffet perfekt abgerundet für einen Genuss der besonderen Art. Mit Sicherheit lassen diese kreativen Ideen auch Ihre Kreativität und Ihren Einfallsreichtum aufblühen, damit Sie mit klugem Kopf und neuen Ideen einen Escape room im Spielcenter Chemnitz erfolgreich lösen können.',
            'img' => 'https://picsum.photos/640/240/',
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
            'teaser' => 'Familienfeiern sind langweilig? Nicht im Spielcenter Chemnitz!',
            'desc' => 'Familienfeiern sind langweilig? Nicht im Spielcenter Chemnitz! Battelt Euch bei einer Runde Bowling, Schwarzlicht Minigolf, Rätselräumen oder Lasergame und seht, wie toll die Zeit mit der Familie ist und wie viel Spaß Ihr haben werdet. Anschließend bietet das Buffet „El Americano“ nicht nur für die kleinen, sondern auch für die großen Superhelden und Gewinner der Spiele ausreichend Leckerbissen an. Denn ihr seid sicher ganz schön aus der Puste gekommen und seid nun froh über jede Stärkung. Wenn Ihr dann satt und voller neuer Energie seid, dürft Ihr gern in die nächste Runde starten.',
            'img' => 'https://picsum.photos/640/241/',
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
            'teaser' => 'Weihnachten ist ein besinnliches Familienfest voller Gaumenfreuden.',
            'desc' => 'Weihnachten ist ein besinnliches Familienfest voller Gaumenfreuden. Und unser Buffet „Heilige Nacht“ lässt für Liebhaber des Weihnachtsessens keine Wünsche offen. Planen Sie doch die Weihnachtsfeier Ihres Unternehmens bei uns im Spielcenter Chemnitz, bei dem dieses Buffet den krönenden Abschluss einer Runde Bowling, Adventure Minigolf oder Lasergame bildet.',
            'img' => 'https://picsum.photos/640/242/',
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
            'teaser' => 'Pasta, Pizza et amore! Das Buffet „Italienisch“ lässt den Traum von gutem italienischem Essen wahr werden.',
            'desc' => 'Pasta, Pizza et amore! Das Buffet „Italienisch“ lässt den Traum von gutem italienischem Essen wahr werden und das lässt selbst den Italiener staunen. In Italien ist „la mamma“ das Zentrum der Familie. Wieso gönnen Sie nicht Ihrer Mama bei der nächsten Familienfeier eine kleine Auszeit, sodass sie sich um nichts kümmern muss? – Wir bereiten das Essen für die gesamte Familie zu, während Sie eine Runde Bowling spielen. Bon Appetit!',
            'img' => 'https://picsum.photos/640/243/',
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
            'teaser' => 'Speisen wie der Präsident, das hört sich doch fabelhaft an.',
            'desc' => 'Speisen wie der Präsident, das hört sich doch fabelhaft an. Und möglich wird dies für Sie im Spielcenter Chemnitz. Ihr persönlicher Koch bereitet Ihnen ein Buffet mit einer großen Auswahl an Gerichten zu, die Ihnen mit Sicherheit ein hoheitliches Gefühl geben werden. Aber nicht nur der Präsident, der Gewinner beim Adventure Minigolf, sondern auch seine Untertanen, die nicht so erfolgreichen Spieler, dürfen gerne zugreifen und sich an dem Buffet „Mr President“ bedienen.',
            'img' => 'https://picsum.photos/640/244/',
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
            'teaser' => 'Und, war es für Sie ein „perfect game“? Sind Sie aus dem Escape Raum entkommen bevor die Zeit ablief?',
            'desc' => 'Und, war es für Sie ein „perfect game“? Sind Sie aus dem Escape Raum entkommen bevor die Zeit ablief? Egal, ob Sie es geschafft haben oder nicht, die 60 Minuten Rätsel lösen haben Sie sicher hungrig gemacht. Stillen Sie diesen am besten an unserem Buffet „Perfect Game“, um diesen schönen Tag ausklingen zu lassen und vielleicht planen Sie ja schon, welchen Escape Raum Sie als nächstes mit Ihrem klugen Team bespielen wollen.',
            'img' => 'https://picsum.photos/640/245/',
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
            'teaser' => 'Unser „Pure Burger“ Buffet gibt Ihnen die Möglichkeit, selbst aktiv zu werden und Ihre eigenen Burger zu kreieren.',
            'desc' => 'Unser „Pure Burger“ Buffet gibt Ihnen die Möglichkeit, selbst aktiv zu werden und Ihre eigenen Burger zu kreieren. Wählen Sie aus unserem Big Selfmade Burger Corner Ihre liebsten Zutaten selbst und stellen Sie sich so Ihren Traumburger zusammen. Mit Steakhouse-Fries oder Wedges und dem passenden Dip wird Ihr Burger zum Hit. Dieses Buffet erfreut Kinder und Erwachsene gleichermaßen. Also, worauf warten Sie noch? Ran an die Burger!',
            'img' => 'https://picsum.photos/640/246/',
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
            'teaser' => 'Beim Lasergame Chemnitz waren Sie der „running man“, der alle anderen getroffen und somit die meisten Punkte erzielt hat?',
            'desc' => 'Beim Lasergame Chemnitz waren Sie der „running man“, der alle anderen getroffen und somit die meisten Punkte erzielt hat? Herzlichen Glückwunsch, dann dürfen Sie im Anschluss gerne noch unser Buffet „Running Man“ genießen, um neue Energie zu tanken und danach ins nächste Spiel zu starten! Nur eine kleine Bitte: gönnen Sie auch den Verlierern eine Kleinigkeit von dem leckeren Essen, Sie können es wahrscheinlich besser gebrauchen, um Ihre Niederlage zu verkraften.',
            'img' => 'https://picsum.photos/640/247/',
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
            'teaser' => 'Unser rustikales Buffet ist – wie der Name schon erahnen lässt – für alle diejenigen, die auf deftiges Essen und Hausmannskost stehen.',
            'desc' => 'Unser rustikales Buffet ist – wie der Name schon erahnen lässt – für alle diejenigen, die auf deftiges Essen und Hausmannskost stehen. Einfach perfekt, wenn Ihnen beim Lasergame Chemnitz die Puste ausgegangen ist, Sie nach dem Lösen einer unserer Escaperäume im Spielcenter Chemnitz den Kopf wieder freibekommen wollen, die Runde Adventure Minigolf mit ihren Kindern Sie viele Nerven gekostet hat oder die Kollegen Sie beim Bowling mal wieder abgezogen haben – nach einem kräftig deftigen Essen fühlen Sie sich umso stärker und gewinnen sicher bei Ihrem nächsten Besuch im Spielcenter Chemnitz.',
            'img' => 'https://picsum.photos/640/248/',
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
            'teaser' => 'Bei unserem Buffet „Schulanfänger“ ist nicht nur für die „kleinen Großen“, sondern auch für die Erwachsenen alles dabei.',
            'desc' => 'Bei unserem Buffet „Schulanfänger“ ist nicht nur für die „kleinen Großen“, sondern auch für die Erwachsenen alles dabei. Und bei der ganzen Aufregung, die dieser Tag mit sich bringt, sollten Sie sicher gehen, dass alle Gäste gut gestärkt werden. Damit ihre Feier zum Schulanfang im Spielcenter Chemnitz nicht nur geschmacklich ein Volltreffer wird, spielen Sie doch mit Ihren Sprösslingen noch eine Runde Bowling, Adventure Minigolf oder Lasergame. Ihre Kinder werden so schnell erwachsen und den Schulanfang feiert man nur einmal im Leben, also machen Sie diesen zu etwas Besonderem.',
            'img' => 'https://picsum.photos/640/249/',
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
            'teaser' => 'Unser Buffet „Vital“ ist ideal für alle diejenigen, die sich nach dem Bowling oder Lasergame im Spielcenter Chemnitz nicht mehr ganz so fit und vital fühlen.',
            'desc' => 'Unser Buffet „Vital“ ist ideal für alle diejenigen, die sich nach dem Bowling oder Lasergame im Spielcenter Chemnitz nicht mehr ganz so fit und vital fühlen. So ein Spiel mit der Familie oder den Freunden kann einen ganz schön auspowern. Tanken Sie neue Kraft mit unseren ausgewählten frischen Speisen, die garantiert wieder Leben in Ihre müden Knochen und Muskeln bringen. Und genießen Sie die kurze Auszeit, denn nach der Pause können Sie sich gestärkt und wieder vollen Akkus ins nächste Spiel starten.',
            'img' => 'https://picsum.photos/640/250/',
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
