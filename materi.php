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

    <title>SB Admin 2 - Cards</title>

    <!-- Custom fonts for this template-->
    <link href="sb/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="sb/sb-admin-2.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
    <link rel="stylesheet" href="css/style.css">
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
                                                <h6 class="m-0 font-weight-bold text-primary">Collapsable Card Example</h6>
                                        </a>
                                    </h4>
                                </div>
                                <!-- Card Content - Collapse -->
                                <div class="panel-collapse collapse" id="collapseCardTwo" role="tabpanel" aria-labelledby="headingTwo">
                                    <div class="card-body">
                                        This is a collapsable card example using Bootstrap's built in collapse
                                        functionality. <strong>Click on the card header</strong> to see the card body
                                        collapse and expand!
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
                                                    <h6 class="m-0 font-weight-bold text-primary">Collapsable Card Example</h6>
                                                </a>
                                            </h4>
                                        </div>
                                <!-- Card Content - Collapse -->
                                        <div class="panel-collapse collapse" id="collapseCardThree" role="tabpanel" aria-labelledby="headingThree">
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

                        <div class="col-lg-6">

                            <!-- Dropdown Card Example -->
                            <div class="card shadow mb-4">
                                <!-- Card Header - Dropdown -->
                                <div class="panel panel-default">
                                        <div class="panel-heading" role="tab" id="headingFour">
                                            <h4 class="panel-title">
                                                <a href="#collapseCardFour" class="d-block card-header py-3" data-toggle="collapse" data-parent="#accordion"
                                                    role="button" aria-expanded="false" aria-controls="collapseCardFour">
                                                    <h6 class="m-0 font-weight-bold text-primary">Collapsable Card Example</h6>
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
                                                    <h6 class="m-0 font-weight-bold text-primary">Collapsable Card Example</h6>
                                                </a>
                                            </h4>
                                        </div>
                                <!-- Card Content - Collapse -->
                                        <div class="panel-collapse collapse in" id="collapseCardOne" role="tabpanel" aria-labelledby="headingOne">
                                            <div class="card-body">
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

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Your Website 2020</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="login.html">Logout</a>
                </div>
            </div>
        </div>
    </div>

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

