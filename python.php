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
    <title>C course</title>
    <link rel="stylesheet" href="css/bootstrap.css">

    <link rel="stylesheet" href="course.css">
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
                                         <p id="msg"> Welcome ' . $_SESSION['username'] . ' </p>
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
    <div class="container">
        <center>
            <h2 class="mt-5">C #</h2>
        </center>
        <div class="row">
            <div class="col-md-4">

                <div>
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/URfNAAuZ52w" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    <p id="name">Lecture 1</p>
                </div>

            </div>
            <div class="col-md-4">
                <div>
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/AZ100fpH5mg" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    <p id="name">Lecture 2</p>
                </div>
            </div>
            <div class="col-md-4">
                <div>
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/pZ-6ScRpRQ0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    <p id="name">Lecture 3</p>
                </div>
            </div>

        </div>
        <div class="row">
            <div class="col-md-4">
                <div>
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/pZ-6ScRpRQ0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
                <p id="name">Lecture 4</p>
            </div>
            <div class="col-md-4">
                <div>
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/_w-PPOu1uxo" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    <p id="name">Lecture 5</p>
                </div>
            </div>
            <div class="col-md-4">
                <div>
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/_w-PPOu1uxo" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    <p id="name">Lecture 6</p>
                </div>
            </div>

        </div>
        <div class="row">
            <div class="col-md-4">
                <div>
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/2_aXKd0RqdY" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
                <p id="name">Lecture 7</p>
            </div>
            <div class="col-md-4">
                <div>
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/LwKaIS-wYaI" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    <p id="name">Lecture 8</p>
                </div>
            </div>
            <div class="col-md-4">
                <div>
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/12CfeOvrIQA" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    <p id="name">Lecture 9</p>
                </div>
            </div>

        </div>
    </div>
</body>

</html>