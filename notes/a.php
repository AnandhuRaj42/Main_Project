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