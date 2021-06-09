

<?php
$user=$_GET['user'];
$pass=$_GET['pass'];

$db_host='fdb22.awardspace.net'; //Should contain the "Database Host" value
$db_name='3161813_career'; //Should contain the "Database Name" value
$db_user='3161813_career'; //Should contain the "Database User" value
$db_pass='Rama1234'; //Should contain the "Database Password" value


$conn = new mysqli($db_host, $db_name, $db_pass, $db_user);
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT * FROM login WHERE uname='$user' and pass='$pass'";
$result1 = $conn->query($sql);
$visits=0;
if ($result1->num_rows > 0) {
//header('Location: http://www.careerguidance.dx.am/admin.php');
//echo "<script>location.href = 'http://careerguidance.dx.am/admin.php';</script>";
//echo "<script> window.location.assign('admin.php'); </script>";
echo "Success";
//header("Location: admin.php"); 
 
} else {
echo "no results1";
}
?>