
<?php
//echo 'PHP Script executing';

$con = mysql_connect('localhost','root',"");
if(!$con)
{
	die('Could not Connect' . mysql_error());
}

mysql_select_db("cricket");
//UPDATE `auction` SET `sold`=[1] WHERE `id`=[]
$sql = 'UPDATE auction SET sold="1" where id="'.$_GET['ans'].'"';
//$sql = 'SELECT * from auction where name="dravid"';

$result = mysql_query($sql,$con) or die(mysql_error());
echo 'sold';

/*if(!($row = mysql_fetch_assoc($result)))
{
		echo 'Wrong Answer';
		die();
}
if($row["sold"]==1)
{
echo 'sold';
}

else
{
echo 'unsold';
}
//echo '<img src="$row["img"]">'
//echo '<img src='.$row["img"].'>'
//echo '<img src="1.jpg">'*/
?>
