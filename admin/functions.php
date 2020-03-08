<?php 

function insert_categories() {
    // Set Global
    global $connection;

    // INSERT CATEGORY
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
    }

function display_categories() {

    // Set Global
    global $connection;

     // Create query
     $query = "SELECT * FROM categories";
     // Send query 
     $select_categories = mysqli_query($connection, $query);
     // Handle results
     while($row = mysqli_fetch_assoc($select_categories)) {
         // Assign variables
         $cat_id = $row['cat_id'];
         $cat_title = $row['cat_title'];
         // Insert values into table
         echo "<tr>";
         echo "<td>{$cat_id}</td>";
         echo "<td>{$cat_title}</td>";
         echo "<td><a href='categories.php?delete={$cat_id}'</a>Delete</td>";
         echo "<td><a href='categories.php?update={$cat_id}'</a>Update</td>";
         echo "</tr>";
     }
}

function delete_category() {
    // Set Global
    global $connection;
    
    // Check if delete button is pressed
    if(isset($_GET['delete'])) {
        // Assign variable
        $get_cat_id = $_GET['delete'];
        // Create query
        $query = "DELETE FROM categories WHERE cat_id = {$get_cat_id}";
        // Send query
        $delete_query = mysqli_query($connection, $query);
        // Refresh page
        header("Location: categories.php");
            
    }
}

?>