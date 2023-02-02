<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="UTF-8">
    <title>About Us</title>
    
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
    <link rel =" stylesheet" type="text/css" href="../css/style.css">
    <link rel="stylesheet" type="text/css" href="../css/index.css">
</head>
<body>
    <!-- div for responsive design -->
    <div class="container-fluid text">
        
        
         <?php 
    require_once '../view/nav.php'; 
?>

        <!-- topmost section, large header image with text centered "About Us" -->
        <section class="about-heading">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="inner-content">About Us</h1>
                    </div>
                </div>
            </div>
        </section>

        <!-- section with a blurb about the library - i didn't write it yet -->
        <section class="events">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-heading">
                            <h1>Who We Are</h1>
                            <p class="smallText">The Book Shelf is a place for book
                            lovers of all kinds. Our mission is to help people find and 
                            share books they love. On our site, you can find exciting
                            new releases in your favorite genres, keep track of books
                            you've read, see your currently checked-out books, rate
                            books, and more.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- beneath the header image and blurb to the left, contact information -->
        <div class="section-heading">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                            <h1>Contact Us</h1>
                            <p class="smallText about-border">
                                The Book Shelf
                                <br>142 Becker Drive
                                <br>Clarion, PA, 16214
                                <br>
                                <br>814-393-2610
                                <br>
                                <br>Email <a href="mailto: s_mpbastecki@pennwest.edu">s_mpbastecki@pennwest.edu</a>
                            </p>
                    </div>

                    <!-- beneath the header image and blurb to the right, map of location -->
                    <div class="col-lg-6">
                            <h1>Location</h1>
                            <iframe class="float-right" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3001.735169616303!2d-79.3819175846429!3d41.20574697928134!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89ccccb4b760943f%3A0x5c9604a70c155dcb!2sBecker%20Hall%2C%20Becker%20Dr%2C%20Clarion%2C%20PA%2016214!5e0!3m2!1sen!2sus!4v1674841407410!5m2!1sen!2sus"
                                    width="500" height="350" style="border:0;" allowfullscreen="" loading="lazy"
                                    referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
            </div>
        </div>

        <!-- large google calendar with library events embedded -->
        <section class="events">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-heading">
                            <h1>Upcoming Events</h1>
                            <iframe src="https://calendar.google.com/calendar/embed?src=afca5fc132a2c23d9c4dd8f2204e33d072292553db780d3dbcc794f7a569cfe7%40group.calendar.google.com&ctz=America%2FNew_York"
                                    style="border: 0" width="800" height="400"></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- staff section with four cards for each of us, with contact information -->
        <section class="events">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-heading">
                            <h1>Our Team</h1>
                            <div class="row text-center">
                                <div class="col-6 col-sm-4 col-md-3">
                                    <div class="card">
                                        <h5 class="card-header">Abby Bilger</h5>
                                        <div class="card-body smallText">
                                            <h5><a>Project Manager</a></h5>
                                            <h6><a href="mailto:s_agbilger@pennwest.edu" class="card-link">Contact</a></h6>
                                            <img class="card-img-top team-image" src="../img/abby.png" alt="Abby">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6 col-sm-4 col-md-3">
                                    <div class="card">
                                        <h5 class="card-header">Martin Bastecki</h5>
                                        <div class="card-body smallText">
                                            <h5><a>Developer</a></h5>
                                            <h6><a href="mailto:s_mpbastecki@pennwest.edu" class="card-link">Contact</a></h6>
                                            <img class="card-img-top team-image" src="../img/martin.jpg" alt="Martin">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6 col-sm-4 col-md-3">
                                    <div class="card">
                                        <h5 class="card-header">AJ Howard</h5>
                                        <div class="card-body smallText">
                                            <h5><a>Lead Designer</a></h5>
                                            <h6><a href="mailto: s_ajhoward@pennwest.edu" class="card-link">Contact</a></h6>
                                            <img class="card-img-top team-image" src="../img/aj.png" alt="AJ">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6 col-sm-4 col-md-3">
                                    <div class="card">
                                        <h5 class="card-header">Jessica Yarger</h5>
                                        <div class="card-body smallText">
                                            <h5><a>Developer</a></h5>
                                            <h6><a href="mailto:s_jlyarger@pennwest.edu" class="card-link">Contact</a></h6>
                                            <img class="card-img-top team-image" src="../img/jess.png" alt="Jess">
                                        </div>
                                    </div>
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

