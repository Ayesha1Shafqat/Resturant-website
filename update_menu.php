<?php
include 'db_connect.php';

if (isset($_POST['id'])) {
    $id = $_POST['id'];
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $description = mysqli_real_escape_string($conn, $_POST['description']);
    $price = floatval($_POST['price']);
    $category = mysqli_real_escape_string($conn, $_POST['category']);

    $sql = "UPDATE menu_items SET 
                name='$name', 
                description='$description', 
                price='$price', 
                category='$category'
            WHERE id='$id'";

    if (mysqli_query($conn, $sql)) {
        header("Location: view_menu.php?msg=updated");
        exit();
    } else {
        echo "Error updating item: " . mysqli_error($conn);
    }
} else {
    echo "Invalid request.";
}
?>
