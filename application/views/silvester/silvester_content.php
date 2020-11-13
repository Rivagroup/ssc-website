<style>
    @import url('https://fonts.googleapis.com/css2?family=Roboto:wght@500&display=swap');
    @import url('https://fonts.googleapis.com/css2?family=Dancing+Script:wght@700&display=swap');

    html,
    body {
        scroll-behavior: smooth;
    }

    body {
        /*font-family: 'Roboto', sans-serif;*/
        color: #252935;
    }

    h1 {
        font-family: 'Dancing Script', cursive;
    }

    #goldenWithCarousel {
        margin: 0;
        margin-top: -4vmax;
        z-index: 100;
        position: relative;
        background: url(<?= base_url('/assets/images/silvester/golden.png'); ?>);
        background-repeat: no-repeat;
        background-position: center;
        background-size: cover;
        height: 100vmin;
    }

    .jumbotron {
        background: url(<?= base_url('/assets/images/silvester/golden.png'); ?>);
        background-repeat: no-repeat;
        background-size: cover;
    }

    .slogan {
        font-family: 'Dancing Script', cursive;
        font-size: 4vmax;
    }

    .eyecatcher {
        color: #fff;
        text-shadow: 0.15vw 0.15vw 0 rgba(29, 29, 27, 0.75);
    }
</style>
<h1 class="d-none">Silvester im Spielcenter</h1>
<div id="carousel" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img class="d-block w-100" src="<?= base_url('/assets/images/silvester/minigolf _ESC_LGC illu1 silvester web_1200x600.png'); ?>" alt="Champagne Hat">
        </div>
        <div class="carousel-item">
            <img class="d-block w-100" src="<?= base_url('/assets/images/silvester/slider_image_001.jpg'); ?>" alt="Champagne Hat">
        </div>
        <div class="carousel-item">
            <img class="d-block w-100" src="<?= base_url('/assets/images/silvester/slider_Bild_SC_ Silvester_ bowling.jpg'); ?>" alt="Bowling teaser">
        </div>
        <div class="carousel-item">
            <img class="d-block w-100" src="<?= base_url('/assets/images/silvester/slider_Bild_SC_ Silvester_golf.jpg'); ?>" alt="minigolf teaser">
        </div>
        <div class="carousel-item">
            <img class="d-block w-100" src="<?= base_url('/assets/images/silvester/slider_Bild_SC_ Silvester_lasertag.jpg'); ?>" alt="lasertag teaser">
        </div>
        <div class="carousel-item">
            <img class="d-block w-100" src="<?= base_url('/assets/images/silvester/slider_Bild_SC_ Silvester_escape.jpg'); ?>" alt="escape teaser">
        </div>
    </div>
</div>
<div id="goldenWithCarousel" class="container">
    <div class="text-center">
        <img class="img-fluid" src="<?= base_url('/assets/images/silvester/schriftzug_2.png'); ?>" alt="Schriftzug Silvester Party"><br>
        <span class="eyecatcher slogan">Lasst Euch von uns verzaubern und genießt die Nacht in ein neues
            Jahr.</span><br>
        <a href="#all_inclusive"><img class="img-fluid w-25" src="<?= base_url('/assets/images/silvester/ticket.png'); ?>" alt="Firework"></a>
    </div>
</div>
<div class="mb-5">
    <p>
        Auch dieses Jahr werden wir wieder gebührend beenden, trotzend der "widrigen" Umstände des
        Jahres. All unseren Gästen und Freunden wollen wir wie gewohnt einen schönen sowie lebhaften Start in
        das neue Jahr ermöglichen. Mit der Silvesterparty im Spielcenter Chemnitz setzt ihr auf die
        <span class="text-nowrap">"Rund-Um-Versorgt"-Karte</span>!
    </p>
    <p class="rounded bg-dark text-light p-4 d-block text-center">
        Für schnellentschlossene Frühbucher halten wir eine begrenzte Anzahl an <span class="text-nowrap">"Early-Bird-Tickets"</span> bereit
    </p>
    <p>
        Für weitere Informationen oder Reservierungen wählt einfach die <a class="badge badge-dark" href="tel:+4937133423340"><span>0371 / 334 2 334 0</span></a> oder schreibt
        eine Mail an <a class="badge badge-dark" href="mailto:kontakt@spielcenter-chemnitz.de"><span>kontakt@spielcenter-chemnitz.de</span></a>.</p>
