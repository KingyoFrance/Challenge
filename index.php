<!DOCTYPE html>
<html>
<head>
<title>Enregistrer les prenoms de nouveaux membres </title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">


<style type="text/css" media="screen">
#footer {position: absolute; bottom: 0; right: 5px; width: 5%; height: 20px; text-align: right;}
</style> 
</head>

<body bgcolor="#FFFFFF" text="#000000" lang="fr">

<form name="form1" method="post" action="index.php">
  <table width="800" cellspacing="2" cellpadding="10" align="center" style="border-right:12px solid silver;border-left:12px solid silver;">
    <tr> 
      <td colspan="2"> 
       
  		<label for="fname">Prénom membre: </label>
  		<input type="text" id="fname" name="fname"><br><br> 
		<div style="text-align: center;"><input type="submit" value="Submit" value="envoyer"></div>
        </td>
    </tr>
	

  </table>
</form>

 <?php
$servername = "sql11.freemysqlhosting.net";
$username = "sql11473567";
$password = "XjUX4CL5zR";
$dbname = "sql11473567";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO tblMembers (fname) VALUES ('$fname')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?> 	
	
</html>	
