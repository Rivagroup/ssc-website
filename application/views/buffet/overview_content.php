<h1 class="d-none">Spielcenter Chemnitz - Buffets Übersicht</h1>
<div class="card-columns">
    <?php foreach ($buffets as $buffet) : ?>
        <div class="card h-100">
            <!-- img src="<?= $buffet['img']; ?>" class="card-img-top" alt="Buffet <?= $buffet['title']; ?> Foto" -->
            <div class="card-body">
                <h2 class="card-title h4"><?= $buffet['title']; ?></h2>
                <div class="card-text small">
                    <?= $buffet['teaser']; ?>
                </div>
            </div>
            <div class="card-footer">
                <a href="<?= base_url("/buffet/details/".$buffet['title']); ?>" class="btn btn-small btn-primary d-block"><b>ab <?=$buffet['tier3price'] ?> €</b><br/><span class="small">weitere Informationen</span></a>
            </div>
        </div>
    <?php endforeach; ?>
</div>