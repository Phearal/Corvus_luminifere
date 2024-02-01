<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Site de présentation pour le titre professionnel Intégrateur Développeur Web">
    <title><?= TITLE ?></title>
    <link rel="stylesheet" href="<?= CSS ?>/style.css">
    <?php if (file_exists($pageLink)) : ?>
        <link rel="stylesheet" href="<?= $pageLink ?>">
    <?php endif ?>
    <link rel="stylesheet" href="<?= CSS ?>/responsive.css">
    <!-- <script defer src="<?= JS ?>/main.js"></script> -->
</head>

<body>
    <?php include TEMPLATE_PARTS . '/_header.php'; ?>

    <main>
        <?php include $template ?>
    </main>

    <?php include TEMPLATE_PARTS . '/_footer.php'; ?>
</body>

</html>