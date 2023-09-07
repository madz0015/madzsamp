<?php
session_start();
include 'connect.php';
?>
<!DOCTYPE html>
<html>
<head>
		<title>Student Registration</title>
</head>
<body>

	<?php
	if (isset($_GET['update'])){
		$fetch = "SELECT * FROM user WHERE user_id='".$_GET['update']."'";
		$sql = mysqli_query($conn,$fetch);
		$rest = mysqli_fetch_array($sql);
		$name = $rest['name'];
		$address = $rest['address'];
		$contact = $rest['contact'];




	}
?>

<form method="post">

<table width="300" border="1px" cellpadding="1" cellspacing="0" align="center" bgcolor="grey">

	<tr>
		<td colspan="8" align="center" height="40px">Customer List</td>

	<tr>
		<td height="40px" align="center"><input type="text" name="name" width="100%" id="name" value="<?php echo $rest['name']; ?>" placeholder="Enter name." required=""></td></tr>
		<td height="40px" align="center"><input type="text" name="address" id="address" value="<?php echo $rest['address']; ?>" placeholder="Enter address." required=""></td></tr>
		<tr>
		<td height="40px" align="center"><input type="text" name="contact" maxlength="11" id="contact" value="<?php echo $rest['contact']; ?>" placeholder="Enter your number" required=""></td>
		</tr>
		<tr>
		<br>
		<tr>
		<td height="40px" align="center">
			<input type="submit" name="update" value="Update">
		</td></tr><br>
		<p>



	</tr>
</form>
</body>

</html>
<?php
if (isset($_POST['update'])) {
	// code...
	$name = $_POST['name'];
	$address = $_POST['address'];
	$contact = $_POST['contact'];



	$update = "UPDATE user SET name='$name',address='$address', contact='$contact' WHERE user_id ='".$_GET['update']."'";
	$data = mysqli_query($conn, $update);

		echo "<script language = Javascript>;
		alert('Napalitan mona ang iyong pangalan hehe!');
		location.href='customer_list.php';
		</script>";
	 	
	 } 
?>