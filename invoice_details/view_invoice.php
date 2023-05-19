<?php
$na=$_GET['id'];
//echo $na;
include("../side_menu.php");
// $del_id=0;
// $i=0;
require("../db.class.php");
$ob=new db_operations();

$sql = "SELECT invoice_loc FROM tbl_purchase WHERE quotation_no=$na";
$res=$ob->db_read($sql);

?>


<style type="text/css">

      table th {
     	text-align:center;
     }

    .fixTableHead {
      overflow-y: auto;
      height: 500px;
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


     embed{
        border: 2px solid black;
       height: 70vh;
       width: 150vh;

      }
      .bu{
        
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
  <h3 style="text-align:center;font-weight:bold;background-color:lightgoldenrodyellow;color:blue">Invoice Details</h3>
<center>
<?php

	
	//echo "<div class='col-sm-2' style='float:right;margin-bottom:10px;'><form action='add_class.php' method='post'><input type='submit' name='view' value='Add New' class='form-control btn-danger' style='background-color:#2F3C7E'></form></div>";
?>
<?php
while ($info=mysqli_fetch_array($res)) {
        ?>
      <embed type="application/pdf" src="pdf/<?php echo $info['invoice_loc'] ; ?>" >
    <?php
      }

      ?>
   <div class="bu"><a href="../existing_item/existing.php"><button style="border-radius: 20px;background: #67d952 ;color: green;" type="submit" name="enter">Add Items</button></a>
               <a href="../purchase/purchase_details.php"> <button style="border-radius: 20px; background: #526dd9; color: black;" type="reset" name="enter">Go Back</button></a></div>

</center>
    
</div>
      
	
		  
	
	
	
	
	
	