<?php
require 'init.php';

$user = new User();

if (!empty($_POST)) {
  $pesanError = $user->validasiInsert($_POST);
  if (empty($pesanError)) {
    $user->insert();
    header('Location: register_berhasil.php');
    exit; 
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
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
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
      text-align: center;
      /* Center the title */
    }

    .alert-danger ul {
      list-style: none;
      padding: 0;
    }

    .btn-primary {
      background-color: #007bff;
      border-color: #007bff;
    }

    .btn-primary:hover {
      background-color: #0069d9;
      border-color: #0062cc;
    }
  </style>
</head>

<body>

  <div class="container">
    <div class="row justify-content-center">
      <div class="col-12 col-md-8 col-lg-6">
        <div class="card">
          <div class="card-header">
            <h4>Register User</h4>
          </div>
          <div class="card-body">
            <?php if (!empty($pesanError)) : ?>
              <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <ul class="mb-0">
                  <?php foreach ($pesanError as $pesan) : ?>
                    <li><?= $pesan ?></li>
                  <?php endforeach; ?>
                </ul>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
            <?php endif; ?>
            <form method="post">
              <div class="form-group">
                <label for="username">Username <small>(min. 4 characters)</small></label>
                <input type="text" class="form-control" name="username" value="<?= $user->getItem('username') ?>" required>
              </div>
              <div class="form-group">
                <label for="password">Password <small>(min. 6 characters, alphanumeric)</small></label>
                <input type="password" class="form-control" name="password" required>
              </div>
              <div class="form-group">
                <label for="ulangi_password">Repeat Password</label>
                <input type="password" class="form-control" name="ulangi_password" required>
              </div>
              <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control" name="email" value="<?= $user->getItem('email') ?>" required>
              </div>
              <button type="submit" class="btn btn-primary btn-block">Register</button>
              <a href="login.php" class="btn btn-danger btn-block">Cancel</a>
            </form>
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