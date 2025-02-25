<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Cafe Haven System</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="Free Website Template" name="keywords">
  <meta content="Free Website Template" name="description">

  <!-- Favicon -->
  <link href="img/favicon.ico" rel="icon">

  <!-- Google Font -->
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200;400&family=Roboto:wght@400;500;700&display=swap" rel="stylesheet"> 

  <!-- Font Awesome -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

  <!-- Libraries Stylesheet -->
  <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

  <!-- JavaScript Libraries -->
  <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
  <script src="lib/easing/easing.min.js"></script>
  <script src="lib/waypoints/waypoints.min.js"></script>
  <script src="lib/owlcarousel/owl.carousel.min.js"></script>
  <script src="lib/tempusdominus/js/moment.min.js"></script>
  <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
  <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

  <!-- Template Javascript -->
  <script src="js/main.js"></script>

  <!-- Customized Bootstrap Stylesheet -->
  <link href="css/style.min.css" rel="stylesheet">
  <link rel="stylesheet" href="css/style.css">
</head>
<body>

<!-- loginregister -->
 

<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="index.php">CAFE HAVEN</a>
        <div class="collapse navbar-collapse">
            <ul class="navbar-nav ms-auto">
                <?php if (isset($_SESSION['user_id'])): ?>
                    <li class="nav-item"><a class="nav-link" href="logout.php">Logout</a></li>
                <?php else: ?>
                    <li class="nav-item"><a class="nav-link" href="login.php">Login</a></li>
                    <li class="nav-item"><a class="nav-link" href="register.php">Register</a></li>
                <?php endif; ?>
                
            </ul>
        </div>
    </div>
</nav>
<!-- loginregister end -->
  <!-- Navbar Start -->
  <div class="container-fluid p-0 nav-bar">
    <nav class="navbar navbar-expand-lg bg-none navbar-dark py-2">
      
      <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
        <div class="navbar-nav ml-auto p-4">
          <a href="index.php" class="nav-item nav-link active">Home</a>
          <a href="about.php" class="nav-item nav-link">About</a>
          <a href="service.php" class="nav-item nav-link">Service</a>
          <a href="Order.php" class="nav-item nav-link active">Order</a>
          <a href="menu.php" class="nav-item nav-link">Menu</a>
          <a href="reservation.php" class="nav-item nav-link">Reservation</a>
          <a href="contact.php" class="nav-item nav-link">Contact</a>
          
        </div>
        </div>
      </div>
    </nav>
  </div>

   
  <!-- Navbar End -->

  <!-- Carousel Start -->
  <div class="container-fluid p-0 mb-5">
    <div id="blog-carousel" class="carousel slide overlay-bottom" data-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="img/carousel-1.jpg" alt="Cozy Cafe Atmosphere" class="w-100">
          <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
          <a href="index.php" class="navbar-brand px-lg-4 m-0">
        <h1 class="m-0 display-8 text-uppercase text-white">Welcome!</h1>
      </a>
            <h2 class="text-primary font-weight-medium m-0">We Have Been Serving</h2>
            <h1 class="display-1 text-white m-0">COFFEE</h1>
            <h2 class="text-white m-0">* SINCE 2024</h2>
          </div>
        </div>
        <div class="carousel-item">
          <img src="img/carousel-2.jpg" alt="Premium Coffee Selection" class="w-100">
          <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
            <h2 class="text-primary font-weight-medium m-0">We Have Been Serving</h2>
            <h1 class="display-1 text-white m-0">COFFEE</h1>
            <h2 class="text-white m-0">* SINCE 2024</h2>
          </div>
        </div>
      </div>
      <a href="#blog-carousel" class="carousel-control-prev" data-slide="prev" aria-label="Previous Slide">
        <span class="carousel-control-prev-icon"></span>
      </a>
      <a href="#blog-carousel" class="carousel-control-next" data-slide="next" aria-label="Next Slide">
        <span class="carousel-control-next-icon"></span>
      </a>
    </div>
  </div>
  <!-- Carousel End -->

  <!-- About Start -->
  <?php
include 'about.php';
$about = getAboutContent();
?>
<section class="content" id="about">
    <h2><?php echo $about['title']; ?></h2>
    <p><?php echo $about['description']; ?></p>
