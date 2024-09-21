<?php
include_once('disconnection.php');

try {
    if (isset($_POST['submit'])) {
        // Assuming 'opt' is an array, you can use implode to concatenate its values
        $opt = isset($_POST['opt']) ? implode(', ', $_POST['opt']) : '';
        $name = isset($_POST['name']) ? $_POST['name'] : '';
        $email = isset($_POST['email']) ? $_POST['email'] : '';

        // Validate and sanitize user inputs before using them in a query
        $opt = mysqli_real_escape_string($con, $opt);
        $name = mysqli_real_escape_string($con, $name);
        $email = mysqli_real_escape_string($con, $email);

        $query = mysqli_query($con, "INSERT INTO login(opt, email, name) VALUES ('$opt', '$name', '$email')");

        if ($query) {
            echo "<script>alert('Data inserted successfully');</script>";
        } else {
            echo "<script>alert('Error inserting data');</script>";
        }
        ?>
        <script>
            window.location.href = "index.html";
        </script>
        <?php
    }
} catch (Exception $e) {
    echo 'Error: ' . $e->getMessage() . ' Please try again!';
}   
?>
