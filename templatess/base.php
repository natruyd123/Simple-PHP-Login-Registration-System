<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title ?? 'Natruyd - Cybersecurity'; ?></title>
    <!-- Logo -->
    <link rel="icon" type="image/png" sizes="32x32" href="./public/images/cybersecurity.png">
    <!-- Style CSS -->  
    <link rel="stylesheet" href="public/css/style.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.8.1/font/bootstrap-icons.min.css">
    

</head>

    <style>
          body {
                background: #222D32;
                font-family: 'Roboto', sans-serif;
            }

        /* for password meter */
                .progress-bar-container {
                width: 100%;
                background-color: #ffffff;
                border-radius: 5px;
                margin: 10px 0;
                height: 10px;
            }

            .progress-bar {
                height: 100%;
                border-radius: 5px;
                text-align: center;
                line-height: 10px;
                font-size: 10px;
            }

            .weak {
                background-color: #FF3838;
                color: white;
            }

            .medium {
                background-color: #FFD700;
                color: white;
            }

            .strong {
                background-color: #1DB954;
                color: white;
               
            }

    </style>

<body>

  <!-- navbar temp-->
  <!-- <nav class="navbar navbar-expand-lg">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">Natruyd</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
          <div class="navbar-nav ms-auto">
              <ul class="navbar-nav align-items-center">
                  <li class="nav-item"><a class="nav-link " href="login.php">Login</a></li>
                  <li class="nav-item"><a class="nav-link " href="register.php">Register</a></li>
              </ul>
          </div>
        </div>
      </div>
  </nav> -->

   <!-- Navbar -->
   <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container">
            <a class="navbar-brand text-white font-weight-bold" href="index.php">Natruyd</a>
        </div>
    </nav>

  <!-- content -->
  <main class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-8 col-md-8 col-lg-4">
            <div class="card border rounded">
                <div class="card-body">

                  <?php echo $content ?? 'Default Content'; ?>

                  
                </div>
            </div>
        </div>
    </div>
  </main>
  
  <!-- Bootstrap JS and dependencies -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

  <!-- Custom JS -->
  <script src="public/js/showpass.js"></script> 

  <!-- Custom JS -->
  <script src="../public/js/script.js"></script> 

</body>
</html>