</section>

  <div class="container-fluid py-5" id="about">
    <div class="container">
      <div class="section-title">
        <h4 class="text-primary text-uppercase" style="letter-spacing: 5px;">About Us</h4>
        <h1 class="display-4">Serving Since 2024</h1>
        <h5 class="mb-3">Your Favorite Spot for Coffee and Conversations</h5>
        <p>Discover the perfect blend of ambiance and flavors at our cafe. Whether you're here to work, relax, or catch up with friends, we create a welcoming space just for you.</p>
        <a href="#" class="btn btn-secondary font-weight-bold py-2 px-4 mt-2">Learn More</a>
      </div>
      <div class="row">
        <div class="col-lg-6 py-5 py-lg-0" style="min-height: 500px;">
          <div class="position-relative h-100">
            <img src="img/about.png" alt="About Cafe Haven" class="position-absolute w-100 h-100" style="object-fit: cover;">
          </div>
        </div>
        <div class="col-lg-6 py-0 py-lg-5">
          <h1 class="mb-3">Our Vision</h1>
          <p>Our cafe is a place where you can relax, unwind, and enjoy a cup of coffee brewed to perfection. We offer a variety of pastries, sandwiches, and desserts to complement your favorite drink</p>
          <h5 class="mb-3"><i class="fa fa-check text-primary mr-3"></i>Lorem, ipsum dolor.</h5>
          <h5 class="mb-3"><i class="fa fa-check text-primary mr-3"></i>Lorem, ipsum dolor.</h5>
          <a href="#" class="btn btn-primary font-weight-bold py-2 px-4 mt-2">Learn More</a>
        </div>
      </div>
    </div>
  </div>
  <!-- About End -->
   <!-- Service Start -->
<div class="container py-5">
  <div class="section-title text-center mb-5">
    <h4 class="text-primary text-uppercase" style="letter-spacing: 5px;">Our Services</h4>
    <h1 class="display-4">Cafien products</h1>
  </div>
  <div class="row">
    <div class="col-lg-6 mb-5">
      <div class="row align-items-center">
        <div class="col-sm-5">
          <img src="img/service-1.jpg" alt="Fastest Door Delivery" class="img-fluid mb-3 mb-sm-0">
        </div>
        <div class="col-sm-7">
          <h4><i class="fa fa-truck service-icon text-primary"></i> Fastest Door Delivery</h4>
          <p class="m-0">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Praesentium reprehenderit, tempore aliquid cupiditate quia nesciunt!</p>
        </div>
      </div>
    </div>

    <div class="col-lg-6 mb-5">
      <div class="row align-items-center">
        <div class="col-sm-5">
          <img src="img/service-2.jpg" alt="Fresh Coffee Beans" class="img-fluid mb-3 mb-sm-0">
        </div>
        <div class="col-sm-7">
          <h4><i class="fa fa-coffee service-icon text-primary"></i> Fresh Coffee Drinks</h4>
          <p class="m-0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Explicabo cupiditate aperiam incidunt repudiandae ad voluptatem.</p>
        </div>
      </div>
    </div>

    <div class="col-lg-6 mb-5">
      <div class="row align-items-center">
        <div class="col-sm-5">
          <img src="img/service-3.jpg" alt="Best Quality Coffee" class="img-fluid mb-3 mb-sm-0">
        </div>
        <div class="col-sm-7">
          <h4><i class="fa fa-award service-icon text-primary"></i> Best Quality Food</h4>
          <p class="m-0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Eveniet nesciunt facere velit est dicta vel?</p>
        </div>
      </div>
    </div>

    <div class="col-lg-6 mb-5">
      <div class="row align-items-center">
        <div class="col-sm-5">
          <img src="img/service-4.jpg" alt="Online Table Booking" class="img-fluid mb-3 mb-sm-0">
        </div>
        <div class="col-sm-7">
          <h4><i class="fa fa-table service-icon text-primary"></i> Online Table Booking</h4>
          <p class="m-0">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Veniam velit minima, assumenda explicabo sapiente recusandae.</p>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Service End -->

 <!-- Offer End -->
  <div class="offer container-fluid my-5 py-5 text-center position-relative
  overlay-top overlay-bottom">
    <div class="container py-5">
      <h1 class="display-5 text-primary mt-3">50% OFF</h1>
      <h1 class="text-white mb-3">Sunday Special Offer</h1>
       
