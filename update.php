<?php

include 'connection.php';
$mess="";
if(isset($_GET['mess'])){
    $mess=$_GET['mess'];
}
if(isset($_SESSION['username'])){
$username=$_SESSION['username'];
$sql="select * from reg where username='$username'";
$result=mysqli_query($con,$sql);
$row=mysqli_fetch_assoc($result);
$first_name=$row['first_name'];
$last_name=$row['last_name'];
$email=$row['email'];
$img=$row['image'];
//update query
if(isset($_POST['update'])){
$firstname= $_POST['firstname'];
$lastname= $_POST['lastname'];
$emails= $_POST['emails'];
$filename=$_FILES["uploadfile"]["name"];
$tempname=$_FILES["uploadfile"]["tmp_name"];
$folder="./image/".$filename;
//$sql="insert into image() values('$filename')";
//$result=mysqli_query($con,$sql);
move_uploaded_file($tempname,$folder);
if($filename!==''){
$sql1="update reg set first_Name='$firstname',last_name='$lastname',email='$emails',image='$filename' where username='$username'";
$result1=mysqli_query($con,$sql1);
header("location:profile.php?mess=Profile has been updated Successfully");
}else{
    $sql1="update reg set first_Name='$firstname',last_name='$lastname',email='$emails' where username='$username'";
    $result1=mysqli_query($con,$sql1);
    header("location:profile.php?mess=Profile has been updated Successfully");
}
}
}else{
    header("location:login.php");
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
            background: rgb(223, 222, 222);
        }

        #form {
            margin: 50px;
            padding-left: 50px;
            padding-right: 50px;

        }

        #form .container {
            background: linear-gradient(rgb(86, 86, 87), rgb(57, 57, 57));
            border-radius: 10%;
            max-width: 800px;
            padding: 20px 15px 30px 15px;
            margin-top: 7%;
            margin-bottom: 7%;


        }

        label {

            font-size: large;
            font-weight: 500;
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
    <section id="form">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <form method="POST" class="my-5">

                        <div class="form-floating mb-3">
                            <input type="name" class="form-control" id="floatingInput" placeholder="name" name="username" value="<?php echo $name; ?>">
                            <label for="floatingInput">Name</label>
                        </div>

                        <div class="form-floating mb-3">
                            <select class="form-select" id="floatingSelect" name="gender" value="<?php echo $gender; ?>">
                                <option value="Male">Male</option>
                                <option value="Female">Female</option>
                            </select>
                            <label for="floatingSelect">Gender</label>
                        </div>

                        <div class="form-floating mb-3">
                            <input type="phone" class="form-control" id="floatingInput" placeholder="Mobile" name="mobile" value="<?php echo $mobile; ?>">
                            <label for="floatingInput">Mobile</label>
                        </div>

                        <div class="form-floating mb-3">
                            <input type="email" class="form-control" id="floatingInput" placeholder="E-mail" name="email" value="<?php echo $email; ?>">
                            <label for="floatingInput">E-mail</label>
                        </div>

                        <div class="form-floating">
                            <input type="password" class="form-control" id="floatingPassword" placeholder="Password" name="password" value="<?php echo $password; ?>">
                            <label for="floatingPassword">Password</label>
                        </div>

                        <div>
                            <button type="submit" name="submit" class="btn btn-primary form-control mt-3 btn-sm">
                                <b> Update</b>
                            </button>
                        </div>

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