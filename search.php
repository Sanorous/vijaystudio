<!DOCTTYPE html>
<head><link rel="stylesheet" type="text/css" href="style/style.css"></head>
<title>Search</title>
<body>
<form>
<li>Mobile Number<input type="text" name="id" class="#" id="id" maxlength="50"/></li>
<input type="submit" id="textarea" name="submit" value="Submit" class="button"/>
<br />
</form>
<br />
<form>
<li>Name<input type="text" name="id1" class="#" id="id" maxlength="50"/></li>
<input type="submit" id="textarea" name="submit" value="Submit" class="button"/>
</form>
}


disp.php{
<?php

$id1=$_GET['id'];
$con = mysql_connect("host","username","password");
if(!$con){
die('<h1>Could not connected '. mysql_error().'<br>');
}
$sqlStmt="SELECT * FROM table_name  WHERE Id='$id1'";

mysql_select_db('db_name');

$res=mysql_query($sqlStmt,$con);
?>
<table border="1" bgcolor="cyan">
<tr bgcolor="yellow">
    <th>Id</th> <th>FirstName</th> <th>LastName</th>
</tr>
<?php
while($user=mysql_fetch_array($res)){
?>
<tr>
    <td><?php echo $user['Id'];?></td>    
    <td><?php echo $user['First name'];?></td>    
    <td><?php echo $user['sur name'];?></td>    

</tr>    
<?php        
}    
?>    
</table>    


?>

}
</body>
</html>