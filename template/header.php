<!doctype html>
<html lang="id">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>ILKOOM Inventory</title>
  <link rel="icon" href="img/favicon.png" type="image/png">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <style>
    /* Custom CSS for better styling */
    body {
      background-color: #f8f9fa;
      /* Light gray background */
    }

    #main-navbar {
      background-color: #343a40;
      /* Darker background for navbar */
    }

    .navbar-brand {
      font-weight: bold;
      color: #fff !important;
      /* Ensure brand is white */
    }

    .nav-link {
      color: rgba(255, 255, 255, 0.7) !important;
      /* Slightly transparent white for nav links */
      transition: all 0.3s ease;
      /* Smooth transition for hover effect */
    }

    .nav-link:hover {
      color: #fff !important;
      /* White on hover */
    }

    .nav-link.active {
      color: #007bff !important;
      /* Blue for active link */
      font-weight: bold;
    }

    .container {
      max-width: 1200px;
      /* Adjust container width for larger screens */
    }

    /* Add some margin to the body to prevent content from being hidden under the navbar */
    body {
      padding-top: 70px;
      /* Adjust as needed */
    }

    /* Responsive adjustments - make sure the top margin is adjusted for smaller screens. */
    @media (max-width: 768px) {
      body {
        padding-top: 100px;
        /* Adjust as needed */
      }
    }
  </style>
</head>

<body>

  <nav id="main-navbar" class="navbar navbar-expand-md navbar-dark fixed-top">
    <div class="container">
      <span class="navbar-brand">
        ILKOOM Inventory </span>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link p-3 <?php echo basename($_SERVER['PHP_SELF']) == "tampil_barang.php" ? "active" : ""; ?>" href="tampil_barang.php">
              <i class="fas fa-table mr-2"></i>Tabel Barang</a>
          </li>

          <li class="nav-item">
            <a class="nav-link p-3" href="logout.php"><i class="fas fa-sign-out-alt mr-2"></i>Logout</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <div class="container mt-4">
    <h1>Welcome, <?php echo $_SESSION["username"]; ?>!</h1>
    <p>This is the main content area of your inventory system.</p>

  </div>


  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>