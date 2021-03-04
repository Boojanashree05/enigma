<?php

include'insert.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	
</head>
<?php
$nameErr=$mobilenumberErr=$fathernameErr=$mothernameErr=$cityErr=$pincodeErr=$stateErr="";
$name=$mobilenumber=$fathername=$mothername=$city=$pinsode=$state="";

if ($_SERVER["REQUEST_METHOD"]=="POST") {
	if (empty($_POST['name'])) {
		$nameErr='required';
		}else{
			$name=test_input( $_POST['name']);
		}
		if (empty($_POST['mobilenumber'])) {
		$mobilenumberErr='required';
		}else{
			$mobilenumber=test_input( $_POST['mobilenumber']);
		}
		if (empty($_POST['fathername'])) {
		$fathernameErr='required';
		}else{
			$fathername=test_input( $_POST['fathername']);
		}
		if (empty($_POST['mothername'])) {
		$mothernameErr='required';
		}else{
			$mothername=test_input( $_POST['mothername']);
		}
		if (empty($_POST['$city'])) {
		$cityErr='required';
		}else{
			$city=test_input( $_POST['city']);
		}
		if (empty($_POST['pincode'])) {
		$pincodeErr='required';
		}else{
			$pincode=test_input( $_POST['pincode']);
		}
		if (empty($_POST['state'])) {
		$stateErr='required';
		}else{
			$state=test_input( $_POST['state']);
		}
}
function test_input($data) {
// $data=trim($data);
// $data=stripslashes($data);
// $data=htmlspecialchars($data);
return($data);
}
?>
<body>

	<center>
		<h1>FORM</h1>
	<form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
	<label>NAME</label>
	<input type="text" name="name" ><span class="error"><?php echo $nameErr;?>*</span><br><br>
	<label>MOBILE NUMBER</label>
	<input type="text" name="mobilenumber" placeholder="Enter_your_mobilenumber"><span class="error">*<?php echo $mobilenumberErr;?></span><br><br>
	<label>FATHER's NAME</label>
	<input type="text" name="fathername" ><span class="error"><?php echo $fathernameErr;?>*</span><br><br>
	<label>MOTHER's NAME</label>
	<input type="text" name="mothername" ><span class="error"><?php echo $mothernameErr;?>*</span><br><br>
	<label>CITY</label>
	<input type="text" name="city" ><span class="error"><?php echo $cityErr;?>*</span><br><br>
	<label>PINCODE</label>
	<input type="text" name="pincode" ><span class="error"><?php echo $pincodeErr;?>*</span><br><br>
	<label>STATE</label>
	<input type="text" name="state" ><span class="error"><?php echo $stateErr;?>*</span><br><br>
	<input type="submit" name="submit">
</center>
</form>
</body>
</html>