<?php
include 'connection.php';
session_start();

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Static website</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Finlandica:ital@1&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Finlandica:ital@1&family=Splash&display=swap" rel="stylesheet">
    <!-- font-family: 'Finlandica', sans-serif;
font-family: 'Splash', cursive; ;-->
    <!-- font-family: 'Finlandica', sans-serif ;-->
    <link rel="stylesheet" href="main_style.css">
</head>

<body>
    <section id="header">

        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <!-- Nav bar-->
                    <nav class="navbar navbar-expand-lg">
                        <div class="container-fluid">
                            <a class="navbar-brand" href="start.html"><img id="logo" src="media/cp logo.jpeg" alt=""></a>
                            <button class="navbar-toggler navbar-light bg-light" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>
                            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                                    <?php
                                    if (isset($_SESSION['username'])) {
                                        echo '
                    <li class="nav-item">
                    <a class="nav-link" href="profile.php">Welcome ' . $_SESSION['username'] . '</a>
                    </li> ';
                                    } else {
                                        echo '<li class="nav-item">
                        <a class="nav-link" href="reg.php">Registration</a>
                      </li>';
                                    }
                                    ?>

                                    <li class="nav-item">
                                        <a class="nav-link active" aria-current="page" href="user_homepage.php">Home</a>
                                    </li>


                                    <li class="nav-item">
                                        <a class="nav-link" href="user_course.php">Courses</a>
                                    </li>


                                    <li class="nav-item">

                                        <div class="d-grid gap-2 d-md-block ms-5 pt-2">
                                            <a href="logout.php">
                                                <button class="btn btn-danger" type="button"> Logout<i class="bi bi-power"></i></button>
                                            </a>

                                        </div>

                                    </li>
                                </ul>

                            </div>
                        </div>
                    </nav>
                </div>

            </div>
        </div>
    </section>


    <section id="service">

        <div class="container pt-5">
            <div class="row">
                <div class="col-md-4">
                    <div class="card" style="width: 18rem;">
                        <img src="media/c.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">
                                <center>C language</center>
                            </h5>
                            <p class="card-text">Some quick example text to build Lorem, ipsum dolor. on the card title and make up the bulk of the card's content. Lorem ipsum dolor sit, amet consectetur adipisicing elit. Dolorem.</p>
                            <a href="c.php" class="btn btn-primary">More details...</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="col-md-4">
                        <div class="card" style="width: 18rem;">
                            <img src="media/c2.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">
                                    <center> C#</center>
                                </h5>
                                <p class="card-text">Some quick example text to build Lorem, ipsum dolor. on the card title and make up the bulk of the card's content. Lorem ipsum dolor sit, amet consectetur adipisicing elit. Dolorem.</p>
                                <a href="c2.php" class="btn btn-primary"> More details...</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="col-md-4">
                        <div class="card" style="width: 18rem;">
                            <img src="media/java.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">
                                    <center>Java</center>
                                </h5>
                                <p class="card-text">Some quick example text to build Lorem, ipsum dolor. on the card title and make up the bulk of the card's content. Lorem ipsum dolor sit, amet consectetur adipisicing elit. Dolorem.</p>
                                <a href="java.php" class="btn btn-primary">More details...</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container pt-5">
            <div class="row">
                <div class="col-md-4">
                    <div class="card" style="width: 18rem;">
                        <img src="media/python.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">
                                <center>Python</center>
                            </h5>
                            <p class="card-text">Some quick example text to build Lorem, ipsum dolor. on the card title and make up the bulk of the card's content. Lorem ipsum dolor sit, amet consectetur adipisicing elit. Dolorem.</p>
                            <a href="python.php" class="btn btn-primary">More details...</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="col-md-4">
                        <div class="card" style="width: 18rem;">
                            <img src="media/web.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">
                                    <center> Web-development</center>
                                </h5>
                                <p class="card-text">Some quick example text to build Lorem, ipsum dolor. on the card title and make up the bulk of the card's content. Lorem ipsum dolor sit, amet consectetur adipisicing elit. Dolorem.</p>
                                <a href="webdev.php" class="btn btn-primary"> More details...</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="col-md-4">
                        <div class="card" style="width: 18rem;">
                            <img src="media/ruby.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">
                                    <center>Ruby</center>
                                </h5>
                                <p class="card-text">Some quick example text to build Lorem, ipsum dolor. on the card title and make up the bulk of the card's content. Lorem ipsum dolor sit, amet consectetur adipisicing elit. Dolorem.</p>
                                <a href="ruby.php" class="btn btn-primary">More details...</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>

    <section id="footer">
        <img id="border2" src="media/border2.png" alt="">
        <div class="container">
            <div class="row text-center">
                <div class="col-md-4"><img id="description" src="media/logo.png" alt="">
                    <p id="foot-dec">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores! Lorem ipsum dolor sit amet consectetur adipisicing elit. Quaerat, quo mollitia dolor ipsum velit, perspiciatis officiis, eaque unde quibusdam ducimus esse sapiente. Facilis cumque reiciendis possimus ipsum, voluptates delectus blanditiis.</p>
                </div>
                <div class="col-md-4 ">
                    <p id="company">Indigo infraprojects pvt. ltd.</p>
                    <p><i class="bi bi-building"> : Lorem ipsum dolor sit amet.</i></p>
                    <p><i class="bi bi-phone"></i> : Lorem, ipsum.</p>
                    <p><i class="bi bi-telephone"></i> : Lorem, ipsum dolor.</p>
                    <p><i class="bi bi-geo-alt"></i> : Lorem ipsum dolor sit amet consectetur.</p>
                </div>
                <div class="col-md-4">
                    <p id="footer-query">Query Form</p>
                    <form action="" method="post">
                        <input type="text" name="" id="" class="form-control form-control-sm mb-2 " placeholder="E-mail">
                        <input type="text" name="" id="" class="form-control form-control-sm mb-2" placeholder="Query">
                        <button type="submit" class="btn btn-success form-control btn-sm">Submit query</button>
                    </form>

                </div>
            </div>
        </div>
        <div class="container">
            <div class="row text-center">
                <div class="col-md-12">
                    <img class="media" src="media/instagram-icon.png" alt="">
                    <img class="media" src="media/twitter-icon.png" alt="">
                    <img class="media" src="media/linkedin-icon.png" alt="">
                    <img class="media" src="media/snapchat-icon.png" alt="">
                </div>
            </div>
        </div>
    </section>

    <script src="script.js"></script>



</body>
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>

</html>