</h4>
<form action="#" class="form-inline justify-content-center mb-4">
  <input type="text" name="" id="" class="form-control p-4"
   placeholder="Your Email" style="height: 60px;">
<div class="input-group-append">
  <button class="btn btn-primary font-weight-bold px-4 
  type="submit">Sign Up</button>
</div>
</div>
</form>
<!-- offer end -->
 <!-- Menu Start -->
 <?php
include "menu.php";
$menuItems = getMenuItems();
?>
<section class="content" id="menu">
    <h2>Our Menu</h2>
    <div class="menu">
        <?php foreach ($menuItems as $item): ?>
        <div class="menu-item">
            <img src="<?php echo $item['image']; ?>" alt="<?php echo $item['name']; ?>">
            <h3><?php echo $item['name']; ?></h3>
            <p><?php echo $item['description']; ?></p>
        </div>
        <?php endforeach; ?>
    </div>
</section>


 <div class="container">
    <div class="text-primary text-uppercase" style="letter-spacing: 50px;">
      Menu & Price</h1>
      <h1 class="display-4">Competative Pricing</h1>
</div>
<div class="row">
  <div class="col-lg-6">
    <h1 class="mb-5">Cold coffee</h1>
    <div class="row align-items-center mb-5">
      <div class="col-4 col-sm-3">
        <img src="img/menu-1.jpg" alt="" class="w-100
        rounded-circle mb-3 mb-sm-0">
        <h5 class="menu-price">$5</h5>
     </div>
     <div class="col-8 col-sm-9">
      <h4>Black Coffee</h4>
      <p class="m-0">Lorem ipsum dolor sit, amet consectetur adipisicing elit. 
        Voluptatum fuga deleniti, minus voluptate inventore omnis?</p>
</div>
</div>
<div class="row align-items-center mb-5">
  <div class="col-4 col-sm-3">
    <img src="img/menu-2.jpg" alt="" class="w-100"
    rounded-circle mb-3 mb-sm-3">
    <h5 class="menu-price">$7</h5>
</div>
<div class="col-0 col-sm-9">
  <h4>Chocolate Coffee</h4>
  <p class="m-0">Lorem ipsum dolor sit, amet consectetur adipisicing elit. 
    Beatae mollitia sint amet modi? Libero, modi.</p>
</div>
</div>
<div class="row-align-items-center b-5">
  <div class="col-4 col-sm-3">
    <img src="img/menu-3.jpg" alt="" class="w-100 rounded-circle
    mb-3 mb-sm-0">
    <h5 class="menu-price">$9</h5>
</div>
<div class="col-8 col-sm-9">
  <h4>Espresso</h4>
  <p class="m-0">Lorem ipsum dolor sit amet consectetur
     adipisicing elit. Id asperiores ex reprehenderit est nesciunt.
     consectetur.</p>
  </div>
</div>
</div>
<div class="col-lg-6">
  <h1 class="mb-5">Espresso</h1>
  <div class="row align-items-center mb-5">
    <div class="col-4 col-sm-3">
      <img src="img/menu-1.jpg" alt="" class="w-100
      rounded-circle mb-3 mb-sm-0">
      <h5 class="menu-price">$5</h5>
</div>
<div class="col-8 col-sm-0">
  <h4>Black Coffee</h4>
  <p class="m-0">Lorem ipsum dolor sit, amet consectetur adipisicing elit.
    Eaque recusandae reiciendis aperiam porra quaerat ipsam!</p>
</div>
</div>
<div class="row align-items-center mb-5">
  <div class="col-4 col-sm-3">
    <img src="img/menu-2.jpg" alt="" class="w-100
    rounded-circle mb-3 mb-sm-0">
    <h4 class="menu-price">$7</h4>
</div>
<div class="col-8 col-sm-9">
  <h4>Cjocolate Coffee</h4>
  <p class="m-0">Lorem ipsum dolor sit amet consectetur, adipisicing elit. 
   Unde adipisci reprehenderit, perferendis dolores dolorem consectetur.</p>
</div>
</div>
<div class="row align-items-center mb-5">
  <div class="col-4 col-sm-3">
    <img src="img/menu-3.jpg alt="" class="w-100
    rounded-circle mb-3 mb-sm-0">
    <h5 class="menu-price">$9</h5>
