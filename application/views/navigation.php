<nav class="navbar navbar-expand-lg navbar-light mx-0 px-0">
    <a class="navbar-brand pt-3" href="<?= base_url(); ?>">
        <img src="<?= base_url('/assets/images/logo.svg'); ?>" height="50" alt="Spielcenter Chemnitz Logo">
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Angebote
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    <a class="dropdown-item" href="<?= base_url('kombi'); ?>">Kombinationspakete</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item disabled" href="#">Ferientickets</a>
                    <a class="dropdown-item disabled" href="#">Firmenfeiern/Teambuilding</a>
                    <a class="dropdown-item disabled" href="#">Junggesellenabschiede</a>
                    <a class="dropdown-item disabled" href="#">Schülertickets</a>
                    <a class="dropdown-item disabled" href="#">Weihnachtfeiern</a>
                </div>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Attraktionen
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    <a class="dropdown-item" href="<?= base_url('attraktion/minigolf'); ?>">Adventure Minigolf Chemnitz</a>
                    <a class="dropdown-item" href="<?= base_url('attraktion/bowling'); ?>">Bowling Chemnitz</a>
                    <a class="dropdown-item" href="<?= base_url('attraktion/escaperoom'); ?>">Escaperoom Chemnitz</a>
                    <a class="dropdown-item" href="<?= base_url('attraktion/lasertag'); ?>">Lasergame Chemnitz</a>
                </div>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Gastronomie
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    <a class="dropdown-item" href="<?= base_url('buffet'); ?>">Buffets</a>
                    <a class="dropdown-item disabled" href="#">Catering</a>
                    <a class="dropdown-item disabled" href="#">Partyplatten</a>
                </div>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Veranstaltungen
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    <a class="dropdown-item" href="https://lasergame-chemnitz.de/angebote/allyoucantag" target="_blank">All You Can Tag</a>
                    <a class="dropdown-item bg-warning" href="<?= base_url('silvester'); ?>">Silvester 2020/21</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item disabled" href="#">Bowling Brunch</a>
                    <a class="dropdown-item disabled" href="#">Jackpot-Bowling</a>
                    <a class="dropdown-item disabled" href="#">The Walking Pin</a>
                </div>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Anfahrt
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    <a class="dropdown-item" href="<?= base_url('karte'); ?>">Karte</a>
                    <a class="dropdown-item" href="http://maps.apple.com/?q=Spielcenter+Chemnitz" target="_blank">Navigieren</a>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link mx-3" href="https://shop.spielcenter-chemnitz.de/" target="_blank"><b>Shop</b></a>
            </li>
            <li class="nav-item">
                <a class="nav-link btn btn-primary text-white disabled" href="#" target="_blank">Jetzt Buchen</a>
            </li>
        </ul>
    </div>
</nav>