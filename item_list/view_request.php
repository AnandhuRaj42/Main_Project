<?php
session_start();
include("../side_menu.php");
// $del_id=0;
// $i=0;
require("../db.class.php");
$ob=new db_operations();
$qry="select * from tbl_request_item";
$res=$ob->db_read($qry);


if(isset($_POST['submit']))
{
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $st = $_POST["action"];
    $itn= $_POST["selectvalue"];
   //echo $itn;
   //echo $st; 
    if($st=='Approve')
    {
    $stqry= "UPDATE tbl_request SET status=5  WHERE req_id=$itn";
    $stres=$ob->db_write($stqry);
    ?>
    <script type="text/javascript">
    alert("Request Approved");
    </script>

    <?php
    }
    else if ($st=='Reject') {
      

    $stqry= "UPDATE tbl_request SET status=6  WHERE req_id=$itn";
    $stres=$ob->db_write($stqry);
    ?>
    <script type="text/javascript">
    alert("Request Rejected");
    </script>

    <?php
    }
    else if ($st=='Pending') {
      

    $stqry= "UPDATE tbl_request SET status=7  WHERE req_id=$itn";
    $stres=$ob->db_write($stqry);
    ?>
    <script type="text/javascript">
    alert("Request Pending");
    </script>

    <?php
    }
   



}   

}
?>


<style type="text/css">

      table th {
     	text-align:center;
     }

    .fixTableHead {
      overflow-y: auto;
      height: 270px;
    }
    .fixTableHead thead th {
      position: sticky;
      top: 0;
    }
    table {
      border-collapse: collapse;        
      width: 100%;
    }
    th,
    td {
      padding: 8px 15px;
    }
    th {
      background: #ABDD93;
    }

</style>    
<link rel="stylesheet" type="text/css" href="style.css">
<link rel="stylesheet" type="text/css" href="datatables.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

		<script type="text/javascript" src="datatables.min.js"></script>
		<script type="text/javascript" charset="utf-8">
			$(document).ready(function() {
				$('#example').DataTable();
			} );
		</script>



<div class="">
<?php

	
	// echo "<div class='col-sm-2' style='float:right;margin-bottom:10px;'><form action='add_class.php' method='post'><input type='submit' name='view' value='Add New' class='form-control btn-danger' style='background-color:#2F3C7E'></form></div>";
?>

<h3 style="text-align:center;font-weight:bold;background-color:lightgoldenrodyellow;color:blue">Item Request</h3>


<div class="fixTableHead">
<table border="2px">
<thead>
<tr>

<th>Item</th>
<th>Date Requested</th>
<th>Quantity</th>
<th>Expected Price</th> 
<th>Request Type</th>
<th>Action</th>
<th>More Details</th>
 
</tr>
</thead>
<tbody>
<tr>
<?php
while($row=mysqli_fetch_array($res))
{
$reqid=$row['req_id'];
//$qry1="select * from tbl_request where req_id=$reqid";
$qry1="select * from tbl_request";
$res1=$ob->db_read($qry1);
$arr1=mysqli_fetch_array($res1);
for($i=0;$i<$res;$i++)
{
echo '<tr>'; 

//echo '<td>'.'<input type="checkbox"> '.$row['request_id'].'</td>';
echo '<td>'.$row['item_name'].'</td>';
echo '<td>'.$row['request_date'].'</td>';
echo '<td>'.$row['quantity'].'</td>';
echo '<td>'.$row['exp_price'].'</td>';
echo '<td>'.$row['req_type'].'</td>';
?>
<td>
  <form action=""  method="post">
<select name="action" id="action" required="">
  <option>Select </option>
  <option>Approve</option>
  <option>Reject</option>
  <option>Pending</option>
</select>
<input type="hidden" name="selectvalue" value='<?php echo $row['request_id']; ?>'> 
<input type="submit" name="submit" value="submit" >
</form>
</td>
<td><a href="../new_item/update_item.php?id=<?php echo $row['item_name']?>" style="color:red">click here</a></td>
  <?php
//echo '<td>'."click here".'</td>';
//echo '<td>'.$arr1['request_type'].'</td>';
//echo '<td>'.$arr1['request_date'].'</td>';
//echo '<td>'.$arr1['request_date'].'</td>';
}
}
?>

<!--link to the request details passing req id-->
</tr>
</tbody> 
</table>
</div>
<!--<input type="button" name="" value="More details" style="float:right;margin-right:10px;background-color:#2F3C7E;color:white;width:150px;height:35px;border-radius:10px;" >-->
</div>
      
	
		  
	
	
	
	
	
	