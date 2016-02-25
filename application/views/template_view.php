<!DOCTYPE html>
<!--[if lt IE 7]><html lang="ru" class="lt-ie9 lt-ie8 lt-ie7"><![endif]-->
<!--[if IE 7]><html lang="ru" class="lt-ie9 lt-ie8"><![endif]-->
<!--[if IE 8]><html lang="ru" class="lt-ie9"><![endif]-->
<!--[if gt IE 8]><!-->
<html lang="ru">
<!--<![endif]-->
<head>
    <meta charset="utf-8" />
    <title>Крюинговая компания Alexnika / crewing company Alexnika</title>
    <meta name="description" content="Крюинговая компания Alexnika Maritime Company LTD - Ростов-на-Дону трудоустройство на работу" />
    <meta name="keywords" content="Трудоустройство на работу моряков, крюинг, крюинговая компания, морская компания, судоводители, механики, матросы, повара, мотористы ">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="shortcut icon" href="favicon.png" />
    <link rel="stylesheet" href="../../libs/bootstrap/bootstrap-grid-3.3.1.min.css" />
    <link rel="stylesheet" href="../../libs/font-awesome-4.2.0/css/font-awesome.min.css" />
    <link rel="stylesheet" href="../../libs/fancybox/jquery.fancybox.css" />
    <link rel="stylesheet" href="../../libs/owl-carousel/owl.carousel.css" />
    <link rel="stylesheet" href="../../libs/countdown/jquery.countdown.css" />
    <link rel="stylesheet" href="../../css/fonts.css" />
    <link rel="stylesheet" href="../../css/main.css" />
    <link rel="stylesheet" href="../../css/media.css" />
</head>
<body>
<header class="top_header">
<?php require_once __DIR__ . "/include/header.php";  ?>

<?php if($is_slider): ?>
    <?php require_once __DIR__ .  '/include/slider.php'; ?>
<?php endif; ?>


</header>

<section class="order">
    <div class="container">
        <div class="col-md-12">
            <div class="row">
                <?php include 'application/views/'. $content_view; ?>
            </div>
        </div>
    </div>
</section>
<footer>
    <?php require_once __DIR__ . "/include/footer.php" ?>
</footer>
<!--[if lt IE 9]>
<script src="../../libs/html5shiv/es5-shim.min.js"></script>
<script src="../../libs/html5shiv/html5shiv.min.js"></script>
<script src="../../libs/html5shiv/html5shiv-printshiv.min.js"></script>
<script src="../../libs/respond/respond.min.js"></script>
<![endif]-->
<script src="../../libs/jquery/jquery-1.11.1.min.js"></script>
<script src="../../libs/jquery-mousewheel/jquery.mousewheel.min.js"></script>
<script src="../../libs/fancybox/jquery.fancybox.pack.js"></script>
<script src="../../libs/waypoints/waypoints-1.6.2.min.js"></script>
<script src="../../libs/scrollto/jquery.scrollTo.min.js"></script>
<script src="../../libs/owl-carousel/owl.carousel.min.js"></script>
<script src="../../libs/countdown/jquery.plugin.js"></script>
<script src="../../libs/countdown/jquery.countdown.min.js"></script>
<script src="../../libs/countdown/jquery.countdown-ru.js"></script>
<script src="../../libs/landing-nav/navigation.js"></script>
<script src="../../js/common.js"></script>
<!-- Yandex.Metrika counter --><!-- /Yandex.Metrika counter -->
<!-- Google Analytics counter --><!-- /Google Analytics counter -->
</body>
</html>