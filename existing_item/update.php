<?php
require("../db.class.php");
$ob=new db_operations();
//$itcat=$_POST['category'];
$itname=$_POST['item_name'];
$itprice=$_POST['price'];
$itquant=$_POST['quantity'];
$itloc=$_POST['loc'];
$itwar=$_POST['warranty'];
$itspec_type=$_POST['spec_type'];
$itspec=$_POST['spec'];


//echo $itspec_type;
//$itemid=$_POST['item_id'];
$old=30;//select stock_level from tbl_item where item_name=item_name;
$new_quant=$old+$itquant; 




//$id="SELECT item_id from tbl_item where item_name=$itname";
//$conn=mysqli_connect("localhost","root","","campus_bridge")or die("unable to connect!!");   
  
/*$res="insert into tbl_item(item_id,item_name,item_category,stock_level,item_location,issue_to,added_date,item_status,item_description,item_image,price) 
values('','$itname','$itcat','$new_quant','Loc-A','nil',current_timestamp,'0','$itdesc','$itimage','$itprice')";
echo $res;*/
//$res="UPDATE tbl_item set stock_level='$itquant',item_location='loc-A',added_date=current_timestamp,item_image='$itimage',item_description='$itdesc',price=$itprice WHERE item_name='$itname'";
//$res1=$ob->db_write($res);


$i="SELECT item_id from tbl_item where item_name='$itname'";
$res=$ob->db_read($i);
$arr=mysqli_fetch_array($res);
$itemid=$arr['item_id'];




$res="insert into tbl_item_details(itemdet_id,item_id,issue_to,location,quantity,item_status,purchase_date,warranty_upto,price) 
values('','$itemid','Stock Manager','$itloc','$itquant',0,current_timestamp,'$itwar',$itprice)";
//echo $res;
$res1=$ob->db_write($res);




//$i="SELECT specific_id from tbl_item_details where purchase_date=current_timestamp and ;
$i="SELECT * FROM tbl_item_details WHERE itemdet_id= LAST_INSERT_ID()";
$res=$ob->db_read($i);
$arr=mysqli_fetch_array($res);
$itemdet_id=$arr['itemdet_id'];
$itemid1=$arr['item_id'];
//echo $itemid1;
//echo $itemdet_id;


//$conn=mysqli_connect("localhost","root","","campus_bridge")or die("unable to connect!!");   
// $res="insert into tbl_item_details(id,item_id,issue_to,location,quantity,item_status,date,warranty,price) 
// values('',$id','stock manager','$itloc','$itquant',0,current_timestamp,'$itwar',$itprice')";





if(!empty($itspec_type)){

foreach (Array_combine($itspec_type,$itspec) as $key => $value) {
  // code...
   $res2="insert into tbl_item_attributes(id,item_id,itemdet_id,spec_type,spec_value)
         values('','$itemid1','$itemdet_id','$key','$value')";
          $s=$ob->db_write($res2);

          //echo " ".$key." ".$value;
         // $conn=mysqli_connect("localhost","root","","campus_bridge")or die("unable to connect!!");
         // $qu=mysqli_query($conn,$res2);
      
      //echo $res2;

}
}
if($s)
{
  ?>
  <script type="text/javascript">
  alert("Item Inserted");
  window.location="../existing_item/existing.php";
  </script>
  <?php
}
else
{
   ?>
  <script type="text/javascript">
  alert("Item Not Inserted");
  window.location="../existing_item/existing.php";
  </script>
  <?php
}

// foreach ($itspec_type as $key => $value) {

//   $res2="insert into tbl_item_attributes(id,item_id,itemdet_id,spec_type,spec_value)
// //          values('$itemid1','$itemdet_id','$value',$itspec[$key])";

// }








//$res1=$ob->db_write($res);
//$res3=$ob->db_write($re2);

// if($res1 && $res2)
// {
//   ?>
//   <script>
//     alert("Item updated successfully");
//       window.location='existing.php'
//   </script>
//   <?php
//  // header("location:rightpage.php");
// }
// else
// {
// ?> 
//   <script>
//     alert("Item not updated");
//   </script>
//   <?php
// }
?>
