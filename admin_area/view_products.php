<?php

    if(!isset($_SESSION['admin_email'])){

        echo "<script>window.open('login.php','_self')</script>";

    }else{

?>

<div class="row"> <!-- row begin -->
    <div class="col-lg-12"> <!-- col-lg-12 begin -->
        <ol class="breadcrumb"> <!-- breadcrumb begin -->
            <li class="active"> <!-- active begin -->
            
            <i class="fa fa-dashboard"></i> Dashboard / View Products
            
            </li> <!-- active finish -->
        </ol> <!-- breadcrumb finish -->
    </div> <!-- col-lg-12 finish -->
</div> <!-- row finish -->


<div class="row"> <!-- row 2 begin -->
    <div class="col-lg-12"> <!-- col-lg-12 begin -->
        <div class="panel panel-default"> <!-- panel panel-default begin -->
            <div class="panel-heading"> <!-- panel-heading begin -->
                <h3 class="panel-title"> <!-- panel-title begin -->
            
                    <i class="fa fa-tags"></i> View Products

                </h3> <!-- panel-title finish -->
            </div> <!-- panel-heading finish -->

            <div class="panel-body"> <!-- panel-body begin -->
                <div class="table-responsive"> <!-- table-responsive begin -->
                    <table class="table table-striped table-bordered table-hover"> <!-- table table-striped table-bordered table-hover begin -->
                    
                    
                    
                    </table> <!-- table table-striped table-bordered table-hover finish -->
                </div> <!-- table-responsive finish -->
            </div> <!-- panel-body finish -->

        </div> <!-- panel panel-default finish -->
    </div> <!-- col-lg-12 finish -->
</div> <!-- row 2  finish -->

















    <?php } ?>