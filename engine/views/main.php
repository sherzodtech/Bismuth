<!doctype html>
<html lang="<?php echo $language; ?>">
    <head>
        <meta http-equiv="content-type" content="text/html; charset=<?php echo $charset; ?>">
        <title><?php ptitle(); ?> — <?php echo $title; ?></title>
        <meta name="description" content="<?php pdescription(); ?>">
        <meta name="keywords" content="<?php echo pkeywords(); ?>">
        <meta name="author" Content="<?php echo $author; ?>">
        <meta name="copyright" Content="<?php echo $company; ?>">
        <meta name=viewport content="width=device-width,initial-scale=1"/>
        <link href="/favicon.ico" rel="shortcut icon"  type="image/x-icon" />
        <link rel="stylesheet" type="text/css" href="//site.ru/source/css/main.css">
        <link rel="stylesheet" type="text/css" href="//site.ru/source/css/adapt.css">
        <script src="//code.jquery.com/jquery-2.2.4.min.js"></script>
    </head>
    <body>
<header>
<?php head(); ?>
</header>
<content>
    <div class="container">
        <div id="content" class="content">
<?php content(); ?>
        </div>
    </div>
</content>
<footer>
<?php foot(); ?>
</footer>
    </body>
</html>