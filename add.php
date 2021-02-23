<html>
<head>
	<title>Dodaj studenta</title>
</head>
<body>
	<a href="index.php">Vrati se na pocetnu</a>
	<br/><br/>

	<form action="add.php" method="post" name="form1">
		<table border="0">
			<tr> 
				<td>Ime i prezime</td>
				<td><input type="text" name="first_last_name"></td>
			</tr>
			<tr> 
				<td>Broj upisa</td>
				<td><input type="text" name="b_date"></td>
			</tr>
			<tr> 
				<td>Godina upisa</td>
				<td><input type="int" name="g_date"></td>
			</tr>
			<tr> 
				<td></td>
				<td><input type="submit" name="Submit" value="Dodaj studenta"></td>
			</tr>
		</table>
	</form>
	<?php
	if (isset($_POST['Submit'])) {
    
        $name = $_POST['first_last_name'];
        $b_date = $_POST['b_date'];
        $g_date = $_POST['g_date'];
        
        $errorName = false;
        $errorBdate = false;
        $errorgdate= false;
        
        
        if (empty($name)) {
            echo "Niste uneli ime i prezime!<br/>";
            $errorName = true;
        }
            
        if (empty($b_date) || $b_date < 0) {
            echo "Niste validan broj upisa!<br>";
            $errorBdate = true;
        }
        
        if (empty($g_date) || ($g_date < 2003)) {
            echo "Niste uneli validnu godinu upisa!<br/>";
            $errorgdate = true;
    
		} 
		
		if ($errorName == false && $errorBdate == false && $errorgdate == false) {
            include_once("conection.php");
                
            $result = mysqli_query($mysqli, "INSERT INTO studenti(first_last_name,b_date,g_date) VALUES('$name','$b_date','$g_date')");
            
            header("Location:index.php");
        }
	}
	?>
</body>
</html>
