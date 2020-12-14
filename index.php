<?php
    session_start();
    include 'conn.php';
  
    $sql = "SELECT * FROM users";

    $rows = mysqli_query($conn, $sql);
    $i = 0;
    mysqli_close($conn);

    $pageTitle = 'Homepage';
    include 'header.php';
    include 'homeheader.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
</style>
</head>
<body>
<div id="preloader">
    <div class="jumper">
        <div></div>
        <div></div>
        <div></div>
    </div>
</div>  
<nav>
  <ul class="menu">
    <li class="item"><a href="index.php">Home</a></li>
    <?php if ($_SESSION) : ?>
      <li class="item"><a href="materi.php">Materi</a></li>
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
<div class="row no-gutters">
  <div class="col-xl-12 img-cover">
    <img src="images/home-background.jpg" alt="Foto profil" class="cover-img">
      <div class="overlay-black"></div>
        <img class="profile-img img-responsive img img-thumbnail" src="images/profil.jpg" alt="Foto profil">
        <h2>@TriRizki</h2>
  </div>
</div>

<section class="section" id="contact-us">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-xs-12">
                    <div class="left-text-content">
                        <div class="section-heading">
                            <h6>Contact Us</h6>
                            <h2>Feel free to keep in touch with us!</h2>
                        </div>
                        <ul class="contact-info">
                            <li><img src="assets/images/contact-info-01.png" alt="">0851-5662-8350</li>
                            <li><img src="assets/images/contact-info-02.png" alt="">tririzki222@gmail.com</li>
                            <li><img src="assets/images/contact-info-03.png" alt="">www.test.com</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ***** Footer Start ***** -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-xs-12">
                    <div class="left-text-content">
                        <p>Copyright &copy; 2020 Breezed Co., Ltd.

                            - Design: <a rel="nofollow noopener" href="https://templatemo.com">TemplateMo</a></p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- ***** Contact Us Area Ends ***** -->
  <!-- <img src="images/third slide.jpeg" class="responsive"> -->
</body>
</html>

<?php 
  include 'footer.php';
  include 'homefooter.php';
?>