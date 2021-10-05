<?php

include("config.php");

if(isset($_POST['cmn'])){

    $komen = $_POST['comment'];

    $sql = "INSERT INTO Komentar  (Komentar) VALUE ('$komen')";
    $query = mysqli_query($db, $sql);

    if( $query ) {
        header('Location: index.php?status=sukses');
    } else {
        header('Location: index.php?status=gagal');
    }


} else {
    die("Akses dilarang...");
}

?>