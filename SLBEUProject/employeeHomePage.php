<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet"  href="style.css" type="text/css" media="screen"/>
	<title></title>

	<link href="//db.onlinewebfonts.com/c/a4e256ed67403c6ad5d43937ed48a77b?family=Core+Sans+N+W01+35+Light" rel="stylesheet" type="text/css"/>
<link rel="stylesheet" href="form.css" type="text/css">



</head>
<body>
<div class="topnav">
  <a href="home.html">Home</a>
  <a href="company.php">Company</a>
  <a href="breau_officer_sign_up.php">Breau Officer</a>
  <a class="active" href="#employee_sign_up">Employee</a>
  <a href="contact_us_employee.php">Contact Us</a>
</div>

<div class="body-content">
  <div class="module">
    <h1>Update Your profile</h1>
    <form class="form" id="api_form" action="employeeHomePage.php" method="post" enctype="multipart/form-data" autocomplete="off">
      <div class="alert alert-error"></div>
      <input type="text" placeholder="Name" name="name" required />
      <input type="email" placeholder="Email" name="email" required />
      <input type="text" placeholder="National Id" name="national_id" required />
      <input type="text" placeholder="Address" name="address" required />
      <input type="text" placeholder="Profession" name="profession" required />
      <select id="qualification" name="qualifications">
          <option value="qualification">Qualification</option>
          <option value="phd">PhD</option>
          <option value="msc">MSC</option>
          <option value="degree">Degree</option>
          <option value="diploma">Diploma</option>
       </select>
      <input type="text" placeholder="Location" name="Location" required />
      <input type="password" placeholder="Password" name="password" autocomplete="new-password" required />
      <input type="password" placeholder="Confirm Password" name="confirmpassword" autocomplete="new-password" required />
      <div class="avatar"><label>Select your CV: </label><input type="file" name="cv" accept="file/*" required /></div>
      <input type="submit" value="sbmit" name="Update" class="btn btn-block btn-primary" />      
    </form>
    
  </div>
</div>


</body>
</html>