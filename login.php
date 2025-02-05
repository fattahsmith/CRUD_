<?php
require 'init.php';

$user = new User();

if (!empty($_POST)) {
  $pesanError = $user->validasiLogin($_POST);
  if (empty($pesanError)) {
    $user->login();
  }
}
?>
<!doctype html>
<html lang="id">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>ILKOOM Inventory</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <style>
    body {
      background-color: #f8f9fa;
      /* Light gray background */
      display: flex;
      align-items: center;
      min-height: 100vh;
      /* Ensure full viewport height */
    }

    .card {
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
      /* Add a subtle shadow */
    }

    .card-header {
      background-color: #007bff;
      /* Blue header */
      color: white;
    }

    .btn-info {
      background-color: #007bff;
      border-color: #007bff;
    }

    .btn-info:hover {
      background-color: #0069d9;
      border-color: #0062cc;
    }

    .alert-danger ul {
      list-style: none;
      /* Remove bullet points from error list */
      padding: 0;
      /* Remove default padding */
    }
  </style>
</head>

<body>
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-10 col-sm-8 col-md-6 col-lg-5 col-xl-4">
        <?php if (!empty($pesanError)) : ?>
          <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <ul class="mb-0">
              <?php foreach ($pesanError as $val) : ?>
                <li><?= $val ?></li>
              <?php endforeach; ?>
            </ul>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
        <?php endif; ?>

        <div class="card">
          <div class="card-header text-center">
            <h4>Account Login</h4>
          </div>
          <div class="card-body">
            <form method="post" autocomplete="off">
              <div class="form-group">
                <label for="username">Username</label>
                <input type="text" class="form-control" name="username" value="<?= $user->getItem('username') ?>" required>
              </div>
              <div class="form-group">
                <label for="password">Password</label>
                <input type="password" class="form-control" name="password" required>
              </div>
              <button type="submit" class="btn btn-info btn-block">Login</button>
            </form>
            <p class="mt-2 text-center">
              <small>Belum terdaftar? Silahkan <a href="register_user.php">register</a> terlebih dahulu</small>
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>

  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>