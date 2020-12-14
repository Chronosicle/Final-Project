<?php
    session_start();

    $id = $_GET['id'];
    if(!($_SESSION)){
        header('location: login.php?redirectProfile='.$id);
    }

    include 'conn.php';
    $sql = "SELECT * FROM users WHERE id=$id LIMIT 1";

    $rows = mysqli_query($conn,$sql);
    $i = 0;
    mysqli_close($conn);
    $data = mysqli_fetch_assoc($rows);

    $pageTitle = 'Profile @'.$data['username'].' | Instagram KA WE :)';
    include 'header.php';
    include 'homeheader.php';
?>
<nav>
  <ul class="menu">
    <li class="item"><a href="index.php">Home</a></li>
    <li class="item"><a href="#">Contact</a>
    <?php if ($_SESSION) : ?>
      <li class="item"><a href="materi.php">Materi</a></li>
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
            <img src="uploads/<?php echo $data['image']?>" alt="Foto profil <?php echo $data['username'] ?>" class="cover-img">
            <div class="overlay-black"></div>
            <img class="profile-img img-responsive img img-thumbnail" src="uploads/<?php echo $data['image'] ?>" alt="Foto profil <?php echo  $data['username'] ?>">
            <h2>@<?php echo $data['username'] ?></h2>
        </div>
    </div>
    <div class="row no-gutters" style="margin-top: 60px;">
        <div class="col-xl-3">
            <ul>
                <li><h4>Explore</h4></li>
                <li><h4>Settings</h4></li>
            </ul>
        </div>
        <div class="col-xl-6 img-cover">
            <ul>
                <li>
                    <h4>Bio</h4>
                    <a><?php echo $data['bio']; ?></a>
                </li><br />
                <li>
                    <h4>Desc</h4>
                    <a><?php echo $data['description']; ?></a>
                </li><br />
                <li>
                    <h4>Contact</h4>
                    <a><?php echo $data['email']; ?></a>
                </li><br />
            </ul>
        </div>
        <div class="col-xl-3"></div>
    </div>

<?php
    include 'footer.php';
    include 'homefooter.php';
?>    