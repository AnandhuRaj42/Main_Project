<?php
include("../side_menu.php");
require("../db.class.php");
$ob=new db_operations();

$qry="select * from tbl_request_item";
$res=$ob->db_read($qry);
?>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<style type="text/css">
table {
      border-radius: 20px;
      width: 50%;
  font-family: arial, sans-serif;
  border-collapse: collapse;
 background: linear-gradient(to bottom, #33ccff 0%, #ff99cc 100%);

}

td{
  
  text-align: left;
  padding: 20px;
}

input[type=text] {
  background-color: #dde4f0;
  border: none;
  border-bottom: 2px solid;

}
label{
  
}

h2{
  margin-top: 150px;
}
 body{
  background-color: #53d9e0;
 }
.card
{
 background-color: linear-gradient(to bottom, #33ccff 0%, #ff99cc 100%);
}

</style>    


   


<div class="">
<?php

  
  // echo "<div class='col-sm-2' style='float:right;margin-bottom:10px;'><form action='add_class.php' method='post'><input type='submit' name='view' value='Add New' class='form-control btn-danger' style='background-color:#2F3C7E'></form></div>";
?>

<h3 style="text-align:center;font-weight:bolder;background-color:#e1ebe4;color:black;"> Stock Details</h3>


<div class="card">
<table align="center">
  <tr>
    <td>
      <label>Item name:</label></td>
      <td><input type="text" name="item_name"/></td>

    <td><label>Quantity:</label></td> 
    <td><input type="text" name="item_quantity"/></td>
          </tr>
    <tr>
      <td><label>Available Quantity</label></td>
      <td><input type="text" name="available_q"/></td>

      <td><label>Select Quantity</label></td>
      <td><select type="text" name="select_quantity">
        <option>1</option>
      </select>
       </td>
      </tr>
      <tr>
        <td></td><td></td>
        <td><button class=" btn btn-warning" type="submit" value="Forward Item">Forward Item</button></td>
    <td><button class="btn btn-success" type="submit" value="Forward Request">Forward Request</button>    </td>
      </tr>


</table>
</div>
<!--<input type="submit" name="create" value="create quotation" style="float:right;margin-right:15px;margin-top:15px;background-color:#2F3C7E;color:white;width:150px;height:42px;border-radius:10px;" >-->
</form>
</div>
      
  
      
  
  
  
  
  
  