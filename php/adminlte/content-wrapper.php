<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <?php include_once 'content-header.php'; ?>

    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
        <div class="container-fluid">
            <?php
            //tangkap request url
            $req = $_REQUEST['hal'];
            if(!empty($req)){
              include_once $req.'.php';
            }
            else{
              include_once 'home.php';
            }
            ?>
        </div>
        <!-- /.container-fluid -->
    </div>
    <!-- /.content -->
</div>