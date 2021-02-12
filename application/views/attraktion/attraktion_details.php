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
    <?php foreach ($attraktionGalleryThumbnails as $key => $thumb) : ?>
      <a href="#" class="mx-auto w-25 float-left" data-toggle="modal" data-target="#lightboxModal">
        <img src="<?= $thumb['url']; ?>" class="img-thumbnail" alt="<?= $thumb['alt']; ?>" data-target="#lightboxCarousel" data-slide-to="<?= $key; ?>">
      </a>
    <?php endforeach; ?>
  </div>
  <div class="card-footer">
    <a href="<?= $attraktionUrl; ?>" target="_blank" class="btn btn-primary d-block">weitere Informationen <i class="small fas fa-external-link-alt"></i></a>
  </div>
</div>

<div class="modal fade" id="lightboxModal" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog modal-xl">
    <div class="modal-content">
      <div class="modal-header">
        <?= $attraktionTitle; ?> Eindrücke
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

        <div id="lightboxCarousel" class="carousel slide">
          <ol class="carousel-indicators">
            <?php for ($i = 0; $i < sizeof($attraktionGallery); $i++) : ?>
              <li data-target="#lightboxCarousel" data-slide-to="<?= $i ?>" <?= $i == 0 ? 'class="active"' : '' ?>></li>
            <?php endfor; ?>
          </ol>
          <div class="carousel-inner">
            <?php foreach ($attraktionGallery as $key => $image) : ?>
              <div class="carousel-item  <?= $key == 0 ? 'active' : '' ?>">
                <figure class="figure">
                  <img src="<?= $image['url']; ?>" class="figure-img img-fluid rounded" alt="<?= $image['alt']; ?>">
                  <figcaption class="figure-caption"><?= $image['alt']; ?></figcaption>
                </figure>
              </div>
            <?php endforeach; ?>
          </div>
          <a class="carousel-control-prev" href="#lightboxCarousel" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#lightboxCarousel" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>