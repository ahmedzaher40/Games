<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <!-- for internet explorer Meta -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- for mobile Meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <title>games-shop</title>
    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
	<!-- FontAwesomeIcons -->
	<link href="css/font-awesome.min.css" rel="stylesheet">
	<!-- FontAwesomeStars For Rating -->
	<link href="css/fontawesome-stars.css" rel="stylesheet">
	<!--OwlCarousel-->
	<link href="css/owl.carousel.min.css" rel="stylesheet">
    <!-- Our style Using -->
    <link href="css/style.less" rel="stylesheet/less">
    <!--[if lt IE 9]>
    <script src="js/html5shiv.min.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
	<!------search ------->
	<div class="search">
	  <div class="container-fluid">
		<div class="logo">
		  <h3 class="navbar-brand"><span class="iconlogo"></span> <strong>games</strong></h3>
		</div>
		<div class="sear">
		  <form action="" method="">
			<input type="text" name="search" placeholder="search now..." />
			<i class="fa fa-close"></i>
		  </form>
		  <h3 class="navbar-brand"><i class="fa fa-search"></i></h3>
		</div>
	  </div>
	  <i class="fa fa-bars" aria-hidden="true"></i>
	</div>
	<!----------Menu------->
	<div class="menu">
	  <nav class="navbar navbar-default">
        <div class="container-fluid">
           <!-- Brand and toggle get grouped for better mobile display -->
           <div class="navbar-header">
             <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#slideshow" aria-expanded="false">
               <span class="sr-only">Toggle navigation</span>
               <span class="icon-bar"></span>
               <span class="icon-bar"></span>
               <span class="icon-bar"></span>
             </button>
           </div>
           <!-- Collect the nav links, forms, and other content for toggling -->
           <div class="collapse navbar-collapse" id="slideshow">
             <ul class="nav navbar-nav">
               <li><a href="#">categories</a></li>
               <li class="theactive"><a href="#">highlights</a></li>
               <li><a href="#">top</a></li>
               <li><a href="#">new</a></li>
			<li><a href="#">recommended</a></li>
             </ul>
           </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
      </nav>
	</div>
	<!----- Header --------->
	<div class="header">
	  <div class="container">
        <div id="myslide" class="carousel slide" data-ride="carousel">
          <!-- Indicators -->
          <ol class="carousel-indicators">
            <li data-target="#myslide" data-slide-to="0" class="active"></li>
            <li data-target="#myslide" data-slide-to="1"></li>
            <li data-target="#myslide" data-slide-to="2"></li>
			<li data-target="#myslide" data-slide-to="3"></li>
          </ol>
          <!-- Wrapper for slides -->
          <div class="carousel-inner" role="listbox">
            <div class="item active">
              <img src="imgs/show1.png" alt="show1">
            </div>
            <div class="item">
              <img src="imgs/show2.png" alt="show2">
            </div>
			<div class="item">
              <img src="imgs/show3.png" alt="show3">
            </div>
			<div class="item">
              <img src="imgs/show4.png" alt="show4">
            </div>
          </div>
        </div>
	  </div>
	</div>
	<!---Content--->
	<div class="container" id="theGames">
	    <div class="action">
	      <h3>action and adventure</h3>
	      <div class="owl-carousel" id="slider">
			<?php
            $jsonfile = file_get_contents('thedata.json');
            $json = json_decode($jsonfile,true);
            for($i=0; $i<10; $i++){
                $row = $json['games'][$i]; ?>
				<div class="item">
			      <img src="<?php echo $row['imageURL']; ?>" alt="image [<?php echo $row['id']; ?>]" />
			      <h2><a id="gamename" href="#"><?php echo $row['name']; ?></a></h2>
			      <p><?php echo $row['publisher']; ?></p>
				  <select id="example">
                    <option value="1" <?php if($row['rating'] == '1'){echo 'selected disable';} ?>>1</option>
                    <option value="2" <?php if($row['rating'] == '2'){echo 'selected disable';} ?>>2</option>
                    <option value="3" <?php if($row['rating'] == '3'){echo 'selected disable';} ?>>3</option>
                    <option value="4" <?php if($row['rating'] == '4'){echo 'selected disable';} ?>>4</option>
                    <option value="5" <?php if($row['rating'] == '5'){echo 'selected disable';} ?>>5</option>
                  </select>
			    </div>
            <?php }
            ?>
	      </div>
	    </div>
	       <div class="casual">
	      <h3>casual games</h3>
	      <div class="owl-carousel" id="slider2">
			<?php
            $jsonfile = file_get_contents('thedata.json');
            $json = json_decode($jsonfile,true);
            for($i=11; $i<20; $i++){
                $row = $json['games'][$i]; ?>
				<div class="item">
			      <img src="<?php echo $row['imageURL']; ?>" alt="image [<?php echo $row['id']; ?>]" />
			      <h2><a id="gamename" href="#"><?php echo $row['name']; ?></a></h2>
			      <p><?php echo $row['publisher']; ?></p>
				  <select id="example">
                    <option value="1" <?php if($row['rating'] == '1'){echo 'selected';} ?>>1</option>
                    <option value="2" <?php if($row['rating'] == '2'){echo 'selected';} ?>>2</option>
                    <option value="3" <?php if($row['rating'] == '3'){echo 'selected';} ?>>3</option>
                    <option value="4" <?php if($row['rating'] == '4'){echo 'selected';} ?>>4</option>
                    <option value="5" <?php if($row['rating'] == '5'){echo 'selected';} ?>>5</option>
                  </select>
			    </div>
            <?php }
            ?>
	      </div>
	    </div>
	    <div class="puzzle">
	      <h3>puzzle</h3>
	      <div class="owl-carousel" id="slider3">
			<?php
            $jsonfile = file_get_contents('thedata.json');
            $json = json_decode($jsonfile,true);
            for($i=8; $i<18; $i++){
                $row = $json['games'][$i]; ?>
				<div class="item">
			      <img src="<?php echo $row['imageURL']; ?>" alt="image [<?php echo $row['id']; ?>]" />
			      <h2><a id="gamename" href="#"><?php echo $row['name']; ?></a></h2>
			      <p><?php echo $row['publisher']; ?></p>
				  <select id="example">
                    <option value="1" <?php if($row['rating'] == '1'){echo 'selected';} ?>>1</option>
                    <option value="2" <?php if($row['rating'] == '2'){echo 'selected';} ?>>2</option>
                    <option value="3" <?php if($row['rating'] == '3'){echo 'selected';} ?>>3</option>
                    <option value="4" <?php if($row['rating'] == '4'){echo 'selected';} ?>>4</option>
                    <option value="5" <?php if($row['rating'] == '5'){echo 'selected';} ?>>5</option>
                  </select>
			    </div>
            <?php }
            ?>
	       </div>
	    </div>
	</div>
	<!---------Nav--------->
	<div class="thenav">
	  <div class="log">
		<span><i class="fa fa-sign-in"></i></span><a href="#">login</a>
	    <i class="fa fa-close" id="close"></i>
	  </div>
	  <div class="men">
		<ul>
		  <li><a href="#">categories</a></li>
		  <li><a href="#">highlights</a></li>
		  <li><a href="#">top</a></li>
		  <li><a href="#">new</a></li>
		  <li><a href="#">recommended</a></li>
		</ul>
	  </div>
	  <div class="help"><span><i class="fa fa-question"></i></span><a href="#">help</a></div>
	</div>
    <script src="js/jquery-1.12.0.min.js"></script><!--jquery-->
    <script src="js/bootstrap.min.js"></script><!--Bootstrap-->
	<script src="js/less.js"></script><!--Less-->
	<script src="js/owl.carousel.min.js"></script><!--Carousel-->
	<script src="js/jquery.barrating.min.js"></script><!--Rating-->
	<script src="js/plugins.js"></script><!--Scripts-->
  </body>
</html>