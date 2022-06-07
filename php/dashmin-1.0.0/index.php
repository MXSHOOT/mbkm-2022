<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>DASHMIN - Bootstrap Admin Template</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">
    <?php include_once 'kumpulas_css.php'; ?>
</head>

<body>
    <div class="container-xxl position-relative bg-white d-flex p-0">
        <?php include_once 'spinner.php'; ?>
        <?php include_once 'sidebar.php'; ?>
        <!-- Content Start -->
        <div class="content">
            <?php include_once 'navbar.php'; ?>
            <?php include_once 'main.php'; ?>
            <?php include_once 'footer.php'; ?>
            
        </div>
        <!-- Content End -->


        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>
    <?php include_once 'kumpulan_js.php'; ?>
</body>

</html>