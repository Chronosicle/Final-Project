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
    <table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">#</th>
      <th scope="col">Bio</th>
      <th scope="col">Description</th>
      <th scope="col">Contact</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td><?php echo $data['bio'];?></td>
      <td><?php echo $data['description'];?></td>
      <td><?php echo $data['email'];?></td>
    </tr>
  </tbody>
</table>

<?php
    include 'footer.php';
    include 'homefooter.php';
?>    