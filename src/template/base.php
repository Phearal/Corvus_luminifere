<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="L'atelier créatif Corvus luminifère propose des ateliers et expositions artistiques. Découvrez nos ateliers de dessin et peinture.">
    <link rel="icon" type="image/x-icon" href="<?= IMAGES ?>/icons/favicon.ico">
    <title><?= TITLE ?></title>
    <link rel="stylesheet" href="<?= CSS ?>/style.css">
    <?php if (file_exists($pageLink)) : ?>
        <link rel="stylesheet" href="<?= $pageLink ?>">
    <?php endif ?>
    <script defer src="<?= JS ?>/menu.js"></script>
    <script defer src="https://cdn.jsdelivr.net/npm/@glidejs/glide"></script>
    <script defer src="<?= JS ?>/carousel.js"></script>
</head>

<body>
    <?php include TEMPLATE_PARTS . '/_header.php'; ?>

    <?php include $template ?>

    <?php include TEMPLATE_PARTS . '/_footer.php'; ?>
</body>

</html>