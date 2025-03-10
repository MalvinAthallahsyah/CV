<html>
<head>
<link rel="stylesheet" href="style.css">
	<title>Add Food</title>
</head>
 
<body>
	<a href="index.php">Go to Home</a>
	<br/><br/>
 
	<form action="add.php" method="post" name="form1">
		<table width="25%" border="0">
			<tr> 
				<td>Name</td>
				<td><input type="text" name="name"></td>
			</tr>
			<tr> 
				<td>Price</td>
				<td><input type="text" name="price"></td>
			</tr>
			<tr> 
				<td>Quantity</td>
				<td><input type="text" name="quantity"></td>
			</tr>
			<tr> 
				<td></td>
				<td><input type="submit" name="Submit" value="Add"></td>
			</tr>
		</table>
	</form>
	
	<?php
 
	if(isset($_POST['Submit'])) {
		$name = $_POST['name'];
		$price = $_POST['price'];
		$quantity = $_POST['quantity'];

		include_once("config.php");

		$result = mysqli_query($mysqli, "INSERT INTO product(name,price,quantity) VALUES('$name','$price','$quantity')");

		echo "User added successfully. <a href='index.php'>View Users</a>";
	}
	?>
</body>
</html>