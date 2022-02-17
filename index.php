<html>
<head>
<title>Enregistrer les prenoms de nouveaux membres </title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">

<link rel="stylesheet" href="style.css" type="text/css">
<link rel="SHORTCUT ICON" href="images/favicon.ico"> 
<style type="text/css" media="screen">
#footer {position: absolute; bottom: 0; right: 5px; width: 5%; height: 20px; text-align: right;}
</style> 
</head>

<body bgcolor="#FFFFFF" text="#000000" lang="fr">

<table width="800" border="0" cellspacing="0" cellpadding="0" align="center" height="100" >
  <tr> 
    <td>
    </td>
  </tr>
</table>	  
<?php
if(isset($_POST["Submit"])){


	$fname = $_POST["fname"];

			
	if (!empty($_SERVER['HTTP_CLIENT_IP']))   //check ip from share internet
    {
      $ip=$_SERVER['HTTP_CLIENT_IP'];
    }
    elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR']))   //to check ip is pass from proxy
    {
      $ip=$_SERVER['HTTP_X_FORWARDED_FOR'];
    }
    else
    {
      $ip=$_SERVER['REMOTE_ADDR'];
    }
    			
	
	$link = mysql_connect('sql11.freemysqlhosting.net', 'sql11473567', 'XjUX4CL5zR');
	mysql_set_charset('utf8', $link);
	mysql_select_db('sql11473567',$link) or die('Could not select database');

		
	$query = "INSERT INTO tblMembers (fname) VALUES ('$fname')";
	
	$query = "SELECT * FROM tblMembers";
	$result = $link->query($query);
	
	echo '<p align="center">Enregistré!<br>';
	if ($result->num_rows > 0) {
  	// output data of each row
  		while($row = mysql_fetch_assoc($result)) {
    	echo "Prénom: " . $row["fname"]. "<br>";
  	}



	if (!mysql_query($query,$link))
  		{
  		die('Error: ' . mysql_error());
  		}

		mysql_close();
	}

	else{ 
?>
<form name="form1" method="post" action="index.php">
  <table width="800" cellspacing="2" cellpadding="10" align="center" style="border-right:12px solid silver;border-left:12px solid silver;">
    <tr> 
      <td colspan="2"> 
       
  		<label for="fname">Prénom membre: </label>
  		<input type="text" id="fname" name="fname"><br><br> 
  		<input type="submit" value="Submit">

        </td>
    </tr>
	

	
    <tr> 
      <td class="c"> Commentaire / <br>
        id&eacute;es activit&eacute;es:</td>
      <td class="c"> 
        <textarea name="comment" cols="65"></textarea>
        <br>
      </td>
    </tr>
    <tr> 
      <td colspan="2" align="center"> <br>
        <input type="submit" name="Submit" value="Envoyer vos r&eacute;ponses">
        <br>
        <br>
        <br>
      </td>
    </tr>
  </table>
</form>



<?php
  }
?>



</div> 
</body>
</html>
