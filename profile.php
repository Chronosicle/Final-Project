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

    $pageTitle = 'Profile @'.$data['username'];
    include 'header.php';
?>
    
    <div class="row no-gutters">
        <div class="col-xl-12 img-cover">
            <img src="uploads/<?php echo $data['image']?>" alt="Foto profil <?php echo $data['username'] ?>" class="cover-img">
            <div class="overlay-black"></div>
            <img class="profile-img img-responsive img img-thumbnail" src="uploads/<?php echo $data['image'] ?>" alt="Foto profil <?php echo  $data['username'] ?>">
            <h2>@<?php echo $data['username'] ?></h2>
        </div>
    </div>
    <div class="table-responsive">
      <table class="table">
        <thead class="thead-dark">
          <tr>
            <th scope="col">#</th>
            <th scope="col">Bio</th>
            <th scope="col">Desc</th>
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
    </div>

<?php
    include 'footer.php';
?>    