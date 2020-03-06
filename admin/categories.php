<?php include "includes/admin_header.php"; ?>

<body>

    <div id="wrapper">
    
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
                        <!-- Add Category Form -->
                        <form action="">
                            <div class="form-group">
                                <label for="cat_title">Add Category</label>
                                <input class="form-control" type="text" name="cat_title">
                            </div>
                            <div class="form-group">
                                <input class="btn btn-primary" type="submit" name="submit" value="Add Category">
                            </div>
                        </form>
                        </div>
                         <!-- /.Addy Category Form  -->

                         <div class="col-xs-6">
                         <table class="table table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Category Title</th>
                                
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Test 1</td>
                                    <td>TEST 2</td>
                                </tr>
                            </tbody>
                         
                         
                         
                         </table>
                         
                         
                         
                         </div>
                        
                        
                        
                    </div>
                </div>
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /#page-wrapper -->

<?php include "includes/admin_footer.php"; ?>