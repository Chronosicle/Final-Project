<?php
    session_start();
    include 'conn.php';

    $sql = "SELECT * FROM users";

    $rows = mysqli_query($conn, $sql);
    $i = 0;
    mysqli_close($conn);

    $pageTitle = 'Web Project';
    
    include 'homeheader.php';

?>

<nav>
  <ul class="menu">
    <li class="item"><a href="index.php">Home</a></li>
    <!-- <li class="item has-submenu">
      <a tabindex="0">Materi</a>
      <ul class="submenu">
        <li class="subitem"><a href="materi.php#C4">Sistem Bilangan</a></li>
        <li class="subitem"><a href="materi.php#C10">Gerbang Logika</a></li>
        <li class="subitem"><a href="#">RISC & CISC</a></li>
        <li class="subitem"><a href="#">Flip-Flop</a></li>
      </ul> -->
    <li class="item"><a href="#">Contact</a>
    <?php if ($_SESSION) : ?>
      <li class="item"><a href="profile.php?id=<?php echo $_SESSION['id']?>" >Profile</a>
      <li class="item button"><a href="update.php">Update</a></li>
      <li class="item button"><a href="logout.php">Log Out</a></li>
    <?php else: ?>
      <li class="item button"><a href="login.php">Log In</a></li>
      <li class="item button secondary"><a href="register.php">Sign Up</a></li>
    <?php endif; ?>
      <li class="toggle"><a href="#"><i class="fas fa-bars"></i></a></li>
  </ul>
</nav>

<!DOCTYPE html>
<html>
<head>
<style>
.responsive {
  max-width: 100%;
  height: auto;
}
</style>
</head>
<body>
</body>
</html>

<?php
    
    include 'homefooter.php';
?>    