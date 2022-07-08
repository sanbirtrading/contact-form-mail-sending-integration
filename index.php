<?php include 'sendemail.php';?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Appointment</title>
  <meta content="" name="description">
  <meta content="" name="keywords">
  <link href="style.css" rel="stylesheet">
  <link href="bootstrap/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<section>
  <div class="container" data-aos="fade-up">
    <div class="section-title"  style="margin-top: 190px;text-align: center;">
      <h2>Contact form</h2>
    </div>
    <form action="" method="post" role="form" class="php-email-form" data-aos="fade-up" data-aos-delay="100">
      <div class="row justify-content-center">
        <div class="col-md-9 mt-2 form-group">
          <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
        </div>
        <div class="col-md-9 form-group mt-2">
          <input type="tel" class="form-control" name="phone" id="phone" placeholder="Your Phone" required>
        </div>
        <div class="col-md-9 form-group mt-2">
          <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
        </div>
        <div class="col-md-9 form-group mt-2">
         <textarea class="form-control" name="message" rows="4" placeholder="Message (Optional)"></textarea>
        </div>
        <div class="my-3">
        <?php echo $alert; ?>
        </div>
        <div class="text-center">
          <button name="submit" class="btn btn-primary" type="submit">Send Mail</button>
        </div>
      </div>
    </form>
  </div>
</section>

  <script type="text/javascript">
    if(window.history.replaceState){
      window.history.replaceState(null, null, window.location.href);
    }
   </script>
   <script src="bootstrap/bootstrap.min.js"></script>
</body>

</html>