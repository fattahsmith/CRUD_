<!doctype html>
<html lang="id">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>ILKOOM Inventory</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap" rel="stylesheet">
  <style>
    body {
      font-family: 'Poppins', sans-serif;
      background-color: #f8f9fa;
      /* Light gray background */
      color: #343a40;
      /* Dark gray text */
    }

    .container {
      margin-top: 100px;
      /* Adjust top margin for better spacing */
    }

    .jumbotron {
      background-color: #fff;
      /* White background for the jumbotron */
      padding: 4rem 2rem;
      border-radius: .3rem;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
      /* Subtle shadow */
    }

    .jumbotron h3 {
      font-weight: 700;
      color: #007bff;
      /* Blue heading */
    }

    .list-group-item {
      background-color: #f2f2f2;
      border: none;
      margin-bottom: 5px;
      border-radius: .3rem;
    }

    .lead {
      margin-top: 2rem;
    }

    .btn-primary {
      background-color: #007bff;
      /* Blue button */
      border-color: #007bff;
    }

    .btn-primary:hover {
      background-color: #0069d9;
      /* Darker blue on hover */
      border-color: #0062cc;
    }
  </style>
</head>

<body>

  <div class="container">
    <div class="row">
      <div class="col-12 mx-auto">
        <div class="jumbotron text-center">
          <h3 class="mb-4">Proses Generate Database</h3>
          <hr class="w-50 my-4">
          <ul class="list-group">
            <?php
            mysqli_report(MYSQLI_REPORT_STRICT);

            try {
              $mysqli = new mysqli("localhost", "root", "");


            ?>
          </ul>
          <hr class="w-50 my-4">
          <p class="lead">Database berhasil dibuat, silahkan
            <a href="login.php" class="btn btn-primary mr-2">Login</a>
            dengan username: <code>admin</code>, password: <code>rahasia</code>
            <br>Atau
            <a href="register_user.php" class="btn btn-success mt-2">Register</a> untuk membuat user baru
          </p>
        <?php

            } catch (Exception $e) {
              echo "<p class='text-danger'>Koneksi / Query bermasalah: " . $e->getMessage() .
                " (" . $e->getCode() . ")</p>";
            } finally {
              if (isset($mysqli)) {
                $mysqli->close();
              }
            }
        ?>
        </div>
      </div>
    </div>
  </div>

  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>