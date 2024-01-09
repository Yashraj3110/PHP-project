<?php
include "connection.php";
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./css/embed.css">
 
    <link rel="stylesheet" href="css/bootstrap.css">
    <style>
        #header{
    background: linear-gradient(to right,rgb(66, 66, 67),rgb(101, 101, 101));
}
#header #logo{
    width: 180px;

}
#header li a {
    color: rgb(254, 254, 255);
    font-size: 22px;
    font-weight: bold;
    padding-left: 50px;
}
#header li a:hover{
    color: rgb(174, 255, 0);
    
}
        p {
            padding-left: 20px;
        }

        iframe {
            padding-left: 8%;
            margin-top: 7%;
            height: 250px;
            width: 350px;
        }

        span {

            position: relative;
            top: 30px;
            font-weight: bolder;
            right: 180px;


        }

        p {

            font-size: 17px;
            color: rgb(28, 85, 87);
            font-weight: bolder;
            padding-left: 180px;
        }
    </style>
</head>
<style>
</style>

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
    <main>
        <center>
            <h4 class="mt-5">C #</h4>
        </center>

        <div class="container">


            <?php
            $sql = "SELECT * from `c2`";
            $res = mysqli_query($conn, $sql);

            while ($row = mysqli_fetch_assoc($res)) {

                $data = $row['url'];
                $name = $row['name'];
                $final = str_replace('watch?v=', 'embed/', $data);
                echo "
                
                    <iframe
                        src='$final'
                        frameborder='0'
                        allow='autoplay; encrypted-media'
                        allowfullscreen>
                        
                        
                    </iframe>
                    <span>$name</span>
                    
                
                   
                ";
            }
            ?>

        </div>

    </main>

</body>

</html>