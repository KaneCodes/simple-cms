<!-- Update Category Form -->
<form action="" method="post">
    <div class="form-group">
        <label for="cat_title">Update Category</label>

        <?php 
        // GET VALUES FOR UPDATE CATEGORY QUERY
        if(isset($_GET['update'])) {
        // Assign variable from URL
        $cat_id = $_GET['update'];
        // Create query
        $query = "SELECT * FROM categories WHERE cat_id = $cat_id";
        // Send query 
        $select_categories_id = mysqli_query($connection, $query);
        // Handle results
        while($row = mysqli_fetch_assoc($select_categories_id)) {
        // Assign variables
        $cat_id = $row['cat_id'];
        $cat_title = $row['cat_title'];
        ?>

        <input value="<?php if(isset($cat_title)){echo $cat_title;} ?>" type="text" class="form-control" name="cat_title">
                
        <?php }} ?>
        
        <?php 
        // UPDATE QUERY
        if(isset($_POST['update_category'])) {
        // Assign variable from URL
        $the_cat_title = $_POST['cat_title'];
        // Create query
        $query = "UPDATE categories SET cat_title = '{$the_cat_title}' WHERE cat_id = {$cat_id} ";
        // Send query
        $update_query = mysqli_query($connection, $query);

        if(!$update_query) {

            die("Query failed" . mysqli_error($connection));
            }
            }
        ?>
    </div>
    <div class="form-group">
        <input class="btn btn-primary" type="submit" name="update_category" value="Update Category">
    </div>
</form>