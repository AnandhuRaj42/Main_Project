<?php
require("../db.class.php");
$ob=new db_operations();
$itname=$_POST['item_name'];
$itdesc=$_POST['desc'];
$itcat=$_POST['category'];
$itprice=$_POST['price'];
$itquant=$_POST['quantity'];
$itimage=$_POST['image'];
$old=30;//select stock_level from tbl_item;
$new_quant=$old+$itquant; 
$conn=mysqli_connect("localhost","root","","campus_bridge")or die("unable to connect!!"); 


$qr="select item_name from tbl_item";
$rs=$ob->db_read($qr);
while($row=mysqli_fetch_array($rs))
  echo $row['item_name'];
{
if(strcmp($row['item_name'],$itname))
{
   ?>
  <script>
    alert("Item Exist");
      window.location='rightpage.php';
  </script>
  <?php
}
else{




  
$res="insert into tbl_item(item_id,item_name,item_category,stock_level,item_location,issue_to,added_date,item_status,item_description,item_image,price) 
values('','$itname','$itcat','$new_quant','Loc-A','nil',current_timestamp,'0','$itdesc','$itimage','$itprice')";
echo $res;
$res1=$ob->db_write($res);
if($res1)
{
  ?>
  <script>
    alert("Item added successfully");
      window.location='rightpage.php'
  </script>
  <?php
 // header("location:rightpage.php");
}
else
{
?> 
  <script>
    alert("Item not added");
  </script>
  <?php
}
}
}
?>
