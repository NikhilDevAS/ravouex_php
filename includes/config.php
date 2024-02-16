<?php
$conn = mysqli_connect("localhost", "root", "Raux150!", "ravouex");

if (!$conn) {

    var_dump("Something went wrong!");

    // var_dump($conn);

    // var_dump(mysqli_error($conn));
    // die(mysqli_error($conn));
}
?>