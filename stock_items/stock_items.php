<?php
session_start();
include("../side_menu.php");
// $del_id=0;
// $i=0;
require("../db.class.php");
$ob=new db_operations();
$qry="select * from tbl_item";
$res=$ob->db_read($qry);



?>


<style type="text/css">

      table th {
     	text-align:center;
     }

    .fixTableHead {
      overflow-y: auto;
      height: auto;
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

.product-listing {
  margin: 0 auto;
  max-width: 800px;
}

.product-listing h2 {
  font-size: 24px;
  text-align: center;
}

.product-listing ul {
  list-style: none;
  margin: 0;
  padding: 0;
}

.product-listing li {
  display: inline-block;
  margin: 20px;
  text-align: center;
  vertical-align: top;
}

.product-listing img {
  display: block;
  margin: 0 auto;
  max-width: 200px;
}

.product-listing h3 {
  font-size: 18px;
  margin: 10px 0;
}

.product-listing .price {
  font-size: 16px;
  font-weight: bold;
  margin: 10px 0;
}

.product-listing .buy-now {
  background-color: #f44336;
  border: none;
  color: #fff;
  display: block;
  font-size: 16px;
  margin: 10px auto 0;
  padding: 10px;
  text-align: center;
  text-decoration: none;
  width: 120px;
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

<h3 style="text-align:center;font-weight:bold;background-color:lightgoldenrodyellow;color:blue">Stock Items List</h3>

<div class="fixTableHead">
<table border="2px">
<thead>
<tr>

<th>Item Name</th>
<th>Item Image</th>
<th>Item Category</th>
<th>Stock Level</th>
<th>Description</th>
<th>More Details</th>  
</tr>
</thead>
<tbody>

<?php
while($row=mysqli_fetch_array($res))
{
 for($i=0;$i<$res;$i++)
{
echo '<tr>';  
echo '<td>'.$row['item_name'].'</td>';
?>
<td>
<img src="pics/<?php echo $row['item_image']; ?>" style="height:40px;width:40px;">
</td>
<?php
echo '<td>'.$row['item_category'].'</td>';
echo '<td>'.$row['stock_level'].'</td>';
echo '<td>'.$row['item_description'].'</td>';

    ?>

  <td><a href="item_details.php?id=<?php echo $row['item_id']?>" style="color:red">click here</a></td>

<?php
}
 }
  ?>
  </tbody>
</table>




</div>
      

      
	
		  
	
	
	
	
	
	