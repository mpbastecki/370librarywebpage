<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
    <title>My Books</title>
    
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

<!-- div for responsive design -->
<div class="container-fluid text">
   
<?php
    require_once '../view/nav.php';
?>

  <!-- heading for the section -->
  <div class="section-heading">
    <h1>My Books</h1>
  </div>


  <!-- grid of book cards for checked out -->
  <section class="events">
    <div class="container">
      <div class="row">
        <h2 class="float-left">Checked Out</h2>
            <div class="row text-center">
              <div class="col-6 col-sm-4 col-md-3">
                <div class="card transparent">
                  <div class="card-body smallTextBold">
                    <p class="smallTextBold">Due: 02/06/2023</p>
                    <a href='bookpage.php'>
                      <img class="book-image" src="../img/checkedoutbook1.jpg" alt="Roses, in the Mouth of a Lion">
                    </a>
                  </div>
                </div>
              </div>
              <div class="col-6 col-sm-4 col-md-3">
                <div class="card transparent">
                  <div class="card-body smallTextBold">
                    <p>Due: 02/06/2023</p>
                    <a href="bookpage.php">
                      <img class="card-img-top book-image" src="../img/checkedoutbook2.jpg" alt="Grocery Shopping with my Mother">
                    </a>
                  </div>
                </div>
              </div>
              <div class="col-6 col-sm-4 col-md-3">
                <div class="card transparent">
                  <div class="card-body smallTextBold">
                    <p>Due: 02/10/2023</p>
                    <a href="bookpage.php">
                      <img class="card-img-top book-image" src="../img/checkedoutbook3.jpg" alt="The Seamstress of Sardinia">
                    </a>
                  </div>
                </div>
              </div>
              <div class="col-6 col-sm-4 col-md-3">
                <div class="card transparent">
                  <div class="card-body smallTextBold">
                    <p>Due: 02/14/2023</p>
                    <a href="bookpage.php">
                      <img class="card-img-top book-image" src="../img/checkedoutbook4.jpg" alt="All the Dark Places">
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
    </div>
  </section>

  <!-- recently read section -->
  <section class="events">
    <div class="container">
      <div class="row">
        <h2 class="float-left">Recently Read</h2>
        <div class="row text-center">
          <div class="col-6 col-sm-4 col-md-3">
            <div class="card transparent">
              <div class="card-body smallTextBold">
                <p class="smallTextBold">Your Rating: 3/5</p>
                <a href="bookpage.php">
                  <img class="card-img-top book-image" src="../img/readbook1.jpg" alt="Frozen by Lies">
                </a>
              </div>
            </div>
          </div>
          <div class="col-6 col-sm-4 col-md-3">
            <div class="card transparent">
              <div class="card-body smallTextBold">
                <p>Your Rating: 4/5</p>
                <a href="bookpage.php">
                  <img class="card-img-top book-image" src="../img/readbook2.jpg" alt="Witcha Gonna Do">
                </a>
              </div>
            </div>
          </div>
          <div class="col-6 col-sm-4 col-md-3">
            <div class="card transparent">
              <div class="card-body smallTextBold">
                <p>Your Rating: 1/5</p>
                <a href="bookpage.php">
                  <img class="card-img-top book-image" src="../img/readbook3.jpg" alt="Rogues">
                </a>
              </div>
            </div>
          </div>
          <div class="col-6 col-sm-4 col-md-3">
            <div class="card transparent">
              <div class="card-body smallTextBold">
                <p>Your Rating: 5/5</p>
                <a href="bookpage.php">
                  <img class="card-img-top book-image" src="../img/readbook4.jpg" alt="The Waste Land">
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <br>
</div>

<?php
    require_once '../view/footer.php';
?>

</body>
</html>