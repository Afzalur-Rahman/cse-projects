<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    
    <!-- Meta Tags -->
    <meta name="description" content="Your website description">
    <meta name="keywords" content="keywords, related, to, your, content">
    <meta name="author" content="Your Name">
    
    <!-- Favicon -->
    <link rel="icon" href="favicon.ico" type="image/x-icon">
    
    <!-- CSS Reset -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
    
    <!-- Swiper CSS Link -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css">
    
    <!-- Font Awesome CDN Link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    
    <!-- Custom CSS File Link -->
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <!-- Header Section Starts -->
    <section class="header">
        <a href="home.php" class="logo">travel</a>
        <nav class="navbar">
            <a href="home.php">home</a>
            <a href="about.php">about</a>
            <a href="package.php">package</a>
            <a href="book.php">book</a>
        </nav>
        <div id="menu-btn" class="fas fa-bars"></div>
    </section>
    <!-- Header Section Ends -->

    <!-- Home Section Starts -->
   <!-- Home section -->
   <section class="home">
    <div class="swiper home-slider">
        <div class="swiper-wrapper">
            <div class="swiper-slide slide" style="background: url(images/pic-1.jpg) no-repeat">
                <div class="content">
                    <span>explore, discover, travel</span>
                    <h3>travel around the world</h3>
                    <a href="package.php" class="btn">discover more</a>
                </div>
            </div>
            <div class="swiper-slide slide" style="background: url(images/img-2.jpg) no-repeat">
                <div class="content">
                    <span>explore, discover, travel</span>
                    <h3>discover new places</h3>
                    <a href="package.php" class="btn">discover more</a>
                </div>
            </div>
            <div class="swiper-slide slide" style="background: url(images/img-3.jpg) no-repeat">
                <div class="content">
                    <span>explore, discover, travel</span>
                    <h3>make your tour worthwhile</h3>
                    <a href="package.php" class="btn">discover more</a>
                </div>
            </div>
            <!-- Add more slides here with the updated image names, e.g., img-4.jpg, img-5.jpg, etc. -->
        </div>
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
    </div>
</section>


    <!-- Home Section Ends -->

    <!-- Service Sections Starts -->
    <section class="services">
        <h1 class="heading-title">Our Services</h1>
        <div class="box-container">
            <div class="box">
                <img src="images/img-1.jpg" alt="">
            </div>
            <div class="box">
                <img src="images/img-2.jpg" alt="">
                <h3>Tour Guide</h3>
            </div>
            <div class="box">
                <img src="images/img-3.jpg" alt="">
                <h3>Trekking</h3>
            </div>
            <div class="box">
                <img src="images/img-4.jpg" alt="">
                <h3>Camp Fire</h3>
            </div>
            <div class="box">
                <img src="images/img-5.jpg" alt="">
                <h3>Off Road</h3>
            </div>
            <div class="box">
                <img src="images/img-6.jpg" alt="">
                <h3>Camping</h3>
            </div>
        </div>
    </section>
    <!-- Service Sections Ends -->

    <!-- Home About Section Starts -->
    <section class="home-about">
        <div class="image">
            <img src="images/about-img.jpg" alt="">
        </div>
        <div class="content">
            <h3>About Us</h3>
            <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Earum provident magnam iusto nostrum animi nobis rerum numquam id consectetur, dolor nihil eligendi iure ducimus voluptates perferendis in sapiente reiciendis dolore!
            </p>
            <a href="about.php" class="btn">Read More</a>
        </div>
    </section>
    <!-- Home About Section Ends -->

    <!-- Home Packages Section Starts -->
    <section class="home-packages">
    <h1 class="heading-title">Our Packages</h1>

    <!-- Package 1 -->
    <div class="box">
        <div class="image">
            <img src="images/img-1.jpg" alt="Adventure & Tour">
        </div>
        <div class="content">
            <h3>Adventure & Tour</h3>
            <p>
                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Blanditiis, ab? Ipsa suscipit in fugit molestias dignissimos eum ratione expedita velit.
            </p>
            <a href="book.php" class="btn">Book Now</a>
        </div>
    </div>

    <!-- Package 2 -->
    <div class="box">
        <div class="image">
            <img src="images/img-2.jpg" alt="Another Package Title">
        </div>
        <div class="content">
            <h3>Another Package Title</h3>
            <p>Another package description here.</p>
            <a href="book.php" class="btn">Book Now</a>
        </div>
    </div>

    <!-- Package 3 -->
    <div class="box">
        <div class="image">
            <img src="images/img-3.jpg" alt="Package 3 Title">
        </div>
        <div class="content">
            <h3>Package 3 Title</h3>
            <p>Package 3 description here.</p>
            <a href="book.php" class="btn">Book Now</a>
        </div>
    </div>

    <!-- Package 4 -->
    <div class="box">
        <div class="image">
            <img src="images/img-4.jpg" alt="Package 4 Title">
        </div>
        <div class="content">
            <h3>Package 4 Title</h3>
            <p>Package 4 description here.</p>
            <a href="book.php" class="btn">Book Now</a>
        </div>
    </div>

    <!-- Package 5 -->
    <div class="box">
        <div class="image">
            <img src="images/img-5.jpg" alt="Package 5 Title">
        </div>
        <div class="content">
            <h3>Package 5 Title</h3>
            <p>Package 5 description here.</p>
            <a href="book.php" class="btn">Book Now</a>
        </div>
    </div>

    <!-- Package 6 -->
    <div class="box">
        <div class="image">
            <img src="images/img-6.jpg" alt="Package 6 Title">
        </div>
        <div class="content">
            <h3>Package 6 Title</h3>
            <p>Package 6 description here.</p>
            <a href="book.php" class="btn">Book Now</a>
        </div>
    </div>

    <!-- Package 7 -->
    <div class="box">
        <div class="image">
            <img src="images/img-7.jpg" alt="Package 7 Title">
        </div>
        <div class="content">
            <h3>Package 7 Title</h3>
            <p>Package 7 description here.</p>
            <a href="book.php" class="btn">Book Now</a>
        </div>
    </div>

    <div class="load-more"><a href="package.php">Load More</a></div>
