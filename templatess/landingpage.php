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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    

</head>

    <style>
            body {
                  background: #222D32;
                  font-family: 'Roboto', sans-serif;
              }

            h1 {
                font-size: 3rem;
                color: #333;
            }

            p {
                font-size: 1.1rem;
                color: white;
                text-align: justify;
            }

            .btn {
                font-size: 1.1rem;
            }

    </style>

<body>

   <!-- Navbar -->
   <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container">
            <a class="navbar-brand text-white font-weight-bold" href="#">Natruyd</a>
        </div>
    </nav>


    <!-- content -->

    <?php echo $contentlandingpage ?? 'Default Contents'; ?>

  
</body>
</html>