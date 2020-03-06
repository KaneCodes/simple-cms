<!-- Blog Sidebar Widgets Column -->
<div class="col-md-4">

<!-- Blog Search Well -->
<div class="well">
    <h4>Blog Search</h4>
    <form action="search.php" method="post">
    <div class="input-group">
        <input name="search" type="text" class="form-control">
        <span class="input-group-btn">
            <button name="submit" class="btn btn-default" type="submit">
                <span class="glyphicon glyphicon-search"></span>
        </button>
        </span>
    </div>
    </form> <!-- Search Form-->
    <!-- /.input-group -->
</div>

<!-- Blog Categories Well -->
<div class="well">
    <?php 
    // Create query 
    $query = "SELECT * FROM categories";
    // Send query 
    $select_categories_sidebar = mysqli_query($connection, $query);
    ?>
    <h4>Blog Categories</h4>
    <div class="row">
        <div class="col-lg-12">
            <ul class="list-unstyled">
            <?php 
            // Handle results
            while($row = mysqli_fetch_assoc($select_categories_sidebar)) {
                // Assign Variables
                $cat_title = $row['cat_title'];
                // Insert data
                echo "<li><a href='#'>{$cat_title}</a></li>";
            }
            ?>
                </li>
            </ul>
        </div>
        
    </div>
    <!-- /.row -->
</div>

<!-- Side Widget Well -->
<?php include "widgets.php"; ?>

</div>