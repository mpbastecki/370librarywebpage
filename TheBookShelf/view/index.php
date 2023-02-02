<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>The Book Shelf</title>
    
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

   <!-- header image -->
    <div>
        <div class="jumbotron bg-cover text-white coverimg">
            <div class="container py-5 text-center">
                <h1 class="display-4 font-weight-bold">WELCOME TO THE BOOK SHELF</h1>
                <p class="font-italic mb-0 h4"> Start Your Reading Journey Below!</p>
            </div>
        </div>
    </div>
    
                <div class="container py-5 text-center">
                    <h3 class="display-4 font-weight-bold">Click <a href='newsletter.php'>HERE</a> to read February's Newsletter!</h3>
                </div>

   <!-- sections containing cards for books of different genres -->
  <section class="events">
        <div class="container">
            <div class="row">
                
                <h1 class="float-left">Featured</h1>
                
                <div class="row text-center">
                    <div class="col-6 col-sm-4 col-md-3">
                        <div class="card">
                            <div class="card-body smallTextBold">
                                <a href='bookpage.php'>
                                <img class="book-image" src="../img/FionaAndJAne.jpg" alt="Fiona and June Book Cover">
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-sm-4 col-md-3">
                        <div class="card">
                            <div class="card-body smallTextBold">
                                <a href='bookpage.php'>
                                <img class="book-image" src="../img/HowHighWeGoInTheDark.jpg" alt="How High We Go In The Dark Book Cover">
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-sm-4 col-md-3">
                        <div class="card">
                            <div class="card-body smallTextBold">
                                <a href='bookpage.php'>
                                <img class="book-image" src="../img/NotesOnAnExecution.jpg" alt="Notes On An Execution Book Cover">
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-sm-4 col-md-3">
                        <div class="card">
                            <div class="card-body smallTextBold">
                                <a href='bookpage.php'>
                                <img class="book-image" src="../img/blurredseemore.jpg" alt="Bookshelf">
                                </a>
                                <div class="centered">See More</div>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="events">
        <div class="container">
            <div class="row">
                
                <h1 class="float-left">Romance</h1>
                
                <div class="row text-center">
                    <div class="col-6 col-sm-4 col-md-3">
                        <div class="card">
                            <div class="card-body smallTextBold">
                                 <a href='bookpage.php'>   
                                <img class="book-image" src="../img/ACaribbeanHeiressInParis.jpg" alt="A Caribbean Heiress In Paris Book Cover">
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-sm-4 col-md-3">
                        <div class="card">
                            <div class="card-body smallTextBold">
                                <a href='bookpage.php'>
                                <img class="book-image" src="../img/SomethingWilder.jpg" alt="Something Wilder Book Cover">
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-sm-4 col-md-3">
                        <div class="card">
                            <div class="card-body smallTextBold">
                                <a href='bookpage.php'>
                                <img class="book-image" src="../img/ALadyForADuke.jpg" alt="A Lady For A Duke Book Cover">
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-sm-4 col-md-3">
                        <div class="card">
                            <div class="card-body smallTextBold">
                                <a href='bookpage.php'>
                                <img class="book-image" src="../img/blurredseemore.jpg" alt="Bookshelf">
                                </a>
                                <div class="centered">See More</div>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

        <section class="events">
            <div class="container">
                <div class="row">
                    
                    <h1 class="float-left">Sci-Fi</h1>
                    
                    <div class="row text-center">
                        <div class="col-6 col-sm-4 col-md-3">
                            <div class="card">
                                <div class="card-body smallTextBold">
                                     <a href='bookpage.php'>       
                                    <img class="book-image" src="../img/ToSleepInASeaOfStars.jpg" alt="To Sleep In A Sea Of Stars Book Cover">
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 col-sm-4 col-md-3">
                            <div class="card">
                                <div class="card-body smallTextBold">
                                    <a href='bookpage.php'>
                                    <img class="book-image" src="../img/RemoteControl.jpg" alt="Remote Control Book Cover">
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 col-sm-4 col-md-3">
                            <div class="card">
                                <div class="card-body smallTextBold">
                                    <a href='bookpage.php'>
                                    <img class="book-image" src="../img/weaponized.jpg" alt="Weaponized Book Cover">
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 col-sm-4 col-md-3">
                            <div class="card">
                                <div class="card-body smallTextBold">
                                    <a href='bookpage.php'>
                                    <img class="book-image" src="../img/blurredseemore.jpg" alt="Bookshelf">
                                    </a>
                                    <div class="centered">See More</div>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </section>

        <section class="events">
            <div class="container">
                <div class="row">
                    
                    <h1 class="float-left">Thriller</h1>
                    
                    <div class="row text-center">
                        <div class="col-6 col-sm-4 col-md-3">
                            <div class="card">
                                <div class="card-body smallTextBold">
                                    <a href='bookpage.php'>        
                                    <img class="book-image" src="../img/Exiles.jpg" alt="Exiles Book Cover">
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 col-sm-4 col-md-3">
                            <div class="card">
                                <div class="card-body smallTextBold">
                                    <a href='bookpage.php'>
                                    <img class="book-image" src="../img/The620Man.jpg" alt="The 6:20 Man Book Cover">
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 col-sm-4 col-md-3">
                            <div class="card">
                                <div class="card-body smallTextBold">
                                    <a href='bookpage.php'>
                                    <img class="book-image" src="../img/TheMarriageAct.jpg" alt="The Marriage Act  Book Cover">
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 col-sm-4 col-md-3">
                            <div class="card">
                                <div class="card-body smallTextBold">
                                    <a href='bookpage.php'>
                                    <img class="book-image" src="../img/blurredseemore.jpg" alt="Bookshelf">
                                    </a>
                                    <div class="centered">See More</div>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="events">
            <div class="container">
                <div class="row">
                    
                    <h1 class="float-left">Horror</h1>
                    
                    <div class="row text-center">
                        <div class="col-6 col-sm-4 col-md-3">
                            <div class="card">
                                <div class="card-body smallTextBold">
                                    <a href='bookpage.php'>    
                                    <img class="book-image" src="../img/JustLikeHome.jpg" alt="Just Like Home Book Cover">
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 col-sm-4 col-md-3">
                            <div class="card">
                                <div class="card-body smallTextBold">
                                    <a href='bookpage.php'>
                                    <img class="book-image" src="../img/PatriciaWantstoCuddle.jpg" alt="Patricia Wants To Cuddle Book Cover">
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 col-sm-4 col-md-3">
                            <div class="card">
                                <div class="card-body smallTextBold">
                                    <a href='bookpage.php'>
                                    <img class="book-image" src="../img/TheWeightOfBlood.jpg" alt="The Weight Of Blood Book Cover">
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 col-sm-4 col-md-3">
                            <div class="card">
                                <div class="card-body smallTextBold">
                                    <a href='bookpage.php'>
                                    <img class="book-image" src="../img/blurredseemore.jpg" alt="Bookshelf">
                                    </a>
                                    <div class="centered">See More</div>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="events">
            <div class="container">
                <div class="row">
                    
                    <h1 class="float-left">Fantasy</h1>
                    
                    <div class="row text-center">
                        <div class="col-6 col-sm-4 col-md-3">
                            <div class="card">
                                <div class="card-body smallTextBold">
                                    <a href='bookpage.php'>
                                    <img class="book-image" src="../img/AGatheringTempest.jpg" alt="A Gathering Tempest">
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 col-sm-4 col-md-3">
                            <div class="card">
                                <div class="card-body smallTextBold">
                                    <a href='bookpage.php'>
                                    <img class="book-image" src="../img/HouseOfSkyAndBreath.jpg" alt="House Of Sky And Breath Book Cover">
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 col-sm-4 col-md-3">
                            <div class="card">
                                <div class="card-body smallTextBold">
                                    <a href='bookpage.php'>
                                    <img class="book-image" src="../img/TheGoldenEnclaves.jpg" alt="The Golden Enclaves Book Cover">
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 col-sm-4 col-md-3">
                            <div class="card">
                                <div class="card-body smallTextBold">
                                    <a href='bookpage.php'>
                                    <img class="book-image" src="../img/blurredseemore.jpg" alt="Bookshelf">
                                    </a>
                                    <div class="centered">See More</div>
                                    
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