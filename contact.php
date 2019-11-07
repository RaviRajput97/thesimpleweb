<?php include 'header.php'; ?>
<div class="jumbotron">
  <h1>The SimpleWeb</h1>
  <p>The best branding agency in Delhi</p>
</div>

<!-- Code for contact Form start Here -->
<section class="my-5"> <!-- give margin class -->
  <div class="py-5"> <!-- give padding class -->
    <h2 class="text-center">Contact Us</h2> <!-- give center class -->
  </div>
  <div class="w-50 m-auto">
    <form action="userinfo.php" method="post">
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
      <label>Comment</label>
      <textarea class="form-control" name="comment">  </textarea>
      </div>
      <button type="submit" class="btn btn-success">Submit</button>
      
    </form>
  </div>
</section>
<!-- Code for contact Form end Here -->

<?php include 'footer.php'; ?>