<?php
include 'connection.php';
if(isset($_POST['submit'])){
    $username = $_POST['username'];
    $gender = $_POST['gender']; 
    $mobile = $_POST['mobile'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "insert into `user` (username,gender,mobile,email,password)
    values('$username','$gender','$mobile','$email','$password')";
    $result = mysqli_query($conn,$sql);
    if ($result){
        header('location:index.php');
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
   
    <style>
        body {
            background-color: #f0f2f5;
        }

        #main {
            margin-top: 12%;
        }

        #facebook #logo {
            font-size: 55px;
            font-weight: bolder;
            color: rgb(13, 110, 253);
            padding-left: 10%;
        }

        #facebook #para {
            font-family: 'Lato', sans-serif;
            font-size: 30px;
            font-weight: 390;
            padding-left: 10%;
        }

        .login-form {
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, .1), 0 8px 16px rgba(0, 0, 0, .1);
            background-color: #fff;
            padding: 25px;
            margin-left: 10%;


        }

        .btn-custom {
            background-color: #1877f2;
            border: none;
            border-radius: 6px;
            font-size: 20px;
            line-height: 28px;
            color: #fff;
            font-weight: 700;
            height: 48px;
        }

        .btn-custom {
            color: #fff !important;
        }

        input {
            height: 52px;
            font-size: 18px !important;
            color: #f2f2f2;
        }

        .form-control:focus {
            box-shadow: 0 0 0 0 rgba(13, 110, 253, .25);
        }


        #header {
            background: linear-gradient(to right, rgb(66, 66, 67), rgb(101, 101, 101));
        }

        #header #logo {
            width: 180px;

        }

        #header li a {
            color: rgb(244, 249, 249);
            font-size: 22px;
            font-weight: bold;
            padding-left: 80px;
        }

        #header li a:hover {
            color: rgb(174, 255, 0);

        }
    </style>
    
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
                                <a class="nav-link active" aria-current="page" href="index.php">User-login</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="admin/admin_login.php">Admin-login</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="user.php">Register</a>
                            </li>


                    </div>
                </div>
            </nav>
        </div>
    </div>
</div>
</section>

    <section id="form">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <form method="post">
                        <h3>
                            <p> User-Registration</p>
                        </h3>

                        <div class="form-floating mb-3">
                            <input type="name" class="form-control" id="floatingInput" placeholder="name" name="username">
                            <label for="floatingInput">Name</label>
                        </div>

                        <div class="form-floating mb-3">
                            <select class="form-select" id="floatingSelect" name="gender">
                                <option value="Male">Male</option>
                                <option value="Female">Female</option>
                            </select>
                            <label for="floatingSelect">Gender</label>
                        </div>

                        <div class="form-floating mb-3">
                            <input type="phone" class="form-control" id="floatingInput" placeholder="Mobile" name="mobile">
                            <label for="floatingInput">Mobile</label>
                        </div>
                        
                        <div class="form-floating mb-3">
                            <input type="email" class="form-control" id="floatingInput" placeholder="E-mail" name="email">
                            <label for="floatingInput">E-mail</label>
                        </div>

                        <div class="form-floating">
                            <input type="password" class="form-control" id="floatingPassword" placeholder="Password" name="password">
                            <label for="floatingPassword">Password</label>
                        </div>

                        <div>
                            <button type="submit" name="submit" class="btn btn-primary form-control mt-3 btn-sm">
                                <b> Submit</b>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>

</html>