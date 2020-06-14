<!DOCTYPE html>
<html>
<head>
	<?php 
	error_reporting(0);
	include 'conn.php';
	include 'boot.php'; 
    include 'nav.php';
	?>
	<title></title>
</head>
<body>

	
		<div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
        <img src="intro-bg_1.jpg" class="d-block w-100" alt="..." >
       <center><div class="carousel-caption"><h2 style="padding-bottom: 600px; color: black; font-size: 50px;" >welcome to our site<br>please login to make purchase</h2></div></center> 
    </div>
  </div>
</div>

<br><br>
<div>
	 <div class="container ">
                <div class="row text-center" id="item_list">
                    <div class="col-sm-4">
                        <a href="login.php" >
                            <div class="thumbnail">
                                <img src="24.jpg" alt="" style="height: 300px; width: 300px;">
                                <div class="caption">
                                    <h3>Cameras</h3>
                                    <p>Choose among the best available in the world.</p>
                                </div>
                            </div> 
                        </a>
                    </div>

                    <div class="col-sm-4">
                        <a href="login.php" >
                            <div class="thumbnail">
                                <img src="1.jpg" alt="" style="height: 300px; width: 300px;">
                                <div class="caption">
                                    <h3>Watches</h3>
                                    <p>Original watches from the best brands.</p>
                                </div>
                            </div> 
                        </a>
                    </div>

                    <div class="col-sm-4">
                        <a href="login.php" >
                            <div class="thumbnail">
                                <img src="21.jpg" alt="" style="height: 300px; width: 300px;">
                                <div class="caption">
                                    <h3>Shirts</h3>
                                    <p>Our exquisite collection of shirts.</p>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
</div>
	


	



<?php 
include 'footer.php'; ?>
</body>
</html>