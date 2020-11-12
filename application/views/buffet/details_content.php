<div class="card">
    <img src="<?= $buffet['img']; ?>" class="card-img-top" alt="<?= $buffet['title']; ?>">
    <div class="card-body">
        <h2 class="card-title h4"><?= $buffet['title']; ?></h2>
        <div class="card-text small">
            <?= $buffet['desc']; ?>
            <div class="row">
                <div class="col-12 col-md-4">
                    <h3 class="h5 mt-3">Vorspeisen</h3>
                    <ul class="list-group">
                        <?php foreach ($buffet['starter'] as $starter) : ?>
                            <li class="list-group-item"><?= $starter; ?></li>
                        <?php endforeach; ?>
                    </ul>
                </div>
                <div class="col-12 col-md-4">
                    <h3 class="h5 mt-3">Hauptgang</h3>
                    <ul class="list-group">
                        <?php foreach ($buffet['entree'] as $entree) : ?>
                            <li class="list-group-item"><?= $entree; ?></li>
                        <?php endforeach; ?>
                    </ul>
                </div>
                <div class="col-12 col-md-4">
                    <h3 class="h5 mt-3">Desserts</h3>
                    <ul class="list-group">
                        <?php foreach ($buffet['dessert'] as $dessert) : ?>
                            <li class="list-group-item"><?= $dessert; ?></li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="card-footer">
        <a href="<?= base_url("/buffet/"); ?>" class="btn btn-small btn-light mb-1"><i class="far fa-arrow-alt-circle-left"></i> zurück zur Übersicht</a>
        <a href="tel:+4937133423340" class="btn btn-success btn-lg d-block"><i class="fas fa-phone"></i> persönliche Beratung</a>
    </div>
</div>