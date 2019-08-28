<?php

include("dbconnect.php");

?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>Blog</title>
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
  <h1><a href="dashboard.html">testimonial</a></h1>
</div>
<!--close-Header-part--> 


<!--top-Header-menu-->

<!--close-top-Header-menu-->
<!--start-top-serch-->

<!--close-top-serch-->
<!--sidebar-menu-->
<div id="sidebar"><a href="#" class="visible-phone"><i class="icon icon-home"></i> Dashboard</a>
  <ul>
    <li class="active"><a href="index.php"><i class="icon icon-home"></i> <span>Dashboard</span></a> </li>
    <li> <a href="blog.php"><i class="icon icon-signal"></i> <span>Upload Blog Post</span></a> </li>
    <li><a href="uploadproject.php"><i class="icon icon-picture"></i> <span>Upload To Gallery</span></a></li>
	<li><a href="viewproject.php"><i class="icon icon-edit"></i> <span>View Gallery</span></a></li>
	<li><a href="message.php"><i class="icon icon-envelope"></i> <span>Check Messages</span></a></li>
   <li><a href="viewblogpost.php"><i class="icon icon-envelope"></i> <span>View Blog Post</span></a></li>
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
	
	
 <div class="container-fluid">
   
    <hr>
    <div class="row-fluid">
	 
     
        <div class="widget-box widget-calendar">
          <div class="widget-title"> <span class="icon"><i class="icon-book"></i></span>
            <h5>Blog</h5>
          </div>
		  
	<div class="widget-content">
        
		
<form action="blog.php" method="POST" class="form-horizontal" enctype="multipart/form-data">
          
		 
		<div class="control-group">	
          <label class="control-label">Select image </label>
	     <div class="controls">
          <input type="file" name="file" class="span12" />
         </div>
        </div>		 
		 
		   <div class="control-group">	
     		 <label class="control-label">Post title :</label>
             <div class="controls">
                <input type="text" name="ptitle" class="span4" placeholder="Title" />
		     </div>
           </div>	
		   
	      <div class="control-group">
           <label class="control-label">Post :</label>	
             <div class="controls">
              <textarea class="textarea_editor span8" name="pcon" rows="6" placeholder="Enter text ..."></textarea>
              </div> 
	        </div>
			 <input type="submit" value="post" name="post" class="btn btn-success">
</form>
		  
			    <?php
		  if(isset($_POST['post']))
		  {
			  
			 $ifile = $_FILES['file']['name'];
			  $ifile_tmp = $_FILES['file']['tmp_name'];
			  move_uploaded_file($ifile_tmp, "post_image/$ifile");
			  
	          $ptitle=$_POST['ptitle'];
			  $pcon=$_POST['pcon'];
			  
			  include("dbconnect.php");
			  
$qry = "INSERT INTO `posttbl`(`postid`,`post_img`, `posted_date`, `post_title`, `post_content`, `posted_by`) VALUES ('','$ifile',CURRENT_TIMESTAMP,'$ptitle','$pcon','Admin')";
			  
			$run = mysqli_query($conn,$qry);
			  if($run){
				  echo"<script>alert('Post inserted successfully')</script>";
			  }
			  else
			  {
				echo"<script>alert('Not successful')</script>"; 
              }	
			  
		  }

?>	  
	
		  
		  
      
      </div>
 </div>

		
	
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
<script src="js/wysihtml5-0.3.0.js"></script> 
<script src="js/bootstrap-wysihtml5.js"></script>

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

<script>
	$('.textarea_editor').wysihtml5();
</script>


		  
			  
		  


</body>
</html>
