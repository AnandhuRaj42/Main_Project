<?php
session_start();
require("../db.class.php");
$ob=new db_operations();

//fetching email and password from login page
$email=$_POST['email'];
$passwd=$_POST['password'];

$qry="select * from tbl_login where email='$email'";
$res=$ob->db_read($qry);

if(mysqli_num_rows($res))       //user found
{                                         
$arr=mysqli_fetch_array($res);
$db_pass=$arr['password'];       //fetch password from database
  
if($db_pass == $passwd)  //checking password match 
{
$_SESSION['email']=$arr['email'];
$_SESSION['user_type']=$arr['user_type'];
header("location:../main_menu/dashboard.php");
}        
else

?>
<script type="text/javascript">
	alert("Invalid User Or Password");
	window.location="log.php";
</script>

<?php
//header("location:log.php?id=2");
}
else     //user not found 
{

?>
<script type="text/javascript">
	alert("User Not Found");
	window.location="log.php";
</script>

<?php
//header("location:log.php?id=1");                                     
}

?>