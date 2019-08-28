

<?php

include("dbconnect.php");

?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>View admin</title>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<link rel="stylesheet" href="css/bootstrap.min.css" />
<link rel="stylesheet" href="css/bootstrap-responsive.min.css" />
<link rel="stylesheet" href="css/fullcalendar.css" />
<link rel="stylesheet" href="css/matrix-style.css" />
<link rel="stylesheet" href="css/matrix-media.css" />
<link href="font-awesome/css/font-awesome.css" rel="stylesheet" />
<link rel="stylesheet" href="css/jquery.gritter.css" />
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,800' rel='stylesheet' type='text/css'>
</head>
<body>

<!--Header-part-->
<div id="header">
  <h1><a href="dashboard.html">Matrix Admin</a></h1>
</div>
<!--close-Header-part--> 


<!--top-Header-menu-->
<div id="user-nav" class="navbar navbar-inverse">
  <ul class="nav">
    <li  class="dropdown" id="profile-messages" ><a title="" href="#" data-toggle="dropdown" data-target="#profile-messages" class="dropdown-toggle"><i class="icon icon-user"></i>  <span class="text">Welcome User</span><b class="caret"></b></a>
      <ul class="dropdown-menu">
        <li><a href="#"><i class="icon-user"></i> My Profile</a></li>
        <li class="divider"></li>
        <li><a href="#"><i class="icon-check"></i> My Tasks</a></li>
        <li class="divider"></li>
        <li><a href="login.html"><i class="icon-key"></i> Log Out</a></li>
      </ul>
    </li>
    <li class="dropdown" id="menu-messages"><a href="#" data-toggle="dropdown" data-target="#menu-messages" class="dropdown-toggle"><i class="icon icon-envelope"></i> <span class="text">Messages</span> <span class="label label-important">5</span> <b class="caret"></b></a>
      <ul class="dropdown-menu">
        <li><a class="sAdd" title="" href="#"><i class="icon-plus"></i> new message</a></li>
        <li class="divider"></li>
        <li><a class="sInbox" title="" href="#"><i class="icon-envelope"></i> inbox</a></li>
        <li class="divider"></li>
        <li><a class="sOutbox" title="" href="#"><i class="icon-arrow-up"></i> outbox</a></li>
        <li class="divider"></li>
        <li><a class="sTrash" title="" href="#"><i class="icon-trash"></i> trash</a></li>
      </ul>
    </li>
    <li class=""><a title="" href="#"><i class="icon icon-cog"></i> <span class="text">Settings</span></a></li>
    <li class=""><a title="" href="login.html"><i class="icon icon-share-alt"></i> <span class="text">Logout</span></a></li>
  </ul>
</div>
<!--close-top-Header-menu-->
<!--start-top-serch-->

<!--close-top-serch-->
<!--sidebar-menu-->
<div id="sidebar"><a href="#" class="visible-phone"><i class="icon icon-home"></i> Dashboard</a>
  <ul>
    <li class="active"><a href="index.php"><i class="icon icon-home"></i> <span>Dashboard</span></a> </li>
    <li><a href="uploadproject.php"><i class="icon icon-picture"></i> <span>Upload Completed Project</span></a></li>
    <li><a href="testimonials.php"><i class="icon icon-edit"></i> <span>Add Testimonials</span></a></li>
	<li><a href="grid.html"><i class="icon icon-envelope"></i> <span>Check Messages</span></a></li>
	<li><a href="viewproject.php"><i class="icon icon-edit"></i> <span>View Project</span></a></li>
    

  </ul>
</div>
<!--sidebar-menu-->

<!--main-container-part-->
<div id="content">
<!--breadcrumbs-->

<!--End-breadcrumbs-->

<!--Action boxes-->
  <div class="container-fluid">
    <div class="quick-actions_homepage">
      <ul class="quick-actions">
        <li class="bg_lb span3"> <a href="index.php"> <i class="icon-dashboard"></i> <span class="label label-important"></span> My Dashboard </a> </li>
        <li class="bg_lo span3"> <a href="uploadproject.php"> <i class="icon-picture"></i> Upload To Gallery</a> </li>
        <li class="bg_ls span3"> <a href="testimonials.php"> <i class="icon-edit"></i> Add Testimonials</a> </li>
        <li class="bg_lo span3"> <a href="form-common.html"> <i class="icon-envelope"></i>Check Messages</a> </li>
		<li class="bg_lo span3"> <a href="viewproject.php"> <i class="icon-envelope"></i>View Gallery</a> </li>
        

      </ul>
    </div>