</div>
<div class="mb-5">
    <div class="row row-cols-1 row-cols-md-2">
        <div class="col mb-4">
            <div class="card border-0 mb-3 bg-light h-100 text-dark">
                <div class="card-header bg-transparent border-0">
                    <h5 class="card-title">FREUT EUCH AUF</h5>
                </div>
                <div class="card-body ">
                    <p class="card-text">
                        <span class="lead"> großes Schlemmerbuffet</br>
                            Mitternachtssnackbuffet</br>
                            Getränkeflat die ganze Nacht</br>
                            grandioses Feuerwerk</span></p>
                </div>
                <div class="card-footer bg-transparent border-0"></div>
            </div>
        </div>
        <div class="col mb-4">
            <div class="card border-0 mb-3 bg-dark h-100 text-light">
                <div class="card-header bg-transparent border-0">
                    <h5 class="card-title">JACKPOT-BOWLING</h5>
                </div>
                <div class="card-body">
                    <p class="card-text">
                        <span class="lead">Mindestgewinn</span></br>
                        <b class="display-4">500 EURO</b></p>
                </div>
                <div class="card-footer bg-transparent border-0"></div>
            </div>
        </div>
        <div class="col mb-4">
            <div class="card border-0 mb-3 bg-light h-100 text-dark">
                <div class="card-header bg-transparent border-0">
                    <h5 class="card-title">LIVE DJ & MODERATOR</h5>
                </div>
                <div class="card-body">
                    <p class="card-text">
                        <span class="lead">Es warten noch viele weitere Überraschungen und Aktionen auf
                            Euch</br>
                            (z.b. Beer-Pong, Jenga uvm.)</span></p>
                </div>
                <div class="card-footer bg-transparent border-0"></div>
            </div>
        </div>
        <div class="col mb-4">
            <div class="card border-0 mb-3 bg-dark h-100 text-light">
                <div class="card-header bg-transparent border-0">
                    <h5 class="card-title">ALL YOU CAN TAG</h5>
                </div>
                <div class="card-body">
                    <p class="card-text">
                        <b class="display-4">Lasertag die ganze Nacht</b>
                </div>
                <div class="card-footer bg-transparent border-0"></div>
            </div>
        </div>
    </div>
</div>
<div class="mb-5">
    <h2 class="text-center">Ablaufplan</h2>
    <table class="table table-dark table-striped">
        <thead>
            <tr>
                <th scope="col">Zeit</th>
                <th scope="col">Aktivität</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row">19:00</th>
                <td>öffnen wir die Türen für euch</td>
            </tr>
            <tr>
                <th scope="row">19:45</th>
                <td>Eröffnung des Buffet</td>
            </tr>
            <tr>
                <th scope="row">20:30</th>
                <td>Start der Spiele</td>
            </tr>
            <tr>
                <th scope="row">20:45</th>
                <td>Party mit DJ und Moderator</td>
            </tr>
            <tr>
                <th scope="row">23:30</th>
                <td>Ende der Spiele</td>
            </tr>
            <tr>
                <th scope="row">23:59</th>
                <td>COUNTDOWN</td>
            </tr>
            <tr>
                <th scope="row">00:00</th>
                <td>Happy New Year!</td>
            </tr>
            <tr>
                <th scope="row">00:15</th>
                <td>Party mit DJ und Moderator</td>
            </tr>
        </tbody>
    </table>
