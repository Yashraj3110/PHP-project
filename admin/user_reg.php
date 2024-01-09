<?php
include '../connection.php';
if (isset($_POST['submit'])) {
  $username = $_POST['username'];
  $gender = $_POST['gender'];
  $mobile = $_POST['mobile'];
  $email = $_POST['email'];
  $password = $_POST['password'];

  $sql = "insert into `user` (username,gender,mobile,email,password)
    values('$username','$gender','$mobile','$email','$password')";
  $result = mysqli_query($conn, $sql);
  if ($result) {
    header('location:user_record.php');
  }
}
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


  <script src="script.js"></script>



</body>
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>

</html>