<!--End-Action boxes-->    

<!--Chart-box-->    
  
<!--End-Chart-box--> 
    <hr/>
	
 <div class="container-fluid">
   
    <hr>
    <div class="row-fluid">
	 
     
        <div class="widget-box widget-calendar" >
          <div class="widget-title"> <span class="icon"><i class="icon-user"></i></span>
            <h5>View admins</h5>
           
          </div>
		  
		  </div>
         
                <div class="widget-content nopadding" >

            <table class="table table-bordered table-striped"  >
              <thead >
                <tr>
                  <th>First name</th>
                  <th>Last name</th>
                  <th>Username</th>
                  <th>Password</th>
                  <th>Delete</th>
                </tr>
              </thead>
			  
			   <?php
			 
							$qry="SELECT * FROM logintbl";
							$run= mysqli_query($conn, $qry);
							while($row = mysqli_fetch_array($run))
							{
								$fname = $row['firstname'];
								$lname = $row['lastname'];
								$uname = $row['username'];
								$pwd = $row['password'];
								
      echo "   <tbody>
                <tr class='odd gradeX'>
                  <td>$fname</td>
                  <td>$lname</td>
                  <td>$uname</td>
                  <td class='center'> $pwd</td>
                  <td><a href='viewadmin.php?del=$uname' style='background-color:royalblue;  color:white; padding:5px; font-size:15px; border:1px solid black; border-radius:5px; letter-spacing:4px;' >Delete</a></td>
				  </tr>
				  
				  
               
				
					
                
              </tbody>
			  
			   ";
							}
							?>

	<?php						
							
							if (isset($_GET['del']))
{
	$del=$_GET['del'];
	
	$del_user="delete from logintbl where username='$del'";
	$run_del=mysqli_query($conn,$del_user);
	
	if($run_del)
	{
		echo "<script>alert('Deleted')</script>";

	}
	
	{
		  echo "<script>window.open('viewadmin.php?view','self')</script>";	
	}
}


?>
							
							
							
            </table>
			
						 
			
          </div>
		

		
	
	  </div>
    </div>
	
    
  </div>
</div>

<!--end-main-container-part-->

<!--Footer-part-->

<div class="row-fluid">
  <div id="footer" class="span12"> 2013 &copy; Matrix Admin. Brought to you by <a href="http://themedesigner.in">Themedesigner.in</a> </div>
</div>

<!--end-Footer-part-->

<script src="js/excanvas.min.js"></script> 
<script src="js/jquery.min.js"></script> 
<script src="js/jquery.ui.custom.js"></script> 
<script src="js/bootstrap.min.js"></script> 
<script src="js/jquery.flot.min.js"></script> 
<script src="js/jquery.flot.resize.min.js"></script> 
<script src="js/jquery.peity.min.js"></script> 
<script src="js/fullcalendar.min.js"></script> 
<script src="js/matrix.js"></script> 
<script src="js/matrix.dashboard.js"></script> 
<script src="js/jquery.gritter.min.js"></script> 
<script src="js/matrix.interface.js"></script> 
<script src="js/matrix.chat.js"></script> 
<script src="js/jquery.validate.js"></script> 
<script src="js/matrix.form_validation.js"></script> 
<script src="js/jquery.wizard.js"></script> 
<script src="js/jquery.uniform.js"></script> 
<script src="js/select2.min.js"></script> 
<script src="js/matrix.popover.js"></script> 
<script src="js/jquery.dataTables.min.js"></script> 
<script src="js/matrix.tables.js"></script> 

<script type="text/javascript">
  // This function is called from the pop-up menus to transfer to
  // a different page. Ignore if the value returned is a null string:
  function goPage (newURL) {

      // if url is empty, skip the menu dividers and reset the menu selection to default
      if (newURL != "") {
      
          // if url is "-", it is this page -- reset the menu:
          if (newURL == "-" ) {
              resetMenu();            
          } 
          // else, send page to designated URL            
          else {  
            document.location.href = newURL;
          }
      }
  }

// resets the menu selection upon entry to this page:
function resetMenu() {
   document.gomenu.selector.selectedIndex = 2;
}
</script>
</body>
</html>