</div>
<div class="mb-5">
    <h2 class="text-center" id="all_inclusive">All Inclusive</h2>
    <div class="card-deck">
        <div class="card border-0 mb-3 bg-light text-dark">
            <div class="card-header bg-dark text-light border-0">BOWLING</div>
            <div class="card-body">
                <p class="card-text">
                    <span class="lead">Wer sich für "Silvester - Jackpot - Bowling" interessiert, darf zum
                        Jahreswechsel
                        folgendes bei uns erwarten:</span>
                    <ul>
                        <li>Getränke-Flat</li>
                        <li>Essen vom riesigen Silvester-Schlemmerbuffet</li>
                        <li>Mitternacht gibt es einen Xtra-Snack</li>
                        <li>Bowling so lange ihr wollt</li>
                        <li>Leihschuhe inklusive</li>
                        <li>Jackpot-Bowling von 20 bis 23.30 Uhr</li>
                        <li>DJ und Moderator</li>
                        <li>Spielrunden und Überraschungen auch für "die Kleinen"</li>
                        <li>grandioses Feuerwerk</li>
                        <li>jede Menge Spaß und gute Laune, nette Leute</li>
                    </ul>
                </p>
            </div>
            <div class="card-footer bg-dark text-light border-0 text-center">
                Alles ist im Preis enthalten!
                <a class="btn btn-success btn-lg d-block" href="#preise">Preise und Buchung</a>
            </div>
        </div>
        <div class="card border-0 mb-3 bg-light text-dark">
            <div class="card-header bg-dark text-light border-0">LASERTAG</div>
            <div class="card-body">
                <p class="card-text">
                    <span class="lead">
                        Wer sich für "ALL YOU CAN TAG" interessiert, darf zum Jahreswechsel
                        folgendes bei uns erwarten:
                    </span>
                    <ul>
                        <li>Getränke-Flat</li>
                        <li>Essen vom riesigen Silvester-Schlemmerbuffet</li>
                        <li>Mitternacht gibt es einen Xtra-Snack</li>
                        <li>Lasertag so lange ihr wollt</li>
                        <li>DJ und Moderator</li>
                        <li>grandioses Feuerwerk</li>
                        <li>jede Menge Spaß und gute Laune, nette Leute</li>
                    </ul>
                </p>
            </div>
            <div class="card-footer bg-dark text-light border-0 text-center">
                Alles ist im Preis enthalten!
                <a class="btn btn-success btn-lg d-block" href="#preise">Preise und Buchung</a>
            </div>
        </div>
        <div class="card border-0 mb-3 bg-light text-dark">
            <div class="card-header bg-dark text-light border-0">ESCAPE ROOM</div>
            <div class="card-body">
                <p class="card-text">
                    <span class="lead">Wer sich für "ESCAPE ROOM" interessiert, darf zum Jahreswechsel
                        folgendes bei uns erwarten:</span>
                    <ul>
                        <li>Getränke-Flat</li>
                        <li>Essen vom riesigen Silvester-Schlemmerbuffet</li>
                        <li>Mitternacht gibt es einen Xtra-Snack</li>
                        <li>Ein Escaperoom Eurer Wahl</li>
                        <li>Minigolf so lange Ihr wollt</li>
                        <li>Bowling wenn Kapazitäten frei</li>
                        <li>DJ und Moderator</li>
                        <li>grandioses Feuerwerk</li>
                        <li>jede Menge Spaß und gute Laune, nette Leute</li>
                    </ul>
                </p>
            </div>
            <div class="card-footer bg-dark text-light border-0 text-center">
                Alles ist im Preis enthalten!
                <a class="btn btn-success btn-lg d-block" href="#preise">Preise und Buchung</a>
            </div>
        </div>
    </div>
</div>
<div class="mb-5">
    <h2 class="text-center">Just Party</h2>
    <div class="row row-cols-1 row-cols-md-2">
        <div class="col mb-4">
            <div class="card border-0 mb-3 bg-dark text-light h-100">
                <div class="card-header bg-light text-dark border-0">VARIANTE 1</div>
                <div class="card-body">
                    <p class="card-text">
                        <ul>
                            <li>Einlass ab 19 Uhr</li>
                            <li>Sitzplatzreservierung</li>
                            <li>inkl. Essen und Getränke, die ganze Nacht</li>
                        </ul>
                    </p>
                </div>
                <div class="card-footer bg-light text-dark border-0">NUR IM VORVERKAUF</div>
            </div>
        </div>
        <div class="col mb-4">
            <div class="card border-0 mb-3 bg-dark text-light h-100">
                <div class="card-header bg-light text-dark border-0">VARIANTE 2</div>
                <div class="card-body">
                    <p class="card-text">
                        <ul>
                            <li>Einlass ab 22 Uhr</li>
                            <li>nur Mitternachts-Snack</li>
                            <li>inkl. Getränke, die ganze Nacht</li>
                        </ul>
                    </p>
                </div>
                <div class="card-footer bg-light text-dark border-0">Vorverkauf und Abendkasse</div>
            </div>
        </div>
        <div class="col mb-4">
            <div class="card border-0 mb-3 bg-dark text-light h-100">
                <div class="card-header bg-light text-dark border-0">VARIANTE 3</div>
                <div class="card-body">
                    <p class="card-text">
                        <ul>
                            <li>Einlass ab 23 Uhr</li>
                            <li>nur Mitternachts-Snack</li>
                            <li><b>inkl. 10 € Verzehr-Gutschein</b></li>
                        </ul>
                    </p>
                </div>
                <div class="card-footer bg-light text-dark border-0">nur Abendkasse, so lange der Vorrat reicht
                </div>
            </div>
        </div>
        <div class="col mb-4">
            <div class="card border-0 mb-3 bg-dark text-light h-100">
                <div class="card-header bg-light text-dark border-0">VARIANTE 4</div>
                <div class="card-body">
                    <p class="card-text">
                        <ul>
                            <li>Einlass ab 0 Uhr</li>
                            <li><b>inkl. 10 € Verzehr-Gutschein</b></li>
                        </ul>
                    </p>
                </div>
                <div class="card-footer bg-light text-dark border-0">nur Abendkasse</div>
            </div>
        </div>
    </div>
