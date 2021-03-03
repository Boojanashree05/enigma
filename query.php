<?php
include'insert.php';
?>
<?php

if (isset($_POST['submit'])) {
	  // $id=$_POST['id'];
	$name=$_POST['name'];
	$mobilenumber=$_POST['mobilenumber'];
	$fathername=$_POST['fathername'];
	$mothername=$_POST['mothername'];
	$city=$_POST['city'];
	$pincode=$_POST['pincode'];
	$state=$_POST['state'];


$sql='INSERT INTO bttform(name,mobilenumber,fathername,mothername,city,pincode,state) VALUES ("'.$name.'","'.$mobilenumber.'","'.$fathername.'","'.$mothername.'","'.$city.'","'.$pincode.'","'.$state.'");';
$data=mysqli_query($conn,$sql);

}


?>