</div>
<div class="col-8 col-sm-9">
  <h4> Cold Beverage</h4>
  <p class="m-0">Lorem ipsum dolor sit amet consectetur adipisicing elit.
    Similique eum deleniti fugiat explicabo
     sed ratione?</p>
</div>
</div>
<div class="row align-items-center mb-5">
  <div class="col-4 col-sm-3">
    <img src="gallery-6.jpg" alt="" class="w-100
    rounded-circle mb-3 mb-sm-0">
    <h5 class="menu-price">$5</h5>
</div>
</div>
</div>
<!-- Menu End -->
<!-- reservation start -->
 
 <div class="container-fluid my-5" id="reserve">
  <div class="container">
    <div class="reservation position-relative overlay-top overlay-bottom">
      <div class="row align-items-center">
        <div class="col-lg-6 my-5 my-lg-0">
          <div class="p-5">
            <div class="mb-4">
              <h1 class="display-3 text-primary">30% OFF</h1>
              <h1 class="text-white">For Online Reservation</h1>
</div> 
<p class="text-white">We give the assurity of prior bookings just by sitting at home.</p>
 <ul class="list-inline text-white m-0">
  <li class="py-2"><i class="fa fa-check text-primary
  mr-3"></i>5% Discount on the order.</li>
  
  <li class="py-2"><i class="fa fa-check tet-primary
   mr-3"></i>Advance payment for confirmation.</li>
   <li class="py-2"><i class="fa fa-check text-primary
   mr-3"></i>Provision of good service.</li>
</ul>
</div>
</div>
<div class="text-white mb-4 mt-5">Book Your Table</h1>
<form action="#" class="mb-5">
  <div class="form-group">
    <input type="text" name="" id="" placeholder="Name"
    class="form-control bg-transparent border-primary p-4"
    required="required">
</div>

<div class="form-group">
  <input type="email" name="" id=""
  placeholder="Email" class="form-control
  bg-transparent border-priamary p-4 required="required">
</div>
<div class="form-group">
  <input type="phone" name="" id=""
  placeholder="Number" class="form-control
  bg-transparent border-priamary p-4 required="required">
</div>
<div class="form-group">
  <input type="time" name="" id=""
  placeholder="Time" class="form-control
  bg-transparent border-priamary p-4 required="required">
</div>

<div class="form-group">
<div class="date" id-"date"
data-target-input="nearest">
<input type="text" name="" id=""
placeholder="Date" data-target="#date"
class="form-control bg-transparent
border-primary p-4 datetimepicker">
</div>
</div>

<div class="form-group">
  <div class="time" id="time"
  data-target-input="nearest">
  <input type="text" name="" id=""
  placeholder="Time" class="form-comtrol"
  bg-transparent-input" data-target="#time"
  data-toggle="datetimepicker">
</div>

<div class="form-group">
  <select name="" id="" class="custom-select
  bg-transparent border-primary px-4" stle="height:
  49px;">
      <option selected>Person</option>

      <option value="1">Person 1</option>

      <option value="2">Person 2</option>

      <option value="3">Person 3</option>

      <option value="4">Person 4</option>
</select>
</div>
</div>
   <button class="submit btn btn-primary btn-block
   font-weight-bold py-3">Book Now</button>