</div>
<div class="mb-5">
    <h2 class="text-center" id="preise">Ticketpreise</h2>
    <div class="container rounded bg-light">
        <table class="table table-sm table-striped">
            <thead>
                <tr>
                    <th class="border-0" scope="col">Ticket</th>
                    <th class="border-0" scope="col">Erwachsene</th>
                    <th class="border-0" scope="col">Kinder*</small></th>
                    <th class="border-0" scope="col">Familien**</small></th>
                </tr>
            </thead>
            <tbody>
                <tr class="text-muted text-light">
                    <th scope="row"><s>EarlyBird</s></th>
                    <td><s>79 €</s></td>
                    <td><s>48 €</s></td>
                    <td><s>249 €</s></td>
                </tr>
                <tr class="text-muted text-light">
                    <th scope="row"><s>bis 30.09.2020</s></th>
                    <td><s>84 €</s></td>
                    <td><s>52 €</s></td>
                    <td><s>259 €</s></td>
                </tr>
                <tr class="text-muted text-light">
                    <th scope="row"><s>bis 31.10.2020</s></th>
                    <td><s>89 €</s></td>
                    <td><s>56 €</s></td>
                    <td><s>269 €</s></td>
                </tr>
                <tr>
                    <th scope="row">bis 30.11.2020</th>
                    <td>94 €</td>
                    <td>60 €</td>
                    <td>279 €</td>
                </tr>
                <tr>
                    <th scope="row">bis 31.12.2020</th>
                    <td>99 €</td>
                    <td>64 €</td>
                    <td>289 €</td>
                </tr>
                <tr>
                    <th scope="row">Just Party 1</th>
                    <td>49 €</td>
                    <td>35 €</td>
                    <td>---</td>
                </tr>
                <tr>
                    <th scope="row">Just Party 2</th>
                    <td>39 €</td>
                    <td>25 €</td>
                    <td>---</td>
                </tr>
                <tr>
                    <th scope="row">Just Party 3</th>
                    <td>29 €</td>
                    <td>---</td>
                    <td>---</td>
                </tr>
                <tr>
                    <th scope="row">Just Party 4</th>
                    <td>19 €</td>
                    <td>---</td>
                    <td>---</td>
                </tr>
            </tbody>
        </table>
        <p class="text-muted">
            <small>Kinder bis 6 Jahre gratis.</small></br>
            <small>* Kinder im Alter zwischen 6 bis 14 Jahren.</small></br>
            <small>** 2 Erwachsene und 2 Kinder im Alter zwischen 6 bis 14 Jahren.</small>
        </p>
    </div>
</div>
<div class="jumbotron text-dark">
    <span class="dislay-1 slogan eyecatcher d-block">Tickets sichern!</span>
    <p>Schreib uns eine E-Mail an <a class="badge badge-dark" href="mailto:kontakt@spielcenter-chemnitz.de">kontakt@spielcenter-chemnitz.de</a> und sichere Dir
        jetzt Deine Tickets oder ruf uns direkt an.</p>
    <a class="btn btn-dark btn-lg d-block" href="tel:+4937133423340">Jetzt anrufen</a>
</div>