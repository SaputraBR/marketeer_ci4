<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, viewport-fit=cover">
        <meta name='viewport' content='width=device-width, initial-scale=1, maximum-scale=5, user-scalable=yes, viewport-fit=cover, shrink-to-fit=no' />
        <title>MarketEer</title>
        <link rel="icon" href="/img/MARKETEER_CROP.png">
        <link rel="stylesheet" type="text/css" href="/dist/tailwind.css">
        <link rel="stylesheet" type="text/css" href="/src/custom.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Sulphur+Point:wght@300&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Montserrat&family=Open+Sans&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Secular+One&display=swap" rel="stylesheet">
        <script src="https://cdn.ckeditor.com/4.19.1/standard/ckeditor.js"></script>
        <script src="https://kit.fontawesome.com/20fcff0bce.js" crossorigin="anonymous"></script>
        <script type="text/javascript" src="/src/custom.js"></script>
        <?= $this->renderSection('style')?>
    </head>

    <body>
        <?= $this->include('layout/admin/navbar')?>
        <?= $this->renderSection('content')?>
        <?= $this->renderSection('script')?>
        <script type="text/javascript" src="/src/admin.js"></script>
    </body>
</html>