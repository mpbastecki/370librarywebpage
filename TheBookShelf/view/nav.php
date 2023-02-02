<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Navbar For The Book Shelf</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <!-- Bootstrap with CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css"
          rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD"
          crossorigin="anonymous">
    <!-- Bootstrap with JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
            crossorigin="anonymous"></script>
    <!-- Link the CSS file -->
    <link rel="stylesheet" type="text/css" href="../css/index.css">
    <link rel="stylesheet" type="text/css" href="../css/style.css">
    <!-- Link the JS file -->
    <script src="../js/index.js" type="text/javascript"></script>
</head>
<body>
    <div class="container-fluid text"
    <!-- create a navigation bar that can be linked on each page via JS -->
    <nav class="navbar navbar-expand-lg navigation">
        <div class="container text-center">
            <div class="navbar-nav">
                <div class="col">
                    <a class="nav-link" href="mybooks.php"> My Books </a>
                </div>
                <div class="col">
                    <div class="dropdown">
                        <button onclick="myFunction()" class="dropbtn">Admin</button>
                            <div id="myDropdown" class="dropdown-content">
                              <a href="fileuploads.php">File Uploads</a>
                              <a href="sendemails.php">Send Emails</a>
                              <a href="security.php">Security</a>
                              <a href="grading.php">Grading</a>
                            </div>
                    </div>
                    
                    
                </div>
                <div class="col">
                    <a class="nav-link" href="index.php"><img src="../img/thebookshelf.png" alt="Logo" class="Logo"></a>
                </div>
                <div class="col">
                    <a class="nav-link" href="login.php"> Login </a>
                </div>
                <div class="col">
                    <a class="nav-link" href="signup.php"> Sign Up </a>
                </div>
            </div>
        </div>
    </nav>
    </div>
</body>
</html>