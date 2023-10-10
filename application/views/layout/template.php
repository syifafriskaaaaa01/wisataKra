<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title><?= $judul; ?></title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <?php require_once('_css.php');?>
</head>

<body>
    <?php require_once('_navbar.php');?>
    <?php require_once('_sidebar.php');?>
    <main id="main" class="main">
        <?php echo $contents;?>
    </main>
    <?php require_once('_footer.php');?>
    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>
    <?php require_once('_js.php');?>
</body>

</html>