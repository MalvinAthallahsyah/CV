<?php
include_once("config.php");
 
$result = mysqli_query($mysqli, "SELECT * FROM product ORDER BY id DESC");
?>
 
<html>
<head>    
<link rel="stylesheet" href="style.css">
    <title>Homepage</title>
</head>
    
<body>
    <table width='80%' border=1>
 
    <tr>
        <th>ID</th> <th>NAME</th> <th>PRICE</th> <th>QUANTITY</th><th>OTHERS</th>
    </tr>
    <?php  
    while($user_data = mysqli_fetch_array($result)) {         
        echo "<tr>";
        echo "<td>".$user_data['id']."</td>";
        echo "<td>".$user_data['name']."</td>";
        echo "<td>".$user_data['price']."</td>";    
        echo "<td>".$user_data['quantity']."</td>";  
        echo "<td><a href='edit.php?id=$user_data[id]'>Edit</a> | <a href='delete.php?id=$user_data[id]'>Delete</a></td></tr>";        
    }
    ?>
    </table>
    <div class="add_new">
        <a href="add.php">Add New Food</a><br/><br/>
    </div>
</body>
</html>