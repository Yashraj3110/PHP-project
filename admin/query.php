<?php
include "../connection.php";
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

  <table class="table table-striped">
    <thead>
      <tr>
        <th scope="col">E-mail</th>
        <th scope="col">Name</th>


        <th scope="col">Query</th>

      </tr>
    </thead>
    <tbody>
      <?php
      $sql = "Select * from `query`";
      $result = mysqli_query($conn, $sql);
      if ($result) {
        while ($row = mysqli_fetch_assoc($result)) {
          $email = $row['email'];
          $name = $row['name'];
          $query = $row['query'];

          echo '<tr>
                        <th scope="row">' . $email . '</th>
                        <td>' . $name . '</td>
                        
                        <td>' . $query . '</td>
                        
                        
                    </tr>';
        }
      }
      ?>



    </tbody>
  </table>





  <script src="script.js"></script>



</body>
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>

</html>