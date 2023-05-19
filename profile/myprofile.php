<?php
session_start();
$email=$_SESSION['email'];

include("../side_menu.php");
include("../db.class.php");
$ob=new db_operations();
$qry1="select * from tbl_user_data where email='stock@gmail.com'";
$res1=$ob->db_read($qry1);
$arr1=mysqli_fetch_array($res1);




?>


		<link rel="stylesheet" type="text/css" href="style.css">  
<link rel="stylesheet" type="text/css" href="datatables.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

			<script type="text/javascript">$(document).ready(function() {
				$('#example').DataTable();
			} );
		</script>

<style>

body {
	font-size:15px;
}



input[type="text"] {
	width:50%;
	text-align: center;
	height: 45px;
}
	
.hiddentd
{
display:inline-block;
    width:180px;
    white-space: nowrap;
    overflow:hidden !important;
   
}

th {
   text-align: center;
  background-color:#2F3C7E;
 
  color:white;
  height:90px;

}
td {
text-align:center;
	height:70px;	
}
table {
	width: 100%;
	border-color:transparent;
	text-align:center;
	background-color:lightcyan;

}

.font {
	font-weight:bold;
}

.b1 {
	color:white;
	margin-bottom:10px;
	background-color: green;
}


</style>


<div class="">



<h3 style="text-align:center;font-weight:bold;background-color:lightcyan;color:red">MY PROFILE</h3>



 <h3 style="font-weight:bold;margin-left:0px;background-color:lightcyan;">
<img src="pics/profile_pic.jpg" style="margin-left:10px;margin-bottom:10px;margin-top:10px;margin-right:10px;border-radius:150px;height:190px;width:190px;">
<?php echo $arr1['full_name']; ?></h3>


                                                                    
<a href="change_password.php">
    <button class="b1" style="float:
    right;margin-right:10px;margin-top:10px;margin-bottom:10px;width:180px;height:35px;border-radius:8px;">Change Password</button>
    </a>

    <button class="b1" style="float:
    right;margin-right:10px;margin-top:10px;margin-bottom:10px;width:180px;height:35px;border-radius:8px;">Change Profile Pic</button>
    
<table border="2px" style="font-family: serif;">

<tr>
<td></td>
<td></td>

</tr>

<tr>
<td class="font">EMAIL :</td>
<td><input type="text" value="<?php echo $email; ?>" disabled></td>
</tr>

<tr>
<td class="font">PHONE NUMBER :</td>
<td><input type="text" value="<?php echo $arr1['phone_no']; ?>" disabled></td>
</tr>

<tr>
<td class="font">HOUSE NAME :</td>
<td><input type="text" value="<?php echo $arr1['house_name'];?>" disabled></td>
</tr>

<tr>
<td class="font">PLACE :</td>
<td><input type="text" value="<?php echo $arr1['place'];?>" disabled></td>
</tr>

<tr>
<td class="font">DISTRICT :</td>
<td><input type="text" value="<?php echo $arr1['district'];?>" disabled></td>
</tr>

<tr>
<td class="font">STATE :</td>
<td><input type="text" value="<?php echo $arr1['state'];?>" disabled></td>
</tr>

<tr>
<td class="font">PINCODE :</td>
<td><input type="text" value="<?php echo $arr1['pin_code'];?>" disabled></td>
</tr>

</table>

       
        
            
      
	
		  
	
	
	
	
	
	