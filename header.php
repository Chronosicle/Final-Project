<!DOCTYPE html>
    <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title><?php echo $pageTitle ?></title>
            <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
            <link rel="stylesheet" type="text/css" href="css/style2.css" />
            
            <link href="https://fonts.googleapis.com/css?family=Raleway:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">
            <link rel="stylesheet" href="assets/css/templatemo-breezed.css">

            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
            <link rel="stylesheet" href="css/style.css">
        </head>

        <body>
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