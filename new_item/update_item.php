<?php
$na=$_GET['id'];
include("../side_menu.php");
require("../db.class.php");
$ob=new db_operations();
// $del_id=0;
// $i=0;
$qry1="select * from tbl_request_item where item_name='$na'";
//echo $qry1;
$res1=$ob->db_read($qry1);
while($row=mysqli_fetch_array($res1))
{
		$q=$row['quantity'];
		$re=$row['request_id'];


}

$qry="select * from tbl_item where item_name='$na'";
$res=$ob->db_read($qry);
while($row=mysqli_fetch_array($res))
{
	$name=$row['item_name'];
	$cat=$row['item_category'];
	$level=$row['stock_level'];
	$loc=$row['item_location'];
}
$q1=$q-$level;



$qry2="select * from tbl_request where req_id=$re";
$res2=$ob->db_read($qry2);
while($row=mysqli_fetch_array($res2))
{
	$rname=$row['request_name'];
	$rroom=$row['room_no'];
	$rdate=$row['request_date'];
	$rcomment=$row['comments'];
	
	if($row['status']=='0')
	{
		$rstatus='No Response';
	}
	else if($row['status']=='5')
	{
        $rstatus='Approved';
	}
	else if($row['status']=='6')
	{
        $rstatus='Rejected';
	}
	else if($row['status']=='7')
	{
        $rstatus='Pending';
	}
	else if($row['status']=='8')
	{
        $rstatus='Moved to Purchase';
	}

}

?>


<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>


	<style>
		.container {
			margin-top: 50px;
			margin-bottom: 50px;
		
          

		}
		
		.product-info {
			background-color: #ffffe6;
			padding: 30px;
		


		}

		.product-info h1 {
			font-size: 30px;
			margin-bottom: 20px;
		}
		.product-info p {
			font-size: 16px;

			line-height: 1.5;
			margin-bottom: 20px;

		}
		.product-info .price {
			font-size: 28px;
			font-weight: bold;
			margin-bottom: 20px;
		}
		.product-info .btn {
			font-size: 16px;
			padding: 10px 20px;
			border-radius: 5px;
			background-color: #007bff;
			color: #fff;
			margin-right: 10px;
			margin-bottom: 20px;
			border: none;
		}
		.product-info .btn:hover {
			background-color: #0069d9;
		}
		table
		{
			width: 70%;

		}
	</style>
	<script type="text/javascript">
		function fn() {
			// body...
			alert("Request Approved");
		}
		function fn2() {
			// body...
			alert("Requested for Purchase");
		}
	</script>
		



	</style>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
	<div class="container">
		<div class="col-md-6">
				<div class="product-info">
					<h1>Product Details</h1>
					<!--<p><label>Item Name:</label><?php echo $name?> </p>
					<p><label>Item Category :</label><?php echo $cat?> </p>
					<p><label>Stock Level  :</label><?php echo $level?> </p>	
					<p><label>Item Location  :</label><?php echo $loc?> </p>	
					<p><label>Available Stock :</label><?php echo $q1?> </p>	
					<div class="price">Rs. 9999</div>
					<button class="btn"><i class="fa fa-shopping-cart"></i>Forward request</button>
					<button class="btn"><i class="fa fa-heart"></i> Reject Request</button>-->

<table>
						<tr>
							<td>Item Name:</td><td><?php echo $name?> </td>
						</tr>
					<tr>
						<td>Item Category:</td><td><?php echo $cat?></td> 	
					</tr>
				    <tr>
				    	<td>Stock Level:</td><td><?php echo $level?></td>
				    </tr> 
					<tr>
						<td>Item Location:</td><td><?php echo $loc?> </td>
					</tr>
					<tr>
						<td>Available Stock:</td><td><?php echo $q1?> </td>
					</tr>



					</table>
                 


				</div>
			</div>
		<div class="row">
			<div class="col-md-6">
				<!--<img class="product-img" src="https://via.placeholder.com/500x500" alt="Product Image">-->
					<div class="product-info">
					<h1>Request Details</h1>
					<table>
						<tr>
							<td>Requester:</td><td><?php echo $rname?> </td>
						</tr>
					<tr>
						<td>Room Number:</td><td><?php echo $rroom?></td> 	
					</tr>
				    <tr>
				    	<td>Date:</td><td><?php echo $rdate?></td>
				    </tr> 
					<tr>
						<td>Comment :</td><td><?php echo $rcomment?> </td>
					</tr>
					<tr>
						<td>Status:</td><td><?php echo $rstatus ?> </td>
					</tr>
					</table>

				</div>
				 
			</div>
		
			
             
	</div>
       <br><br><br>
		<center><!--<button>Approve Item</button>&nbsp;&nbsp;&nbsp;<button>Request Item</button>-->
			
          <input class="btn btn-success" type="submit" name="sub" value="Approve Item" onclick="fn()">&nbsp;&nbsp;&nbsp;
          <input type="submit" name="req" class="btn btn-warning" value="Request Item" onclick="fn2()">

		</center>
	

</body>
</html>