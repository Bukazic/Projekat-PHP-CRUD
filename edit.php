<?php

include_once("conection.php");


if(isset($_POST['update']))
{	
	$id = $_POST['id'];
	
	$name=$_POST['first_last_name'];
	$b_date=$_POST['b_date'];
	$g_date=$_POST['g_date'];
		

	$result = mysqli_query($mysqli, "UPDATE studenti SET first_last_name='$name',b_date='$b_date',g_date='$g_date' WHERE id=$id");
	

	header("Location: index.php");
}
?>
<?php

$id = $_GET['id'];


$result = mysqli_query($mysqli, "SELECT * FROM studenti WHERE id=$id");

while($user_data = mysqli_fetch_array($result))
{
	$name = $user_data['first_last_name'];
	$b_date = $user_data['b_date'];
	$g_date = $user_data['g_date'];
}
?>
<html>
<head>	
	<title>Editovanje</title>
</head>

<body>
	<a href="index.php">Pocetna</a>
	<br/><br/>
	
	<form name="update_user" method="post" action="edit.php">
		<table border=0>
			<tr> 
				<td>Ime i prezime</td>
				<td><input type="text" name="first_last_name" value=<?php echo $name;?>></td>
			</tr>
			<tr> 
				<td>Broj upisa</td>
				<td><input type="text" name="b_date" value=<?php echo $b_date;?>></td>
			</tr>
			<tr> 
				<td>Godina upisa</td>
				<td><input type="int" name="g_date" value=<?php echo $g_date;?>></td>
			</tr>
			<tr>
				<td><input type="hidden" name="id" value=<?php echo $_GET['id'];?>></td>
				<td><input type="submit" name="update" value="Promeni"></td>
			</tr>
		</table>
	</form>
</body>
</html>

