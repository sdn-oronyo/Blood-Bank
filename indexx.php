<?php
include "db.php";
if (isset ($_POST['done']))

$name = $_Post ['name'];
$blood_group = $_Post ['blood_group'];
$last_donated_date = $_Post ['Last Donated Date'];
$Contact = $_Post ['Contact'];

$insert = mysql_query("INSERT INTO 'doner_info' ('name', 'blood_group', 'Last Donated Date', 'Contact');
VALUES ('$name', '$blood_group', '$Last Donated Date', '$Contact')");
if(!$insert)
{
	echo mysql_error();
}
else
{
	echo "inserted";
}

?>
<form method="POST">
<input type="text" name="name" placeholder="Donner name">
<input type="text" name="blood_group" placeholder="Blood Group">
<input type="text" name="Last Donated Date" placeholder="Last Donated Date">
<input type="text" name="Contact" placeholder="Contact">
<input type="submit" name="done">
</form>