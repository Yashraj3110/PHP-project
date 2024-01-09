<?php
include "../connection.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="main_style.css">
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
    <button class="btn btn-primary my-5"><a href="c1upload.php" class="text-light">Add video</a>
    </button>
    <div class="">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Name</th>
                    <th scope="col">URL</th>
                    <th scope="col"> Operations</th>


                </tr>
            </thead>
            <tbody>
    <?php
    $sql = "SELECT * FROM `c1`";
    $res = mysqli_query($conn, $sql);

    while ($row = mysqli_fetch_assoc($res)) {
        $id = $row['id'];
        $url = htmlspecialchars($row['url']); // Use htmlspecialchars to prevent XSS attacks
        $name = htmlspecialchars($row['name']); // Use htmlspecialchars to prevent XSS attacks

        echo
        '<tr>
            <th scope="row">' . $id . '</th>
            <td>' . $name . '</td>
            <td>' . $url . '</td> 
            <td>
                <button class="btn btn-success"><a href="c1update.php?updateid=' . $id . '" class="text-light" >Update</a></button>
                <button class="btn btn-danger"><a href="c1delete.php?deleteid=' . $id . '" class="text-light" >Delete</a></button>
            </td>
        </tr>';
    }
    ?>
</tbody>
        </table>
    </div>

</body>

</html>