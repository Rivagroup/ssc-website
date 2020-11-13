<?php header('Content-type: text/xml'); ?>
<?= '<?xml version="1.0" encoding="UTF-8" ?>' ?>

<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9" xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xsi:schemaLocation="http://www.sitemaps.org/schemas/sitemap/0.9 http://www.sitemaps.org/schemas/sitemap/0.9/sitemap.xsd">
    <url>
        <loc><?= base_url();?></loc>
        <lastmod>2020-11-13T09:00:00+00:00</lastmod>
        <priority>1.0</priority>
    </url>

    <?php foreach ($urls as $url) : ?>
    <url>
        <loc><?= $url['loc']; ?></loc>
        <lastmod><?= $url['lastmod']; ?></lastmod>
        <priority><?= $url['priority']?></priority>
    </url>    
    <?php endforeach; ?>

</urlset>