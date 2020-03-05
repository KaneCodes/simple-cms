<!-- Header -->
<?php include "includes/header.php"; ?>

    <!-- Navigation -->
    <?php include "includes/navigation.php"; ?>

    <!-- Page Content -->
    <div class="container">

        <div class="row">

            <!-- Blog Entries Column -->
            <div class="col-md-8">
            <?php 
            // Check if button has submitted
            if(isset($_POST['submit'])) {
                // Store user search to variable
                $search = $_POST['search'];
                // Create query
                $query = "SELECT * FROM posts WHERE post_tags LIKE '%$search%'";
                // Prepare query
                $search_query = mysqli_query($connection,  $query);
                // Check for errors
                if(!search_query) {
                    die("QUERY FAILED" . mysqli_error($connection));
                }
                // Check for results
                $count = mysqli_num_rows($search_query);
                // If 0 results found echo Alert
                if($count == 0) {

                    echo "<h1>No Results</h1>";

                } else {
                    // Handle results
                    while($row = mysqli_fetch_assoc($search_query)) {
                        // Assign data to variables
                        $post_title = $row['post_title'];
                        $post_author = $row['post_author'];
                        $post_date = $row['post_date'];
                        $post_image = $row['post_image'];
                        $post_content = $row['post_content'];

                    ?>
                        <h1 class="page-header">
                        Page Heading
                        <small>Secondary Text</small>
                        </h1>

                        <!-- First Blog Post -->
                        <h2>
                            <a href="#"><?php echo $post_title ?></a>
                        </h2>
                        <p class="lead">
                            by <a href="index.php"><?php echo $post_author ?></a>
                        </p>
                        <p><span class="glyphicon glyphicon-time"></span> <?php echo $post_date ?></p>
                        <hr>
                        <img class="img-responsive" src="images/<?php echo $post_image?>" alt="">
                        <hr>
                        <p> <?php echo $post_content ?> </p>
                        <a class="btn btn-primary" href="#">Read More <span class="glyphicon glyphicon-chevron-right"></span></a>

                    <?php } 
                
                }
            }
            ?>
            
            </div>

            <!-- Blog Sidebar -->
            <?php include "includes/sidebar.php"; ?>

        </div>
        <!-- /.row -->

        <hr>

<!-- Footer -->
<?php include "includes/footer.php"; ?>