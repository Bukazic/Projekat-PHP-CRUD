<?php

include_once("conection.php");

$result = mysqli_query($mysqli, "SELECT * FROM studenti ORDER BY id DESC");
?>
<html>
<head>    
    <title>Pocetna</title>
</head>

<body>
    <a href="add.php">Dodaj studenta</a><br/><br/>

    <table border=1>
    <tr>
        <th>Ime i prezime</th> <th>Broj upisa</th> <th>Godina upisa</th> <th>Editovanje</th>
    </tr>
    <?php  
    while($user_data = mysqli_fetch_array($result)){         
        echo "<tr>";
        echo "<td>".$user_data['first_last_name']."</td>";
        echo "<td>".$user_data['b_date']."</td>";
        echo "<td>".$user_data['g_date']."</td>";    
        echo "<td><a href='delete.php?id=$user_data[id]'>Obrisi</a> | <a href='edit.php?id=$user_data[id]'>Promeni</a></td></tr>  ";        
    }
    ?>
    </table>
</body>
</html>
