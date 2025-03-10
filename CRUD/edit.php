<?php

include_once("config.php");
 
if(isset($_POST['update']))
{	
	$id = $_POST['id'];
	
	$name=$_POST['name'];
	$price=$_POST['price'];
	$quantity=$_POST['quantity'];
		
	$result = mysqli_query($mysqli, "UPDATE product SET name='$name',price='$price',quantity='$quantity' WHERE id=$id");
	
	header("Location: index.php");
}
?>
<?php

$id = $_GET['id'];
 

$result = mysqli_query($mysqli, "SELECT * FROM product WHERE id=$id");
 
while($user_data = mysqli_fetch_array($result))
{
	$name = $user_data['name'];
	$price = $user_data['price'];
	$quantity = $user_data['quantity'];
}
?>
<html>
<head>	
<link rel="stylesheet" href="style.css">
	<title>Edit User Data</title>
</head>
 
<body>
	<a href="index.php">Home</a>
	<br/><br/>
	
	<form name="update_user" method="post" action="edit.php">
		<table border="0">
			<tr> 
				<td>Name</td>
				<td><input type="text" name="name" value=<?php echo $name;?>></td>
			</tr>
			<tr> 
				<td>Price</td>
				<td><input type="text" name="price" value=<?php echo $price;?>></td>
			</tr>
			<tr> 
				<td>Quantity</td>
				<td><input type="text" name="quantity" value=<?php echo $quantity;?>></td>
			</tr>
			<tr>
				<td><input type="hidden" name="id" value=<?php echo $_GET['id'];?>></td>
				<td><input type="submit" name="update" value="Update"></td>
			</tr>
		</table>
	</form>
</body>
</html>