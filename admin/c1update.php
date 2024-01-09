<?php
include '../connection.php';
$id = $_GET['updateid'];
$sql = "Select * from `c1` where id=$id";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
$name = $row['name'];
$url = $row['url'];



if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $url = $_POST['url'];


    $sql = "update `c1` set id='$id',name='$name',url='$url'
    where id=$id";
    $result = mysqli_query($conn, $sql);
    if ($result) {
        header('location:c1.php?mess=Successfully Updated');
    } else {
        die(mysqli_error($conn));
    }
}
?>
<!DOCTYPE html>


<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>navbar</title>
    <link rel="stylesheet" href="css/bootstrap.css">
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
                                    <li class="nav-item">
                                        <a class="nav-link active" aria-current="page" href="admin_homepage.php">Home</a>
                                    </li>

                                    <li class="nav-item">
                                        <a class="nav-link" href="user_record.php">Users</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="admin_record.php">Admins</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="query.php">Query</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="admin_courses.php">Courses</a>
                                    </li>

                                    <li class="nav-item">

                                        <div class="d-grid gap-2 d-md-block ms-5 pt-2">
                                            <a href="admin_login.php">
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
    <center>
        <h4 class="mt-5">C-language</h4>
    </center>
    <section id="form11">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <form method="post">
                        <div class="mb-3">
                            <label for="text" class="form-label">Name</label>
                            <input type="text" class="form-control" id="exampleInputtext" name="name" required>

                        </div>
                        <div class="mb-3">
                            <label for="text" class="form-label">Video url</label>
                            <input type="text" class="form-control" id="exampleInputtext" name="url" required>
                        </div>
                        <button type="submit" class="btn btn-primary" name="submit">Upload</button>

                    </form>
                </div>
            </div>
        </div>
    </section>
    <section id="footer">

        <div class="container">
            <div class="row text-center">
                <div class="col-md-4"><img id="description" src="media/logo.png" alt="">
                    <p id="foot-dec">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores! Lorem ipsum dolor
                        sit amet consectetur adipisicing elit. Quaerat, quo mollitia dolor ipsum velit, perspiciatis
                        officiis, eaque unde quibusdam ducimus esse sapiente. Facilis cumque reiciendis possimus ipsum,
                        voluptates delectus blanditiis.</p>
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
</body>
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>

</html>