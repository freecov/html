<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Sales targets- Covide CRM</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- less styles -->
    <link rel="stylesheet/less" href="less/bootstrap.less">

    <!--[if lt IE 8]>
    <link rel="stylesheet" href="less/covide/font-awesom-ie7.css">
    <![endif]-->

    <script type="text/javascript">
        less = { env:"development" };
    </script>
    <script src="js/lib/less-1.3.3.min.js"></script>

    <!--[if lt IE 9]>
        <script src="js/polyfill/html5.js"></script>
        <script src="js/polyfill/respond/respond.min.js"></script>
    <![endif]-->

    <script data-main="js/app" src="js/lib/require-jquery.min.js"></script>

    <!-- Fav and touch icons -->
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="ico/apple-touch-icon-57-precomposed.png">
    <link rel="shortcut icon" href="ico/favicon.png">
</head>

<body>
    <div class="container-fluid">
        <? $activeMenuItem = 'sales'; ?>
        <? include_once "_parts/header.php"; ?>
        <section class="covide-content">
            <? include_once "_content/sales_targets.php"; ?>
        </section>
        <? include_once "_parts/footer.php"; ?>
    </div>
</body>
</html>