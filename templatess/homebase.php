<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title ?? 'Natruyd - Cybersecurity'; ?></title>
    <!-- Logo -->
    <link rel="icon" type="image/png" sizes="32x32" href="./public/images/cybersecurity.png">
    <!-- Style CSS -->  
    <link rel="stylesheet" href="../public/css/homepage.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.8.1/font/bootstrap-icons.min.css">
    

</head>

    <style>
            body {
                  background: #222D32;
                  font-family: 'Roboto', sans-serif;
              }

            /* profile */
            .profile-container {
                margin: 0 auto; /* Center the container */
                text-align: center; /* Center text within the container */
            }

            .profile-pic {
                width: 100px; /* Adjust size as needed */
                height: 100px; /* Adjust size as needed */
                border-radius: 50%; /* Makes the image circular */
                object-fit: cover; /* Ensures the image covers the area */
                border: 2px solid #222D32; /* Optional: Add a border */
            }

            .profile-header {
                margin-bottom: 20px; /* Space below the profile header */
            }
    </style>

<body>

  <!-- navbar temp-->
  <nav class="navbar navbar-expand-lg bg-white">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">Natruyd</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
          <div class="navbar-nav ms-auto">
              <ul class="navbar-nav align-items-center">
                  <li class="nav-item"><a class="nav-link active font-weight-bold" href="home.php">Profile</a></li>
                  <li class="nav-item"><a class="nav-link " href="./database.php">Database</a></li>
              </ul>
          </div>
        </div>
      </div>
  </nav>


  <!-- content -->
  <main class="container mt-5">
    <div class="row justify-content-center">
      <div class="col-8 col-md-8 col-lg-4">
            <div class="card border rounded">
                <div class="card-body">

                  <?php echo $contenthomepage ?? 'Default Contents'; ?>

                  
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
</body>
</html>