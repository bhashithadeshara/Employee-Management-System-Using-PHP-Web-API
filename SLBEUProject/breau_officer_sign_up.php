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
    <h1>Bureau Officer Registration </h1>
    <form class="form" action="form.php" method="post" enctype="multipart/form-data" autocomplete="off">
      <div class="alert alert-error"></div>
      <input type="text" placeholder="Name" name="name" required />
      <input type="email" placeholder="Email" name="email" required />
      <input type="text" placeholder="National Id" name="national_id" required />
      <input type="text" placeholder="Address" name="address" required />
      <input type="text" placeholder="Position" name="profession" required />           
      <input type="password" placeholder="Password" name="password" autocomplete="new-password" required />
      <input type="password" placeholder="Confirm Password" name="confirmpassword" autocomplete="new-password" required />      
      <input type="submit" value="Register" name="register" class="btn btn-block btn-primary" />      
    </form>
    <label>Already Have Account ?</label>
       <input type="submit" value="Sign In" name="Sign In" class="btn btn-block btn-primary" onclick="window.location.href='breau_officer_sign_in.php';" />
  </div>
</div>

</body>
</html>