<?php

include("dbconnect.php");

?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>Matrix Admin</title>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<link rel="stylesheet" href="css/bootstrap.min.css" />
<link rel="stylesheet" href="css/bootstrap-responsive.min.css" />
<link rel="stylesheet" href="css/matrix-style.css" />
<link rel="stylesheet" href="css/matrix-media.css" />
<link href="font-awesome/css/font-awesome.css" rel="stylesheet" />
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,800' rel='stylesheet' type='text/css'>
</head>
<body>

<!--Header-part-->
<div id="header">
  <h1><a href="dashboard.html">Matrix Admin</a></h1>
</div>
<!--close-Header-part--> 

<!--top-Header-menu-->

<!--start-top-serch-->

<!--close-top-serch--> 

<!--sidebar-menu-->
<div id="sidebar"> <a href="#" class="visible-phone"><i class="icon icon-file"></i> Addons</a>
  <ul>
    <li class="active"><a href="index.php"><i class="icon icon-home"></i> <span>Dashboard</span></a> </li>
    <li> <a href="blog.php"><i class="icon icon-signal"></i> <span>Upload Blog Post</span></a> </li>
    <li><a href="uploadproject.php"><i class="icon icon-picture"></i> <span>Upload Completed Project</span></a></li>
	<li><a href="viewproject.php"><i class="icon icon-edit"></i> <span>View Project</span></a></li>
	<li><a href="message.php"><i class="icon icon-envelope"></i> <span>Check Messages</span></a></li>
  	<li><a href="viewblogpost.php"><i class="icon icon-envelope"></i> <span>View Blog Post</span></a></li>
  </ul>
</div>
<div id="content">
 <div class="container-fluid">
    <div class="quick-actions_homepage">
      <ul class="quick-actions">
         <li class="bg_lb span3"> <a href="index.php"> <i class="icon-dashboard"></i> <span class="label label-important"></span> My Dashboard </a> </li>
        <li class="bg_lg span3"> <a href="blog.php"> <i class="icon-user"></i>Upload Blog Post</a> </li>
        <li class="bg_lo span3"> <a href="uploadproject.php"> <i class="icon-picture"></i> Upload To Gallery</a> </li>
        <li class="bg_lb span3"> <a href="message.php"> <i class="icon-envelope"></i>Check Messages</a></li>
		<li class="bg_lg span3"> <a href="viewproject.php"> <i class="icon-envelope"></i>View Gallery</a> </li>
		 <li class="bg_lo span3"> <a href="viewblogpost.php"> <i class="icon-envelope"></i>View blog post</a></li>
      </ul>
    </div>
<!--End-Action boxes-->    

<!--Chart-box-->    
  
<!--End-Chart-box--> 
    <hr/>
    
  </div>


  <div id="content-header">
    
    <h1>Message</h1>
  </div>
  <div class="container-fluid"><hr>
    <div class="row-fluid">
      <div class="span12">
        <div class="widget-box">
          <div class="widget-title"> <span class="icon"> <i class="icon-briefcase"></i> </span>
            <h5 >Inbox</h5>
          </div>
          <div class="widget-content">
            
            <div class="row-fluid">
              <div class="span12">
                <table class="table table-bordered table-invoice-full">
                 <thead >
                <tr>
                  <th>ID</th>
                  <th>Image</th>
				  <th>Title</th>
                  <th>Delete</th>
                </tr>
              </thead>
			  
				   <?php
			 
							$qry="SELECT * FROM posttbl";
							$run= mysqli_query($conn, $qry);
							while($row = mysqli_fetch_array($run))
							{
								$pid = $row['postid'];
								$ifile = $row['post_img'];
								$ptitle = $row['post_title'];
								
								
							echo"
			
                  <tbody>
                    <tr>
					 <td>$pid</td>
                      <td><a href='#'><img class='img-responsive' src='post_image/$ifile' style='width:250px; margin-left:35%; height:150px;'></a></td>
					   <td>$ptitle</td>
					  <td class='right'><a href='viewblogpost.php?del=$pid' style='background-color:darkblue; margin-left:35%; color:white; padding:5px; font-size:15px; border:1px solid black; border-radius:5px; letter-spacing:4px;' ><b>Delete</b></a></td>
                    </tr>
               
                  </tbody>
				  		";
			}
			?>
			
			<?php						
							
							if (isset($_GET['del']))
{
	$del=$_GET['del'];
	
	$del_user="delete from posttbl where postid='$del'";
	$run_del=mysqli_query($conn,$del_user);
	
	if($run_del)
	{
		echo "<script>alert('Deleted')</script>";

	}
	
	{
		  echo "<script>window.open('viewblogpost.php?view','self')</script>";	
	}
}


?>
		
			
                </table>
                
               
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!--Footer-part-->
<div class="row-fluid">
  <div id="footer" class="span12"> 2013 &copy; Matrix Admin. Brought to you by <a href="http://themedesigner.in">Themedesigner.in</a> </div>
</div>
<!--end-Footer-part--> 
<script src="js/jquery.min.js"></script> 
<script src="js/jquery.ui.custom.js"></script> 
<script src="js/bootstrap.min.js"></script> 
<script src="js/matrix.js"></script>
</body>
</html>
