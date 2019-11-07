<!-- code for header section -->

<?php include 'header.php'; ?>

<!-- below we Add Carousel [Slider] of bootstrap 4 -->

<div id="demo" class="carousel slide" data-ride="carousel">

  <!-- Indicators -->
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>
  
  <!-- The slideshow -->
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="images/la.jpg" alt="Los Angeles" width="1100" height="500">
    </div>
    <div class="carousel-item">
      <img src="images/ch.jpg" alt="Chicago" width="1100" height="500">
    </div>
    <div class="carousel-item">
      <img src="images/ny.jpg" alt="New York" width="1100" height="500">
    </div>
  </div>
  
  <!-- Left and right controls -->
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>
<!-- Carousel code end here -->

<!-- Code for about us section start -->
<section class="my-5"> <!-- give margin class -->
  <div class="py-5"> <!-- give padding class -->
    <h2 class="text-center">About Us</h2> <!-- give center class -->
  </div>
<div class="container-fluid">
    <div class="row">
      <div class="col-lg-6 col-md-6 col-12">
        <img src="images/at.jpg" class="img-fluid aboutimg"> 
      </div> 
      <div class="col-lg-6 col-md-6 col-12">
        <h2 class="display-4">SimpleWeb Development Agency</h2>
        <p class="py-3">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. 
        </p> 
        <a href="about.php" class="btn btn-success">Know More</a>
      </div> 
    </div>
</div>
</section>
<!-- Code for about us section End -->

<!-- Code for Services section Start -->
<section class="my-5"> <!-- give margin class -->
  <div class="py-5"> <!-- give padding class -->
    <h2 class="text-center">Our Services</h2> <!-- give center class -->
  </div>
  <div class="container-fluid">
    <div class="row">
      <!-- SERVICE ONE -->
      <div class="col-lg-4 col-md-4 col-12">
       <!-- Below we are using bs4 cards --> 
      <div class="card">
      <img class="card-img-top" src="images/sl.jpg" alt="Card image">
      <div class="card-body">
        <h4 class="card-title">Web Devlopment</h4>
        <p class="card-text">Some example text.</p>
        <a href="#" class="btn btn-primary">See Profile</a>
      </div>
      <!-- code end for bs4 cards -->
      </div>
      </div>
      <!-- SERVICE TWO -->
      <div class="col-lg-4 col-md-4 col-12">
       <!-- Below we are using bs4 cards --> 
      <div class="card">
      <img class="card-img-top" src="images/sl.jpg" alt="Card image">
      <div class="card-body">
        <h4 class="card-title">Search Engine Optamization</h4>
        <p class="card-text">Some example text.</p>
        <a href="#" class="btn btn-primary">See Profile</a>
      </div>
      <!-- code end for bs4 cards -->
      </div>
      </div>
      <!-- SERVICE THREE -->
      <div class="col-lg-4 col-md-4 col-12">
       <!-- Below we are using bs4 cards --> 
      <div class="card">
      <img class="card-img-top" src="images/sl.jpg" alt="Card image">
      <div class="card-body">
        <h4 class="card-title">Android App Devlopment</h4>
        <p class="card-text">Some example text.</p>
        <a href="#" class="btn btn-primary">See Profile</a>
      </div>
      <!-- code end for bs4 cards -->
      </div>
      </div>

    </div>
  </div>
</section>
<!-- Code for Services section End -->

<!-- Code for Our Work section Start -->
<section class="my-5"> <!-- give margin class -->
  <div class="py-5"> <!-- give padding class -->
    <h2 class="text-center">Our Work</h2> <!-- give center class -->
  </div>
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-4 col-md-4 col-12"> <!-- image1 -->
        <img src="images/gl.jpg" class="img-fluid pb-4">
      </div>
      <div class="col-lg-4 col-md-4 col-12"><!-- image2 -->
        <img src="images/gl.jpg" class="img-fluid pb-4">
      </div>
      <div class="col-lg-4 col-md-4 col-12"><!-- image3 -->
        <img src="images/gl.jpg" class="img-fluid pb-4">
      </div>
      <div class="col-lg-4 col-md-4 col-12"><!-- image4 -->
        <img src="images/gl.jpg" class="img-fluid pb-4">
      </div>
      <div class="col-lg-4 col-md-4 col-12"><!-- image5 -->
        <img src="images/gl.jpg" class="img-fluid pb-4">
      </div>
      <div class="col-lg-4 col-md-4 col-12"><!-- image6 -->
        <img src="images/gl.jpg" class="img-fluid pb-4">
      </div>
      <div class="col-lg-4 col-md-4 col-12"><!-- image7 -->
        <img src="images/gl.jpg" class="img-fluid pb-4">
      </div>
      <div class="col-lg-4 col-md-4 col-12"><!-- image8 -->
        <img src="images/gl.jpg" class="img-fluid pb-4">
      </div>
      <div class="col-lg-4 col-md-4 col-12"><!-- image9 -->
        <img src="images/gl.jpg" class="img-fluid pb-4">
      </div>
    </div>
  </div>
</section>
<!-- Code for Our Work section End -->

<!-- Code for contact Form start Here -->
<section class="my-5"> <!-- give margin class -->
  <div class="py-5"> <!-- give padding class -->
    <h2 class="text-center">Get a Quotation</h2> <!-- give center class -->
  </div>
  <div class="w-50 m-auto">
    <form action="getquot.php" method="post">
      <div class="form-group">
      <label>Name</label>
      <input type="text" name="user" autocomplete="off" class="form-control"> 
      </div>
      <div class="form-group">
      <label>Email ID</label>
      <input type="Email" name="email" autocomplete="off" class="form-control"> 
      </div>
      <div class="form-group">
      <label>Mobile Number</label>
      <input type="number" name="mobile" autocomplete="off" class="form-control"> 
      </div>
      <div class="form-group">
      <label>Quotation For</label>
      <textarea class="form-control" name="quot">  </textarea>
      </div>
      <button type="submit" class="btn btn-success">Submit</button>
      
    </form>
  </div>
</section>
<!-- Code for contact Form end Here -->

<!-- Code for footer start here -->
<?php include 'footer.php'; ?>