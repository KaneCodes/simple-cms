<!-- Header-->
<?php include "includes/admin_header.php"; ?>

<body>

<div id="wrapper">
<!-- Navigation -->
<?php include "includes/admin_navigation.php"; ?>

<div id="page-wrapper">

    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">
                    Categories
                    <small>Author</small>
                </h1>
                <div class="col-xs-6">
                <?php insert_categories(); ?>

            <!-- Categories Form -->
                <form action="" method="post">
                    <div class="form-group">
                        <label for="cat_title">Add Category</label>
                        <input class="form-control" type="text" name="cat_title">
                    </div>
                    <div class="form-group">
                        <input class="btn btn-primary" type="submit" name="submit" value="Add Category">
                    </div>
                </form>

                <?php 
                // UPDATE AND INCLUDE
                if(isset($_GET['update'])) {

                    $cat_id = $_GET['update'];

                    include "includes/update_categories.php";
                }
                
                ?>
                </div>
                <!-- /.Categories Form -->

                 <!-- Categories Table -->
                <div class="col-xs-6">
                <table class="table table-bordered table-hover">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Category Title</th>
                    
                    </tr>
                </thead>
                <tbody>

                <?php display_categories(); ?> 

                <?php delete_category(); ?>

                </tbody>
                </table>
                <!-- /.Categories Table -->
                </div>
            </div>
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</div>
<!-- /#page-wrapper -->

<?php include "includes/admin_footer.php"; ?>