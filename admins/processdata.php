
<?php
// Check if the form has been submitted
if (isset($_POST['submit'])) {
    // Retrieve form data
    $title = $_POST['title'];
    $description = $_POST['description'];
    $images = $_POST['images'];
    $category = $_POST['category'];
    $brand = $_POST['brand'];
    $color = $_POST['color'];
    $size = $_POST['size'];
    
    // Save the data to a file (for simplicity)
    $file = 'data.txt';
    $data = "$title|$description|$images|$category|$brand|$color|$size\n";
    file_put_contents($file, $data, FILE_APPEND);
    
    // Redirect to a page to display the cards
    header("Location: display.php");
    exit();
}
?>
