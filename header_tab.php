<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Welcome</title>

	<link href='http://fonts.googleapis.com/css?family=Open+Sans:300' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Roboto+Condensed' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Courgette' rel='stylesheet' type='text/css'>
	<link href='multi/Muli-ExtraLight.ttf' rel='stylesheet' type='text/css'>

	<!-- foundation css-->
	<link rel="stylesheet" href="foundation-icons/foundation-icons.css" />
	<link rel="stylesheet" href="css/foundation.css" />
	<link rel="stylesheet" href="css/media.css" />
	<link rel="stylesheet" href="css/animate.min.css">
		
	<link rel="stylesheet" href="style.css" />
	<!-- foundation js-->
	<script src="js/blur.js"></script>
    <script src="js/vendor/modernizr.js"></script>
	<script src="js/vendor/jquery.js"></script>
	
	<script src="js/foundation.min.js"></script>

	<script>
		$(document).ready(function(){
			$("top-bar-section ul li a").click(function(){
				$(this).toggleClass( "active" );	
			});
		});
		

	</script>

	<script>
		$(document).foundation();
	</script>
	
	<!-- jquery ui script -->
	  <script>
		  $(function() {
			$( "#accordion" ).accordion();
		  });
	  </script>
	  

  </head>
  <body>
  
  	
	<div class="row">

			<div class="fixed contain-to-grid">
				<nav class="top-bar" data-topbar role="navigation" data-options="is_hover: true">
					<ul class="title-area">
						<li class="sitelogo">
							<a href="index.php"><img src="images/Logo Ex1.png"/></a>
						</li>  
						
						<li class="toggle-topbar menu-icon"><a href="#"><span></span></a>
						</li>
					</ul>

					<section class="top-bar-section">
						<!-- Right Nav Section -->
						<ul class="right">
							<li class="divider"></li>
							
							<li class="has-dropdown"><a href="#">Development Gateway</a>
								<ul class="dropdown">
									<li><a href="regional.php"><span><img class="menu_icon" src="images/regional.png"></span>Regional</a></li>
									<li class="divider"></li>
									<li><a href="bangladesh.php"><span><img class="menu_icon" src="images/bangladesh.png"></span>Bangladesh</a>                                       </li>
								</ul>
							</li>
							
							<li class="divider"></li>
							<li class="has-dropdown"><a href="innovation.php">Development News</a>
								<ul class="dropdown">
									<li><a href="adbnews.php">ADB News</a></li>
									<li class="divider"></li>
									<li><a href="7th5thyear.php">7th 5 year Plan of Bangladesh</a></li>
								</ul>
							</li>
							<li class="divider"></li>
							<li><a href="bangladesh_index.php">HDI of Bangladesh</a></li>
							<li class="divider"></li>
							<li><a href="blog.php">Development Initiative</a></li>
							<li class="divider"></li>
							<li class="has-dropdown"><a href="expertise.php">Success Story</a>
								<ul class="dropdown">
									<li><a href="#"><span><img class="menu_icon" src="images/logo_bd.png"></span>Govt</a></li>
									<li class="divider"></li>
									<li class="has-dropdown">
                                        <a href="#"><span><img class="menu_icon" src="images/Private.png"></span>Private</a>
									    <ul class="dropdown">
                                            <li><a href="adb_projects.php">ADB Projects</a></li>
							                <li class="divider"></li>
                                            <li><a href="worldbank_project.php">World Bank Projects</a></li>
                                        </ul>
									</li>
								</ul>
							</li>
							<li class="divider"></li>
							<li class="has-dropdown"><a href="#">Development Blog</a>
                                <ul class="dropdown">
							        <li><a href="blog.php">Blog</a></li>
									<li class="divider"></li>
									<li class="has-dropdown"><a href="#">Corner</a>
									    <ul class="dropdown">
									        <li><a href="#">FAQ</a></li>
							                <li class="divider"></li>
                                            <li><a href="#">Opinion</a></li>
									    </ul>
									</li>
								</ul>
							</li>
							<li><a href="login.php">Login</a></li>
						</ul>
					</section>
				</nav>
			</div><!-- end desktop navigation -->

	</div>	
