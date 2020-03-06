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
                        <?php 
                        // Check if button submitted
                        if(isset($_POST['submit'])) {
                        // Assign Variables
                        $cat_title = $_POST['cat_title'];

                        // Validation checks
                        if($cat_title == "" || empty($cat_title)) {

                            echo "This field should not be empty";

                        } else {
                            // Create Query
                            $query = "INSERT INTO categories(cat_title) ";
                            $query .= "VALUE('{$cat_title}') ";
                            // Send Query
                            $create_category_query = mysqli_query($connection, $query);
                            // Display error if query fails
                            if(!$create_category_query) {

                                die('QUERY FAILED' . mysqli_error($connection));
                                
                                }
                            }

                        }
                        ?>

                        <!-- Add Category Form -->
                        <form action="" method="post">
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
                         <?php 
                        // Create query 
                        $query = "SELECT * FROM categories";
                        // Send query 
                        $select_categories = mysqli_query($connection, $query);
                        ?>
                        <!-- Categories Table -->
                         <table class="table table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Category Title</th>
                                
                                </tr>
                            </thead>
                            <tbody>
                            <?php 
                            // Handle results
                            while($row = mysqli_fetch_assoc($select_categories)) {
                                // Assign variableS
                                $cat_id = $row['cat_id'];
                                $cat_title = $row['cat_title'];
                                // Insert values into table
                                echo "<tr>";
                                echo "<td>{$cat_id}</td>";
                                echo "<td>{$cat_title}</td>";
                                echo "</tr>";
                            }
                            ?>
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