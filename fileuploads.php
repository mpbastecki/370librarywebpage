<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>File Uploads</title>
    
    <!-- meta tag for scalability -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    
    <!-- favicon -->
    <link rel="icon" type="image/x-icon" href="../img/favicon.ico">
        
    <!-- bootstrap links -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css"
          rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD"
          crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
            crossorigin="anonymous"></script>
            
    <!-- Link the CSS files -->
    <link rel="stylesheet" type="text/css" href="../css/index.css">
    <link rel =" stylesheet" type="text/css" href="../css/style.css">

</head>
<body>
 
<div class="container-fluid text"

     <?php
    require_once '../view/nav.php';
?>
    
<h1 class="section-heading">Upload Files Here</h1>

<form enctype="multipart/form-data" 
          action="processFileUpload.php" method="post">
    Upload new quote file (txt):
    <input accept=".txt" name="userfile" type="file" />
    <input type="submit" value="Send File" />
</form>

<br>
 
<form enctype="multipart/form-data" 
          action="processFileUpload.php" method="post">
    Upload new newsletter (pdf):
    <input accept =".pdf" name="userfile" type="file" />
    <input type="submit" value="Send File" />
</form>

<br>

<form enctype="multipart/form-data" 
          action="processImgFileUpload.php" method="post">
    Upload a new image: 
    <input accept = "image/*" name="userfile" type="file" />
    <input type="submit" value="Send File" />
</form>

<br>

    <?php
    require_once '../view/footer.php';
?>
</body>
