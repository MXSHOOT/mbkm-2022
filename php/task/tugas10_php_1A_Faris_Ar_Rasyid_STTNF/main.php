<?php
$req = $_REQUEST['hal'];
$label = empty($req) ? 'Home' : $req;
?>
<!-- Recent Sales Start -->
<div class="container-fluid pt-4 px-4">
                <div class="bg-light text-center rounded p-4">
                    <div class="d-flex align-items-center justify-content-between mb-4">
                        <h6 class="mb-0"><?= $label; ?></h6>
                        <a href="index.php?hal=home">Show All</a>
                    </div>
                    <?php
                    if(!empty($req)){
                        include_once $req.'.php';
                    }
                    //jika tidak ada request di url, arahkan ke halaman home
                    else{
                        include_once 'home.php';
                    }  ?>  
                </div>
            </div>
<!-- Recent Sales End -->