</div>
</form>
</div>
</div>
</div>
</div>
</div>
<!-- Reservation End -->
 
  <!--Contact Start -->

  <div class="container-fluid py-5" id="contact">
    <div class="container">
        <div class="section-title">
            <h4 class="text-primary text-uppercase" style="letter-spacing: 5px;">Contact Us</h4>
            <h1 class="display-4">Get In Touch</h1>
        </div>
        <div class="row">
            <!-- Contact Details -->
            <div class="col-lg-6 mb-5">
                <h4 class="text-primary mb-4">Contact Information</h4>
                <p><i class="fa fa-map-marker-alt text-primary mr-3"></i>123 Coffee Street, Coffee City, CO 12345</p>
                <p><i class="fa fa-phone-alt text-primary mr-3"></i>+1 234 567 890</p>
                <p><i class="fa fa-envelope text-primary mr-3"></i>info@cafehaven.com</p>
                <h4 class="text-primary mt-4 mb-4">Opening Hours</h4>
                <p><i class="fa fa-clock text-primary mr-3"></i>Mon - Fri: 8:00 AM - 9:00 PM</p>
                <p><i class="fa fa-clock text-primary mr-3"></i>Sat - Sun: 9:00 AM - 10:00 PM</p>
            </div>

            <!-- Contact Form -->
            <div class="col-lg-6">
                <h4 class="text-primary mb-4">Send Us a Message</h4>
                <form class="contact-from">
                    <div class="form-group">
                        <input type="text" class="form-control border-primary p-4" placeholder="Your Name" required="required">
                        <div class="help-block">
                            <ul>
                                <!-- Form validation errors/messages will display here -->
                            </ul>
                        </div>
                    </div>
                    <div class="form-group">
                        <input type="email" class="form-control border-primary p-4" placeholder="Your Email" required="required">
                        <div class="help-block">
                            <ul>
                                <!-- Form validation errors/messages will display here -->
                            </ul>
                        </div>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control border-primary p-4" placeholder="Subject" required="required">
                        <div class="help-block">
                            <ul>
                                <!-- Form validation errors/messages will display here -->
                            </ul>
                        </div>
                    </div>
                    <div class="form-group">
                        <textarea class="form-control border-primary p-4" rows="5" placeholder="Message" required="required"></textarea>
                        <div class="help-block">
                            <ul>
                                <!-- Form validation errors/messages will display here -->
                            </ul>
                        </div>
                    </div>
                    <div>
                        <button class="btn btn-primary btn-block font-weight-bold py-3" type="submit">Send Message</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- Contact End -->
   <!-- footer start-->
    <div class="container-fluid footer text-white mt-5 px-0 position-relative
    overlay-top">
    <div class="row mx-0 pt-5 px-sm-3 px-lg-5 mt-4">
      <div class="col-lg-3 col-md-6 mb-5">
        <h4 class="text-white text-uppercase mb-4" style="letter-spacing: 3px;">
          Got In Touch</h4>
          <p><i class="fa fa-map-marker-alt mr-2"></i>123 Street, New York, USA</p>
          <p><i class="fa fa-phone-alt mr-2"></i>+012 345 6789</p>
          <p><i class="fa fa-envelope mr-2"></i>info@example.com</p>
</div>
</div class="col-lg-3 col-md-6 mb-5">
   <h4 class="text-white text-uppercase mb-4" style="letter-spacing: 3px;">
    Follow Us</h4>
    <p>To get updated with the new offers and discount stay connected with us!">
        <a href="#" class="btn btn-lg btn-outline-light
        btn-lg-square mr-2"><i class="fab fa-twitter"></i></a>

        <a href="#" class="btn btn-lg btn-outline-light
        btn-lg-square mr-2"><i class="fab fa-facebook-f"></i></a>
        
        <a href="#" class="btn btn-lg btn-outline-light
        btn-lg-square mr-2"><i class="fab fa-linkedIni-in"></i></a>
        
        <a href="#" class="btn btn-lg btn-outline-light
        btn-lg-square mr-2"><i class="fab fa-instagram"></i></a>
</div>
</div>
<div class="col-lg-3 col-md-6 mb-5">
  <h4 class="text-white text-uppercase mb-4" style="letter-spacing: 3px;
  ">Open Hours</h4>
  </div>
  <h6 class="text-white text-uppercase">Monday - Friday</h6>
  <p>8.00 AM - 8.00 PM</p>
</div>
</div>
<div curl_share_close="col-lg-3 col-md-6 mb-5">
  <h4 class="text-white text-uppercase mb-4" style="letter-spacing: 3px;
  ">Newsletter</h4>
  <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. 
    Exercitations, sed.</p>
    <div class="w-100">
      <div class="input-group">
        <input type="text" name="" id="" class="form-control border-light"
        style="padding: 25px;" placeholder="Your Email">    
        <div class="input-group-append">
          <button class="btn btn-primary font-weight-bold px-3">Sign Up</button>
      </div>
   </div>
</div>    
</div>
</div>
<div class="container-fluid text-center text-white border-ti=op mt-4 py-4
px-sm-3 px-md-5" style="border-color: rgba(256, 256, 256, .1)!important;">
<p class="mb-2 text-white">Copyright &copy; <a href="#"
class="font-weight-bold">CAFE HAVEN</a>.ALl Rights Reserved.</p>


</div>
</div>

   <!-- footer end -->
    <!-- Back to top -->
     <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="fa-fa-angle-doubleup">
</i></a>



  
