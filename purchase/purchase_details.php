<?php
include("../side_menu.php");
// $del_id=0;
// $i=0;
require("../db.class.php");
$ob=new db_operations();
$qry="select * from tbl_purchase";
$res=$ob->db_read($qry);
?>
<style type="text/css">

      table th {
     	text-align:center;
     }

    .fixTableHead {
      overflow-y: auto;
      height: 210px;
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
    <script type="text/javascript">
      function al()
      {
        alert("The Invoice is not Varified");
      }
    </script>



<div class="">
<?php

	
	// echo "<div class='col-sm-2' style='float:right;margin-bottom:10px;'><form action='add_class.php' method='post'><input type='submit' name='view' value='Add New' class='form-control btn-danger' style='background-color:#2F3C7E'></form></div>";
?>

<h3 style="text-align:center;font-weight:bold;background-color:lightcyan;color:red">Purchase Details</h3>


<div class="fixTableHead">
<table border="2px">
<thead>
<tr>
<th>Id</th>
<th>Quatation No.</th>
<th>Item Name</th>	
<th>Quantity</th>
<th>Date Purchased</th>
<th>Price</th>
<th>Status</th>
<th>Invoice Details</th>
</tr>
</thead>
<tbody>
<tr>
<?php
while($row=mysqli_fetch_array($res))
{
$reqid=$row['req_id'];
//$qry1="select * from tbl_request where req_id=$reqid";
$qry1="select * from tbl_purchase";
$res1=$ob->db_read($qry1);
$arr1=mysqli_fetch_array($res1);


for($i=1;$i<=$res1;$i++)
{

$st=$row['status'];
if($st==0)
{
  $rs="Not Varified";
}
else if($st==1)
{
   $rs="Varified";
}
echo '<tr>';  
echo '<td>'.$row['req_id'].'</td>';
echo '<td>'.$row['quotation_no'].'</td>';
echo '<td>'.$row['item_name'].'</td>';
echo '<td>'.$row['item_quantity'].'</td>';
echo '<td>'.$row['date_time'].'</td>';
echo '<td>'.$row['item_price'].'</td>';
echo '<td>'.$rs.'</td>';

//echo '<td>'."click here".'</td>';
//echo '<td>'.$arr1['request_type'].'</td>';
//echo '<td>'.$arr1['request_date'].'</td>';
//echo '<td>'.$arr1['request_date'].'</td>';

if($st==0)
{
  ?>
<td><a href="" style="color:red" onclick="al()">Click Here</a></td></tr>
<?php
}
else if($st==1)
{
?>
<td><a href="../invoice_details/view_invoice.php?id=<?php echo $row['quotation_no']?>" style="color:red">Click Here</a></td>
</tr>
<?php
}

}
}
?>

</tbody> 
</table>
</div>
<!--<input type="button" name="" value="More details" style="float:right;margin-right:10px;background-color:#2F3C7E;color:white;width:150px;height:35px;border-radius:10px;" >-->
</div>
      
	
		  
	
	
	
	
	
	