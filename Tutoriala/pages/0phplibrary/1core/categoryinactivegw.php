<?php
	require_once("connection.php");

$ID=$_POST['ID'];
$UpdateQuery="Update category set StatusID=0 where ID='$ID'";
$R=mysqli_query($CN,$UpdateQuery);
if($R)
{
	$Message="Disactivated";
}
else
{
	$Message="server error";
}
$Response[]=array("Message"=>$Message);
echo json_encode($Response);
?>

