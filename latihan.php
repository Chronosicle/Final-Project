<?php
    session_start();
    include 'conn.php';
  
    $sql = "SELECT * FROM users";

    $rows = mysqli_query($conn, $sql);
    $i = 0;
    mysqli_close($conn);

    $pageTitle = 'Materi';
    include 'header.php';
?>

<?php include 'footer.php' ?>