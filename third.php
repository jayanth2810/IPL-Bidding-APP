
<?php
//echo 'PHP Script executing';

$con = mysql_connect('localhost','root',"");
if(!$con)
{
	die('Could not Connect' . mysql_error());
}

mysql_select_db("cricket");

$sql = 'SELECT country from auction where id="'.$_GET['ans'].'"';
//$sql = 'SELECT * from auction where name="dravid"';

$result = mysql_query($sql,$con) or die(mysql_error());


if(!($row = mysql_fetch_assoc($result)))
{
		echo 'Wrong Answer';
		die();
}
echo $row["country"];
//echo '<img src="$row["img"]">'
//echo '<img src='.$row["img"].'>'
//echo '<img src="1.jpg">'
?>
