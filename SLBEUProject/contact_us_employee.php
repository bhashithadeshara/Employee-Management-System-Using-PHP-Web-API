<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet"  href="style.css" type="text/css" media="screen"/>
  <title></title>
</head>
<body>
<div class="topnav">
  <a href="home.html">Home</a>
  <a href="company.php">Company</a>
  <a href="#breau_officer_sign_up">Breau Officer</a>
  <a href="employee_sign_up.php">Employee</a>
  <a href="contact_us_breau.php">Contact Us</a>
</div>


<div class="body-content">
  <div class="module">
    <h1>Send massege to breau officers</h1>
    <form class="form" action="form.php" method="post" enctype="multipart/form-data" autocomplete="off">
      <div class="alert alert-error"></div>
      <input type="text" placeholder="Name" name="name" required />
      <input type="email" placeholder="Email" name="email" required />
      <input type="text" placeholder="National Id" name="national_id" required />
      <input type="text" placeholder="Massege" name="address" required />
     
      <input type="submit" value="Send" name="send" class="btn btn-block btn-primary" />      
    </form>
   
  </div>
</div>

</body>
</html>