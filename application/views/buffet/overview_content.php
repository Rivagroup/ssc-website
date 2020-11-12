<h1 class="d-none">Buffets</h1>
<div class="card-columns">
    <?php foreach ($buffets as $buffet) : ?>
        <div class="card">
            <img src="<?= $buffet['img']; ?>" class="card-img-top" alt="<?= $buffet['title']; ?>">
            <div class="card-body">
                <h2 class="card-title h4"><?= $buffet['title']; ?></h2>
                <div class="card-text small">
                    <?= $buffet['desc']; ?>
                </div>
            </div>
            <div class="card-footer">
                <a href="<?= base_url("/buffet/details/".$buffet['title']); ?>" class="btn btn-small btn-primary d-block"><b>ab <?=$buffet['tier3price'] ?> €</b><br/><span class="small">weitere Informationen</span></a>
            </div>
        </div>
    <?php endforeach; ?>
</div>