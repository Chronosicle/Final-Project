<?php
    session_start();
    include 'conn.php';
  
    $sql = "SELECT * FROM users";

    $rows = mysqli_query($conn, $sql);
    $i = 0;
    mysqli_close($conn);

    $pageTitle = 'Materi';
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title><?php echo $pageTitle ?></title>
    <!-- Custom fonts for this template-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link href="sb/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <!-- Custom styles for this template-->
    <link href="sb/sb-admin-2.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="assets/css/templatemo-breezed.css">
</head>

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

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <div class="row">

                        <div class="col-lg-6">
                        <div class="card shadow mb-4">
                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="headingTwo">
                                    <h4 class="panel-title">
                                        <a href="#collapseCardTwo" class="d-block card-header py-3" data-toggle="collapse" data-parent="#accordion"
                                            role="button" aria-expanded="false" aria-controls="collapseCardTwo">
                                                <h6 class="m-0 font-weight-bold text-primary">Sistem Bilangan</h6>
                                        </a>
                                    </h4>
                                </div>
                                <!-- Card Content - Collapse -->
                                <div class="panel-collapse collapse" id="collapseCardTwo" role="tabpanel" aria-labelledby="headingTwo">
                                    <div class="card-body">
                                    <div class="table-responsive">
                                    <table class="table" style="text-align:center;">
                                        <thead class="thead-dark">
                                            <tr>
                                            <th scope="col">Desimal <br> (basis 2)</th>
                                            <th scope="col">Biner <br> (basis 2)</th>
                                            <th scope="col">Oktal <br> (basis 8)</th>
                                            <th scope="col">Heksadesimal <br> (basis 16)</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>00</td>
                                                <td>0000</td>
                                                <td>00</td>
                                                <td>0</td>
                                            </tr>
                                            <tr>
                                                <td>01</td>
                                                <td>0001</td>
                                                <td>01</td>
                                                <td>1</td>
                                            </tr>
                                            <tr>
                                                <td>02</td>
                                                <td>0010</td>
                                                <td>02</td>
                                                <td>2</td>
                                            </tr>
                                            <tr>
                                                <td>03</td>
                                                <td>0011</td>
                                                <td>03</td>
                                                <td>3</td>
                                            </tr>
                                            <tr>
                                                <td>04</td>
                                                <td>0100</td>
                                                <td>04</td>
                                                <td>4</td>
                                            </tr>
                                            <tr>
                                                <td>05</td>
                                                <td>0101</td>
                                                <td>05</td>
                                                <td>5</td>
                                            </tr>
                                            <tr>
                                                <td>06</td>
                                                <td>0110</td>
                                                <td>06</td>
                                                <td>6</td>
                                            </tr>
                                            <tr>
                                                <td>07</td>
                                                <td>0111</td>
                                                <td>07</td>
                                                <td>7</td>
                                            </tr>
                                            <tr>
                                                <td>08</td>
                                                <td>1000</td>
                                                <td>10</td>
                                                <td>8</td>
                                            </tr>
                                            <tr>
                                                <td>09</td>
                                                <td>1001</td>
                                                <td>11</td>
                                                <td>9</td>
                                            </tr>
                                            <tr>
                                                <td>10</td>
                                                <td>1010</td>
                                                <td>12</td>
                                                <td>A</td>
                                            </tr>
                                            <tr>
                                                <td>11</td>
                                                <td>1011</td>
                                                <td>13</td>
                                                <td>B</td>
                                            </tr>
                                            <tr>
                                                <td>12</td>
                                                <td>1100</td>
                                                <td>14</td>
                                                <td>C</td>
                                            </tr>
                                            <tr>
                                                <td>13</td>
                                                <td>1101</td>
                                                <td>15</td>
                                                <td>D</td>
                                            </tr>
                                            <tr>
                                                <td>14</td>
                                                <td>1110</td>
                                                <td>16</td>
                                                <td>E</td>
                                            </tr>
                                            <tr>
                                                <td>15</td>
                                                <td>1111</td>
                                                <td>17</td>
                                                <td>F</td>
                                            </tr>
                                        </tbody>
                                        </table>
                                        </div>
                                        <p> <strong>Bilangan dengan basis (radix) r terdiri dari {0,1,2 …, r-1} </strong></p><br>
                                        <h1>Kode yang lain</h1>
                                        <div class="table-responsive">
                                        <table class="table" style="text-align:center;">
                                        <thead class="thead-dark">
                                            <tr>
                                            <th scope="col">Desimal</th>
                                            <th scope="col">BCD</th>
                                            <th scope="col">2 4 2 1</th>
                                            <th scope="col">8 4 -2 -1</th>
                                            <th scope="col">Excess-3</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>0</td>
                                                <td>0000</td>
                                                <td>0000</td>
                                                <td>0000</td>
                                                <td>0011</td>
                                            </tr>
                                            <tr>
                                                <td>1</td>
                                                <td>0001</td>
                                                <td>0001</td>
                                                <td>0111</td>
                                                <td>0100</td>
                                            </tr>
                                            <tr>
                                                <td>2</td>
                                                <td>0010</td>
                                                <td>0010</td>
                                                <td>0110</td>
                                                <td>0101</td>
                                            </tr>
                                            <tr>
                                                <td>3</td>
                                                <td>0011</td>
                                                <td>0011</td>
                                                <td>0101</td>
                                                <td>0110</td>
                                            </tr>
                                            <tr>
                                                <td>4</td>
                                                <td>0100</td>
                                                <td>0100</td>
                                                <td>0100</td>
                                                <td>0111</td>
                                            </tr>
                                            <tr>
                                                <td>5</td>
                                                <td>0101</td>
                                                <td>1011</td>
                                                <td>1011</td>
                                                <td>1000</td>
                                            </tr>
                                            <tr>
                                                <td>6</td>
                                                <td>0110</td>
                                                <td>1100</td>
                                                <td>1010</td>
                                                <td>1001</td>
                                            </tr>
                                            <tr>
                                                <td>7</td>
                                                <td>0111</td>
                                                <td>1101</td>
                                                <td>1001</td>
                                                <td>1010</td>
                                            </tr>
                                            <tr>
                                                <td>8</td>
                                                <td>1000</td>
                                                <td>1110</td>
                                                <td>1000</td>
                                                <td>1011</td>
                                            </tr>
                                            <tr>
                                                <td>9</td>
                                                <td>1001</td>
                                                <td>1111</td>
                                                <td>1111</td>
                                                <td>1100</td>
                                            </tr>
                                            <tr>
                                                <td>Tidak Digunakan</td>
                                                <td>1010</td>
                                                <td>0101</td>
                                                <td>0001</td>
                                                <td>0000</td>
                                            </tr>
                                            <tr>
                                                <td>Tidak Digunakan</td>
                                                <td>1011</td>
                                                <td>0110</td>
                                                <td>0010</td>
                                                <td>0001</td>
                                            </tr>
                                            <tr>
                                                <td>Tidak Digunakan</td>
                                                <td>1100</td>
                                                <td>0111</td>
                                                <td>0011</td>
                                                <td>0010</td>
                                            </tr>
                                            <tr>
                                                <td>Tidak Digunakan</td>
                                                <td>1101</td>
                                                <td>1000</td>
                                                <td>1100</td>
                                                <td>1101</td>
                                            </tr>
                                            <tr>
                                                <td>Tidak Digunakan</td>
                                                <td>1110</td>
                                                <td>1001</td>
                                                <td>1101</td>
                                                <td>1110</td>
                                            </tr>
                                            <tr>
                                                <td>Tidak Digunakan</td>
                                                <td>1111</td>
                                                <td>1010</td>
                                                <td>1110</td>
                                                <td>1111</td>
                                            </tr>
                                        </tbody>
                                        </table>
                                        </div>

                                        <p>ASCII (American Standard Code for Information Interchange)</p>
                                        <p>Setiap kode direpresentasikan oleh 7 bit</p>
                                        <p>Terdiri dari:
                                        94 karakter yang dapat dicetak (26 huruf besar, 26 huruf kecil, 10 angka, 32 karakter khusus)
                                        34 karakter yang tidak dapat dicetak (digunakan untuk fungsi kontrol)
                                        </p>
                                        <h1>Referensi</h1>
                                        <p>Morris Mano, Digital Design 5th Edition, Pearson Prentice Hall, 2011</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                            <!-- Basic Card Example -->
                            <div class="card shadow mb-4">
                            <div class="panel panel-default">
                                        <div class="panel-heading" role="tab" id="headingThree">
                                            <h4 class="panel-title">
                                                <a href="#collapseCardThree" class="d-block card-header py-3" data-toggle="collapse" data-parent="#accordion"
                                                    role="button" aria-expanded="false" aria-controls="collapseCardThree">
                                                    <h6 class="m-0 font-weight-bold text-primary">Kode Hamming</h6>
                                                </a>
                                            </h4>
                                        </div>
                                <!-- Card Content - Collapse -->
                                        <div class="panel-collapse collapse" id="collapseCardThree" role="tabpanel" aria-labelledby="headingThree">
                                            <div class="card-body">
                                                <img src="images/KodeHamming/1.png" class="img-fluid"> <br>
                                                <p>Menambahkan bit-bit paritas untuk mendeteksi dan mengkoreksi kesalahan</p>
                                                <p>Hamming(7,4) adalah 7 bit kode yang tersusun atas 4 bit data dan 3 bit paritas</p>
                                                <h4><strong>Konstruksi kode adalah :</strong></h4>
                                                <p>b1 b2 b3 b4 b5 b6 b7 <br> p1 p2 d1 p3 d2 d3 d4</p> <br>
                                                <p>bi adalah bit posisi ke-i <br> pi adalah bit paritas ke-i <br> di adalah bit data ke-i</p>
                                                <p>p1 untuk mengecek bit ke-1,3,5,7<br>p2 untuk mengecek bit ke-2,3,6,7<br>p3 untuk mengecek bit ke-4,5,6,7</p>
                                                <p>Contoh :</p>
                                                <p>Dengan paritas genap, kode BCD 1001 dikodekan menjadi: 0011001</p>
                                                <p>p1 : 1 + 0 + 1 = 2 (genap), maka p1 = 0</p>
                                                <p>p2 : 1 + 0 + 1 = 2 (genap), maka p2 = 0</p>
                                                <p>p3 : 0 + 0 + 1 = 1 (ganjil), maka p3 = 1</p>
                                            </div>
                                        </div>
                                    </div>
                            </div>
                            <div class="card shadow mb-4">
                            <div class="panel panel-default">
                                        <div class="panel-heading" role="tab" id="headingFive">
                                            <h4 class="panel-title">
                                                <a href="#collapseCardFive" class="d-block card-header py-3" data-toggle="collapse" data-parent="#accordion"
                                                    role="button" aria-expanded="false" aria-controls="collapseCardFive">
                                                    <h6 class="m-0 font-weight-bold text-primary">Aljabar Boolean</h6>
                                                </a>
                                            </h4>
                                        </div>
                                <!-- Card Content - Collapse -->
                                        <div class="panel-collapse collapse" id="collapseCardFive" role="tabpanel" aria-labelledby="headingFive">
                                            <div class="card-body">
                                            Struktur aljabar yang didefinisikan oleh suatu himpunan elemen B dan dua operator: “+” dan “.” (Mano dan Ciletti, 2011)
                                            <p>Postulat Aljabar Boolean</p>
                                            <img src="images/AljabarBoolean/1.png" class="img-fluid"> <br>
                                            <img src="images/AljabarBoolean/2.png" class="img-fluid"> <br>
                                            <h1>Teori Dasar Aljabar Boolean</h1>
                                            <img src="images/AljabarBoolean/3.png" class="img-fluid"> <br>
                                            </div>
                                        </div>
                                    </div>
                            </div>

                        </div>

                        <div class="col-lg-6">

                            <!-- Dropdown Card Example -->
                            <div class="card shadow mb-4">
                                <!-- Card Header - Dropdown -->
                                <div class="panel panel-default">
                                        <div class="panel-heading" role="tab" id="headingFour">
                                            <h4 class="panel-title">
                                                <a href="#collapseCardFour" class="d-block card-header py-3" data-toggle="collapse" data-parent="#accordion"
                                                    role="button" aria-expanded="false" aria-controls="collapseCardFour">
                                                    <h6 class="m-0 font-weight-bold text-primary">Tiga</h6>
                                                </a>
                                            </h4>
                                        </div>
                                <!-- Card Content - Collapse -->
                                        <div class="panel-collapse collapse" id="collapseCardFour" role="tabpanel" aria-labelledby="headingFour">
                                            <div class="card-body">
                                                <img src="images/GerbangLogika/1.png" class="img-fluid"> <br>
                                                This is a collapsable card example using Bootstrap's built in collapse
                                                functionality. <strong>Click on the card header</strong> to see the card body
                                                collapse and expand!
                                            </div>
                                        </div>
                                </div>
                            </div>
                            <!-- Collapsable Card Example -->
                            <div class="card shadow mb-4">
                                <!-- Card Header - Accordion -->
                                <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                                    <div class="panel panel-default">
                                        <div class="panel-heading" role="tab" id="headingOne">
                                            <h4 class="panel-title">
                                                <a href="#collapseCardOne" class="d-block card-header py-3" data-toggle="collapse" data-parent="#accordion"
                                                    role="button" aria-expanded="true" aria-controls="collapseCardOne">
                                                    <h6 class="m-0 font-weight-bold text-primary">Karnaugh Map</h6>
                                                </a>
                                            </h4>
                                        </div>
                                <!-- Card Content - Collapse -->
                                        <div class="panel-collapse collapse in" id="collapseCardOne" role="tabpanel" aria-labelledby="headingOne">
                                            <div class="card-body">
                                                
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card shadow mb-4">
                            <div class="panel panel-default">
                                        <div class="panel-heading" role="tab" id="headingSix">
                                            <h4 class="panel-title">
                                                <a href="#collapseCardSix" class="d-block card-header py-3" data-toggle="collapse" data-parent="#accordion"
                                                    role="button" aria-expanded="false" aria-controls="collapseCardSix">
                                                    <h6 class="m-0 font-weight-bold text-primary">Enam</h6>
                                                </a>
                                            </h4>
                                        </div>
                                <!-- Card Content - Collapse -->
                                        <div class="panel-collapse collapse" id="collapseCardSix" role="tabpanel" aria-labelledby="headingSix">
                                            <div class="card-body">
                                                <img src="images/GerbangLogika/1.png" class="img-fluid"> <br>
                                                This is a collapsable card example using Bootstrap's built in collapse
                                                functionality. <strong>Click on the card header</strong> to see the card body
                                                collapse and expand!
                                            </div>
                                        </div>
                                    </div>
                            </div>
                        </div>  
                    </div>

                </div>
                
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->
    
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
                            <li><img src="assets/images/contact-info-02.png" alt="">tririzki@gmail.com</li>
                            <li><img src="assets/images/contact-info-03.png" alt="">www.test.com</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

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
    <!-- Bootstrap core JavaScript-->
    <script src="sb/jquery.min.js"></script>
    <script src="sb/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="sb/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="sb/sb-admin-2.min.js"></script>
    <script src="js/script.js"></script>
</body>

</html>

