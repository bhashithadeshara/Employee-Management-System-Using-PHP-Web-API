<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet"  href="style.css" type="text/css" media="screen"/>
	<title></title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<link href="//db.onlinewebfonts.com/c/a4e256ed67403c6ad5d43937ed48a77b?family=Core+Sans+N+W01+35+Light" rel="stylesheet" type="text/css"/>
<!-- <link rel="stylesheet" href="form.css" type="text/css"/> -->



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
    <h1>Employee Registration</h1>
    <form class="form" id="api_form" action="employeeHomePage.php" method="POST" autocomplete="off">
      <div class="alert alert-error"></div>
      <input type="text" placeholder="Name" name="name" required />
      <input type="email" placeholder="Email" name="email" required />
      <input type="text" placeholder="National Id" name="national_id" required />
      <input type="text" placeholder="Address" name="address" required />
      <input type="text" placeholder="Profession" name="profession" required />
      <select id="qualification" name="qualification">
          <option value="qualification">Qualification</option>
          <option value="phd">PhD</option>
          <option value="msc">MSC</option>
          <option value="degree">Degree</option>
          <option value="diploma">Diploma</option>
       </select>
      <input type="text" placeholder="Location" name="location" required />
      <input type="password" placeholder="Password" name="password" autocomplete="new-password" required />
      <input type="password" placeholder="Confirm Password" name="confirm_password" autocomplete="new-password" required />
      <!-- <div class="avatar"><label>Select your CV: </label><input type="file" name="cv" accept="file/*" required /></div> -->
      <input type="submit" value="Register" name="register" class="btn btn-block btn-primary" />      
    </form>
    <label>Already Have Account ?</label>
       <input type="submit" value="Sign In" name="Sign In" class="btn btn-block btn-primary" onclick="window.location.href='employeeHomePage.php';" />
  </div>
</div>
  


<?php

function postData()
{
    $url = "http://localhost:1234/Projects/APIProject/api/employee";

    $curl = curl_init($url);
    curl_setopt($curl, CURLOPT_URL, $url);
    curl_setopt($curl, CURLOPT_POST, true);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
    
    $headers = array(
       "Accept: application/json",
       "Content-Type: application/x-www-form-urlencoded",
    );
    curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
    
    $data = <<<DATA
    {"name":"amal",
      "email":"asaa@gmail.com",
      "national_id":"65595959v",
      "address":"matara",
      "proffession":"QA",
      "qualification":"Diploma",
      "location":"matara",
      "password":"123",
      "confirm_password":"123"
    }
    DATA;
    
    curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
    
    //for debug only!
    curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
    curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
    
    $resp = curl_exec($curl);
    echo $resp;
    curl_close($curl);
    var_dump($resp);

}

 

?>

  <script>
        $(document).ready(function(){
            
            $('#api_form').on('submit', function(event){
                event.preventDefault();
                if($('#firstName').val() == ''){
                    alert('first_name field is required!');
                }else if($('#last_name').val() == ''){
                    alert('The last_name field is required!');
                }else{
                    var formData = $(this).serialize();

                    console.log(formData);
                    $.ajax({
                       
                        url: "http://localhost:1234/Projects/APIProject/api/employee",
                        type: "POST",
                        contentType:"application/json;charset=utf-8",
                        dataType: "json",
                                                                       
                        success:function(data){                            
                            //$('#api_form')[0].reset();
                            alert("Sucess");
                            console.log(data);
                        },
                        data: JSON.stringify(formData), 
                    });
                
                }
            });
           
           
        });


        


    </script>
  
   



</body>
</html>