</section>

    <!-- Home Packages Section Ends -->

    <!-- Home Offer Section Starts -->
    <section class="home-offer">
        <div class="content">
            <h3>Upto 50% Off</h3>
            <p>
                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Iure tempora a: nesciunt maiores guas! Magni cumque guaerat saepe!
            </p>
            <a href="book.php" class="btn">Book Now</a>
        </div>
    </section>
    <!-- Home Offer Section Ends -->

    <!-- Footer Starts Here -->
    <section class="footer">
        <div class="box-container">
            <div class="box">
                <h3>Quick Links</h3>
                <a href="home.php"> <i class="fas fa-angle-right"></i> Home</a>
                <a href="about.php"> <i class="fas fa-angle-right"></i> About</a>
                <a href="package.php"> <i class="fas fa-angle-right"></i> Package</a>
                <a href="book.php"> <i class="fas fa-angle-right"></i> Book</a>
            </div>
            <div class="box">
                <h3>Extra Links</h3>
                <a href="#"> <i class="fas fa-angle-right"></i> Ask Questions</a>
                <a href="#"> <i class="fas fa-angle-right"></i> About Us</a>
                <a href="#"> <i class="fas fa-angle-right"></i> Privacy Policy</a>
                <a href="#"> <i class="fas fa-angle-right"></i> Terms of Use</a>
            </div>
            <div class="box">
                <h3>Contact Info</h3>
                <a href="#"> <i class="fas fa-phone"></i> +123-456-7890</a>
                <a href="#"> <i class="fas fa-phone"></i> +111-222-3333</a>
                <a href="#"> <i class="fas fa-envelope"></i> afzals@gmail.com</a>
                <a href="#"> <i class="fas fa-map"></i> Dhaka, Bangladesh - 400104</a>
            </div>
            <div class="box">
                <h3>Follow Us</h3>
                <a href="#"> <i class="fab fa-facebook-f"></i> Facebook</a>
                <a href="#"> <i class="fab fa-twitter"></i> Twitter</a>
                <a href="#"> <i class="fab fa-instagram"></i> Instagram</a>
                <a href="#"> <i class="fab fa-linkedin"></i> LinkedIn</a>
            </div>
        </div>
        <div class="credit">Created by <span>Mr. Afzal</span> | All rights reserved!</div>
    </section>
    <!-- Footer Ends Here -->

    <!-- Swiper JS Link -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>

    <!-- Custom JS File Link -->
    <script src="js/script.js"></script>
</body>
</html>
