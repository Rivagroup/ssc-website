<!doctype html>
<html lang="de" class="bg-light">

<head>
    <title><?= $title; ?></title>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="<?= $robots ?>" />
    <meta name="description" content="<?= $description ?>" />
    <meta name="keywords" content="<?= $keywords_private . ',' . $keywords_alldomains; ?>" />
    <meta name="author" content="<?= $author ?>" />
    <meta name="co-author" content="<?= $co_author ?>" />
    <meta name="pragma" content="<?= $cache ?>">

    <?= $meta_postal ?>
    <?= $meta_og ?>
    <?= $meta_itemprop ?>
    <?= $meta_links ?>

    <link href="<?= base_url('assets/images/favicon.png'); ?>" rel="icon" type="image/png" />
    <link href="<?= base_url('assets/images/favicon.png'); ?>" rel="apple-touch-icon" />
    <link href="<?= base_url('assets/css/scc.bootstrap.min.css'); ?>" rel="stylesheet" />
    <link href="<?= base_url('assets/css/custom.css'); ?>"rel="stylesheet" />
    <link href="//use.fontawesome.com/releases/v5.15.1/css/all.css" crossorigin="anonymous" rel="stylesheet" />
    <script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" crossorigin="anonymous"></script>
</head>

<body class="bg-white">
    <? $this->load->view("navigation"); ?>
    <? $this->load->view($main_content) ?>
    <? $this->load->view("footer"); ?>
</body>

</html>