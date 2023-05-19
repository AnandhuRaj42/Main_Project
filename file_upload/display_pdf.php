

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Display PDF</title>
    <style media="screen">
      embed{
        border: 2px solid black;
        margin-top: 30px;
      }
      .div1{
        margin-left: 170px;
      }
    </style>
  </head>
  <body>
    <div class="div1">
      <?php
      require("../db.class.php");
      $ob=new db_operations();      
      $sql="SELECT invoice_loc from tbl_purchase where req_id=1";

       $res=$ob->db_read($sql);
       
      while ($info=mysqli_fetch_array($res)) {
        ?>
      <embed type="application/pdf" src="pdf/<?php echo $info['pdf'] ; ?>" width="5000" height="5000">
    <?php
      }

      ?>

    </div>

  </body>
</html>