<?php
require_once "connectionserver.php";
$p_id = strval($_REQUEST['p_id']);
$staff_id = strval($_REQUEST['staff_id']);
$t_id = strval($_REQUEST['t_id']);
$prescp_M_A_N = strval($_REQUEST['prescp_M_A_N']);
$no_of_days = strval($_REQUEST['no_of_days']);
$status = strval($_REQUEST['status']);
$morning = strval($_REQUEST['morning']);
$afternoon = strval($_REQUEST['afternoon']);
$night = strval($_REQUEST['night']);
$link_address = '#login.html';

$sql = "INSERT INTO medication (p_id,staff_id,t_id,prescp_M_A_N,no_of_days,status,morning,afternoon,night) VALUES ('$p_id','$staff_id','$t_id','$prescp_M_A_N','$no_of_days','$status','$morning','$afternoon','$night')";
echo $sql;
if (mysqli_query($con, $sql)) {
	echo '<a href="' . $link_address . '">Link</a>';
	echo "successfull";
} else {
	echo "ERROR: Hush! Sorry $sql. "
		. mysqli_error($con);
}



?>
<!DOCTYPE html>
<html>

<head>
	<title>Medication</title>
	<style>
		body {
			background-image: url('imga.jpg');
			background-repeat: no-repeat;
			background-attachment: fixed;
			background-size: 100% 100%;
		}
	</style>
	</body>
</head>

</html>