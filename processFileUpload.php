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
    
     <?php
    require_once '../view/nav.php';
?>
   
<h1>File Upload</h1>

<?php
    $uploadfile = '../datafile/' . $_FILES['userfile']['name'];
	if (file_exists($uploadfile)) {
		$message = "The file was replaced successfully";
	} else {
		$message = "The file was successfully uploaded";
	}
    if (move_uploaded_file($_FILES['userfile']['tmp_name'], 
							$uploadfile)) {
       echo "<p>$message.</p>";
	} else if ($_FILES['userfile']['error'] == UPLOAD_ERR_NO_FILE) {
		echo "<p>Please choose a file first and then try again...</p>";
	} else if ($_FILES['userfile']['size'] > 1000000) {
		echo "<p>Please choose a file smaller than 1MB and then try again...</p>";
    } else {
        echo "File Upload Error\n Debugging info:";
        print_r($_FILES);
    }
?>
    <?php
    require_once '../view/footer.php';
?>
</body>