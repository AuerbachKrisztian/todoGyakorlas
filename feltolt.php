<?php
    require_once 'kapcsolat.php';
    if (isset($_POST['submit'])) {
    $feladat = $_POST['feladat'];
    $datum = $_POST['ido'];
    $sql = "INSERT INTO todotabla(todo,datum) VALUES('$feladat','$datum')";

    $feltolt = mysqli_query($kapcsolat, $sql);
    
    if ($feltolt) {
        echo '<script> alert("Sikeres feltöltés")</script>';
    }
    mysqli_close($kapcsolat);
}
