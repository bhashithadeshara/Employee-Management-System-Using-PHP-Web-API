<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet"  href="style3.css" type="text/css" media="screen"/>
	<title></title>
</head>
<body>
<div class="topnav">
  <a href="home.html">Home</a>
  <a href="company.php">Company</a>
  <a href="breau_officer_sign_up.php">Breau Officer</a>
  <a class="active" href="#employee_sign_up">Employee</a>
  <a href="contact_us_breau.php">Contact Us</a>
</div>
  
<h1>Edit Employee</h1>

<?php

  
	$url = "http://localhost:1234/Projects/APIProject/api/employee";
	
	$client = curl_init($url);
	curl_setopt($client,CURLOPT_RETURNTRANSFER,true);
	$response = curl_exec($client);
	

	$result = json_decode($response);
  

  $data = array_slice($result,0,4);
	
  

?>



<div>
	<table>
  <thead>
    <tr>
      <th>Name</th>
      <th>Email</th>
      <th>National Id</th>
      <th>Address</th>
      <th>Profession</th>
      <th>Qualifications</th>
      <th>Location</th>
      <th>Edit</th>
      <th>Delete</th>      
    </tr>
  </thead>
  <tbody>
    <?php
      foreach( $data as $item)
      {
        echo "<tr><td>$item->name</td>";
        echo "<td>$item->email</td>";
        echo "<td>$item->national_id</td>";
        echo "<td>$item->address</td>";
        echo "<td>$item->proffession</td>";
        echo "<td>$item->qualification</td>";
        echo "<td>$item->location</td>";
        echo"<td><button>Edit</button></td>";
        echo"<td><button>Delete</button></td></tr>";
      }
    ?>
    
  </tbody>
</table>

</div>
 


</body>
</html>