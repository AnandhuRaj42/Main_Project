<?php
header("Location: ../item_list/view_request.php");
?>

<?php
include("../common/menu.php");
include("tables.php");

	error_reporting(0);


// echo $_SESSION['user_type'];
// echo $_SESSION['email'];
?>


<link rel="stylesheet" type="text/css" href="style.css">
<link rel="stylesheet" type="text/css" href="datatables.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="bootstrap.min.css">
  <script src="jquery.min.js"></script>
  <script src="bootstrap.min.js"></script>
<!DOCTYPE html>
<html>
<head>
<title>Font Awesome Icons</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>

<br>
    <style>
#right
{
	
float:right;	
color:#222;
font-size:12px;
}
</style>

<style>
#right
{
	
float:right;	
color:#333;
font-size:12px;
}
.userd
{
color:#333;	
}
.red
{
background:#FFECF4;
padding:10px;	
}


#right
{
	
float:right;	
color:#333;
font-size:12px;
}
.userd
{
color:#333;	
}
.red
{
background:#F36;
padding:10px;	
}
.table
{
margin-bottom:10px;
background:#E6F4FF;	
}
.sep
{
height:30px;
background:#666;	
}

   .sidebar-wrapper{
    background: linear-gradient(to bottom, #6699ff 0%, #33cccc 100%);
   }
   .wrapper{
    background: linear-gradient(to bottom, #ffffff 0%, #33cccc 100%);
   }

</style>
       
<!--

        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="header">
                                                             
                            </div>
                            <div class="content all-icons">
                                <div class="row">
                                                  
                                  
								  <div class="font-icon-list col-lg-2 col-md-3 col-sm-4 col-xs-6 col-xs-6">
                                     <a href="../student/select.php">    
                                       <div class="font-icon-detail"><i class="pe-7s-user"></i>
                                          <input type="text" value="profile">
                                       </div>
                                     </a>
                                  </div>

                                   <div class="font-icon-list col-lg-2 col-md-3 col-sm-4 col-xs-6 col-xs-6">
                                     <a href="">    
                                       <div class="font-icon-detail"><i class="pe-7s-date"></i>
                                          <input type="text" value="">
                                       </div>
                                     </a>
                                  </div>

   <div class="font-icon-list col-lg-2 col-md-3 col-sm-4 col-xs-6 col-xs-6">
                                     <a href="../nomination/attendence_percentage.php">    
                                       <div class="font-icon-detail"><i class="pe-7s-add-user"></i>
                                          <input type="text" value="">
                                       </div>
                                     </a>
                                  </div>

 <div class="font-icon-list col-lg-2 col-md-3 col-sm-4 col-xs-6 col-xs-6">
                                     <a href="">    
                                       <div class="font-icon-detail"><i class="pe-7s-cup"></i>
                                          <input type="text" value="">
                                       </div>
                                     </a>
                                  </div>
                                  <div class="font-icon-list col-lg-2 col-md-3 col-sm-4 col-xs-6 col-xs-6">
                                     <a href="">    
                                       <div class="font-icon-detail"><i class="pe-7s-cup"></i>
                                          <input type="text" value="">
                                       </div>
                                     </a>
                                  </div>

                             
-->
                                <div class="clearfix"></div>  

                                <div class="clearfix"></div>  


                                              
                                </div>
                            </div>
                        </div>
                    </div>
                </div>  
            </div>
        </div>


        <footer class="footer">
            <div class="container-fluid">
                <nav class="pull-left">
                   
                </nav>
                <p class="copyright pull-right">
                   
                </p>
            </div>
        </footer>

    </div>
</div>


</body>

    <!--   Core JS Files   -->
    <script src="../assets/js/jquery-1.10.2.js" type="text/javascript"></script>
	<script src="../assets/js/bootstrap.min.js" type="text/javascript"></script>

	<!--  Checkbox, Radio & Switch Plugins -->
	<script src="../assets/js/bootstrap-checkbox-radio-switch.js"></script>

	<!--  Charts Plugin -->
	<script src="../assets/js/chartist.min.js"></script>

    <!--  Notifications Plugin    -->
    <script src="../assets/js/bootstrap-notify.js"></script>

    <!--  Google Maps Plugin    -->
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?sensor=false"></script>

    <!-- Light Bootstrap Table Core javascript and methods for Demo purpose -->
	<script src="../assets/js/light-bootstrap-dashboard.js"></script>

	<!-- Light Bootstrap Table DEMO methods, don't include it in your project! -->
	<script src="../assets/js/demo.js"></script>
 	
</html>
