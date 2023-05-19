<?php
error_reporting(0);
session_start();
$title="";
?>
<!doctype html> 
<html lang="en">
<head>
	<meta charset="utf-8" />

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

	<link rel="icon" type="image/png" href="assets/img/favicon.ico">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title>campus bridge</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />


    <!-- Bootstrap core CSS     -->
    <link href="../assets/css/bootstrap.min.css" rel="stylesheet" />

    <!-- Animation library for notifications   -->
    <link href="../assets/css/animate.min.css" rel="stylesheet"/>

    <!--  Light Bootstrap Table core CSS    -->
    <link href="../assets/css/light-bootstrap-dashboard.css" rel="stylesheet"/>


    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="../assets/css/demo.css" rel="stylesheet" />


    <!--     Fonts and icons     -->
    <link href="../common/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
    <link href="../assets/css/pe-icon-7-stroke.css" rel="stylesheet" />

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


</head>
<style type="text/css">
    
/*.sidebar-wrapper{
        background: linear-gradient(to bottom, #33ccff 0%, #ccff99 100%);
}*/

/*.wrapper{
     background: linear-gradient(to bottom, #0066ff 0%, #ffffff 100%);
    }*//*sidemenu*/
   /* .container-fluid
    {
        background: linear-gradient(to bottom, #0066ff 0%, #ffffff 100%);
    }
}*/


</style>
<script type="text/javascript">
    function hai()
    {
    
    }
</script>
<body>

<div class="wrapper">

<div class="sidebar" data-color="purple" data-image="">

    <!--

        Tip 1: you can change the color of the sidebar using: data-color="blue | azure | green | orange | red | purple"
        Tip 2: you can also add an image using data-image tag

    -->

    	<div class="sidebar-wrapper">
            <div class="logo">
                
                  <span style="font-size:20px;color:#FFF;margin-top:12px;text-transform:capitalize;"> <?php echo $_SESSION['user']; ?>  <br><span style="font-size:12px;color:#111;">
                </span>
                </span>
               
            </div>

        <ul class="nav" id="menu">

        <!-- Dasboard have to be set -->    

           <!--  <li class="active"> 
                      <a href="../main_menu/dashboard.php">
                        <i class="fa fa-home"></i>
                        <p>Home</p>
                    </a>
                </li>-->
<?php             
if($_SESSION['user_type']==3)
{
?>
                     <li class="active">
                    <a href="../purchase_request/view_request.php">
                        <i class="fa fa-drivers-license" style="font-size:24px"></i>
                        <p>Purchase request</p>
                    </a>
                </li>

                <li class="active">
                    <a href="">
                        <i class="fa fa-institution" style="font-size:23px"></i>
                        <p>Quotation management</p>
                    </a>
                </li>

                    <li class="active">
                    <a href="">
                        <i class="fa fa-institution" style="font-size:23px"></i>
                        <p>Quotation recieved</p>
                    </a>
                </li>

                    <li class="active">
                    <a href="">
                        <i class="fa fa-institution" style="font-size:23px"></i>
                        <p>Purchase order</p>
                    </a>
                </li>

                <li class="active">
                    <a href="">
                        <i class="fa fa-institution" style="font-size:23px"></i>
                        <p>Suppliers</p>
                    </a>
                </li>

     <li class="active">
                    <a href="">
                        <i class="fa fa-institution" style="font-size:23px"></i>
                        <p>Notification</p>
                    </a>
                </li>
<?php   
}          
if($_SESSION['user_type']==4)
{
?>    
                        <li class="active">
                    <a href="../profile/myprofile.php">
                        <i class="fa fa-drivers-license" style="font-size:24px"></i>
                        <p>Profile</p>
                    </a>
                </li>




            <li class="active">
                    <a href="../stock_items/stock_items.php">
                        <i class="glyphicon glyphicon-briefcase" style="font-size:23px"></i>
                        <p>Stock Items</p>
                    </a>
                </li>


                    <li class="active">
                    <a href="../item_list/view_request.php">
                        <i class="fa fa-list" style="font-size:23px"></i>
                        <p>Item Request</p>
                    </a>
                </li>
                   <li class="active">
                    <a href="../item_list/main_req.php">
                        <i class="fa fa-list" style="font-size:23px"></i>
                        <p>Maintenance Request</p>
                    </a>
                </li>

                    <li class="active">
                    <a href="../purchase/purchase_details.php">
                        <i class="glyphicon glyphicon-stats" style="font-size:23px"></i>
                        <p>Purchase Details</p>
                    </a>
                </li>

          <!--    <li class="active">
                    <a href="../item_add/rightpage.php">

                        <i class="fa fa-institution" style="font-size:23px"></i>
                        <p>Add New Items</p>
                    </a>
                </li>-->

     <li class="active">
                    <a href="../existing_item/existing.php">
                        <i class="glyphicon glyphicon-globe" style="font-size:23px"></i>
                        <p>Add Item</p>
                    </a>
                </li>
               <!-- <li class="active">
                    <a href=" ">
                        <i class="glyphicon glyphicon-wrench" style="font-size:23px"></i>
                        <p>Update Stock</p>
                    </a>
                </li>-->
<?php  
}
?>
            </ul>
    	</div>
    </div>




    <div class="main-panel">
    <nav class="navbar navbar-default navbar-fixed">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation-example-2">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <br>
                  
                </div>
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-left">
                        <li>
                            
                               
								
                            
                        </li>
                        <!--<li class="dropdown">
                              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <i class="fa fa-globe"></i>
                                    <b class="caret hidden-sm hidden-xs"></b>
                                    <span class="notification hidden-sm hidden-xs">5</span>
									<p class="hidden-lg hidden-md">
										5 Notifications
										<b class="caret"></b>
									</p>
                              </a>
                              <ul class="dropdown-menu">
                                <li><a href="#">Notification 1</a></li>
                                <li><a href="#">Notification 2</a></li>
                                <li><a href="#">Notification 3</a></li>
                                <li><a href="#">Notification 4</a></li>
                                <li><a href="#">Another notification</a></li>
                              </ul>
                        </li>-->
                    <!--    <li>
                           <a href="">
                                <i class="fa fa-search"></i>
								<p class="hidden-lg hidden-md">Search</p>
                            </a>
                        </li>-->
                    </ul>

                    <ul class="nav navbar-nav navbar-right">
                       <li>
                            <a href="">
                                <p>Notifications</p>
                            </a>
                        </li>
                       
                        <li>
                            <a href="../login/log.php?id=1">
                                <p>Log out</p>
                            </a>
                        </li>
						<li class="separator hidden-lg hidden-md"></li>
                    </ul>
                </div>
            </div>
        </nav>



