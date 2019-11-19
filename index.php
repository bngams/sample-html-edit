<?php
    $pdo = new ConnexionDB(...);
    query = "SELECT * from CARS";
    $cars = query.execute();
?>

<!DOCTYPE html>
<html>
<head>
	<style>
    	.center {
      		text-align: center;
        }
    </style>
</head>
<body>

<h2>HTML Forms</h2>

<form action="">
  First name:<br>
  <input class="center" type="text" name="firstname" value="Mickey">
  <br>
  Last name:<br>
  <input type="text" name="lastname" value="Mouse">
  <br>
  Email:<br>
  <input type="email" name="email" value="">
  <br>
  Cars:<br>
  <select name="cars">
      <?php foreach ($cars as $car) { ?>
           <option value="$car">$car</option>
      <?php } ?>
  </select>
  <br><br>
  <input type="submit" value="Submit">
</form> 

<p>If you click the "Submit" button, the form-data will be sent to a page called "/action_page.php".</p>

</body>
</html>
