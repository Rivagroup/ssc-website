<style>
  .card-image {
  position: relative;
}

.image-overlay {
    position: absolute;
    top: 0;
    bottom: 0;
    left: 0;
    right: 0;
    height: 100%;
    width: 100%;
    opacity: 0;
    transition: .5s ease;
    background: rgba(0, 0, 0, 0.5);
  }

.card:hover .image-overlay {
    opacity: 1;
  }
</style>

<div class="card">
  <div class="card-image">
    <img src="<?= $attraktionHeaderImageUrl; ?>" class="card-img-top" alt="<?= $attraktionTitle; ?>" />
    <div class="card-img-overlay">
      <h1 class="card-title text-white h3"><?= $attraktionTitle; ?></h1>
    </div>
  </div>

  <div class="card-body">
    <p class="card-text"><?= $attraktionDesc; ?></p>
    <?php foreach($attraktionGallery as $image): ?>
      <figure class="figure">
        <img src="<?= $image['url']; ?>" class="figure-img img-fluid rounded" alt="<?= $image['alt']; ?>">
        <figcaption class="figure-caption"><?= $image['alt']; ?></figcaption>
      </figure>
    <?php endforeach; ?>
  </div>
  <div class="card-footer">
    <a href="<?= $attraktionUrl; ?>" target="_blank" class="btn btn-primary d-block">weitere Informationen</a>
  </div>
</div>