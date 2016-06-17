<!DOCTYPE html>
<!--
	Transit by TEMPLATED
	templated.co @templatedco
	Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Success | TKUICO</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<!--[if lte IE 8]><script src="js/html5shiv.js"></script><![endif]-->
		<script src="js/jquery.min.js"></script>
		<script src="js/skel.min.js"></script>
		<script src="js/skel-layers.min.js"></script>
		<script src="js/init.js"></script>
		<script src="http://code.jquery.com/jquery-2.2.0.min.js"></script>
		<script src="js/bootstrap.js"></script>
		<noscript>
			<link rel="stylesheet" href="css/skel.css" />
			<link rel="stylesheet" href="css/style.css" />
			<link rel="stylesheet" href="css/style-xlarge.css" />		
		</noscript>
		<link rel="stylesheet" href="css/bootstrap.min.css" />
		<link rel="stylesheet" href="css/index.css" />
		<link rel="stylesheet" href="css/main.css" />
		<link rel="Shortcut Icon" type="image/x-icon" href="images/titleicon.ico" />
		<script>
				$(function () {

		           $('a.page-scroll').click(function() {

		               var target = $(this.hash);

		               $('html,body').animate({

		                   scrollTop: target.offset().top

		               }, 500);

		               return false;

		           });});
				$('#myModal').on('shown.bs.modal', function () {
  				$('#myInput').focus()
				});
			</script>

	</head>
	<body>
	  <?php   
 $dbhost = '127.0.0.1';   
 $dbuser = 'root';   
 $dbpass = '';   
 $dbname = 'ico';

 $c =$_POST['c'];
 $java = $_POST['java'];
 $python = $_POST['python'];
 $swift = $_POST['swift'];
 $mssql = $_POST['mssql'];
 $mysql = $_POST['mysql'];
 $nb = $_POST['nb'];
 $pc = $_POST['pc'];
 $ios = $_POST['ios'];
 $android = $_POST['android'];
 $agree = $_POST['agree'];
 $stuid = $_POST['stuid'];

 
 $conn = mysql_connect($dbhost, $dbuser, $dbpass) or die('Error with MySQL connection');
  
  mysql_query("SET NAMES 'utf8'");
  mysql_select_db($dbname);   
  
  $sql_insert = "INSERT INTO course(c, java, python , swift, mssql, mysql, nb, pc, ios, android, agree, stuid) VALUES ('$c','$java','$python','$swift','$mssql','$mysql','$nb','$pc','$ios','$android','$agree', '$stuid')";
  $result = mysql_query($sql_insert) or die('MySQL insert error');
?>
		<nav class="navbar navbar-default navbar-fixed-top navbar-inverse">
			  <div class="container-fluid">
			    <!-- Brand and toggle get grouped for better mobile display -->
			    <div class="navbar-header page-scroll">
			      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
			        <span class="sr-only">Toggle navigation</span>
			        <span class="icon-bar"></span>
			        <span class="icon-bar"></span>
			        <span class="icon-bar"></span>
			      </button>
			      <a class="navbar-brand">TKUICO</a>
			      <img src="images/box.gif" >
			    </div>

			    <!-- Collect the nav links, forms, and other content for toggling -->
			    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
			      <ul class="nav navbar-nav">
			      
			      </ul>
			      <ul class="nav navbar-nav navbar-right">
			        <li><a href="index.html">Home</a></li>
					<li><a href="index.html#one" class="page-scroll">ICO Events</a></li> 
                    <li><a href="index.html#two" class="page-scroll">Members of ICO</a></li>
					<li><a href="index.html#regform" class="page-scroll">Sign Up</a></li>
			      </ul>
			    </div><!-- /.navbar-collapse -->
			  </div><!-- /.container-fluid -->
			</nav>

		<!-- Main -->
			<section id="main" class="wrapper">
				<div class="container">

					<header class="major">
						<h2>Success</h2><br>
						<p>Thanks for your reply!</p>
					</header>
					</div>
					</section>


			<footer id="footer">
				<div class="container">
					<section class="links">
						<div class="row">
							<section class="3u 6u$(medium) 12u$(small)">
								<h3>Academic organization</h3>
								<ul class="unstyled">
									<li><a href="http://www.tku.edu.tw/">Tamkang Unverisity</a></li>
									<li><a href="http://www.im.tku.edu.tw/">Department of Information Management Tamkang Unverisity</a></li>
									<li><a href="https://www.facebook.com/tkuico">TKU ICO Facebook</a></li>
									<li><a href="https://www.facebook.com/TKUB310">TKU B310 Laboratory</a></li>
								</ul>
							</section>
							<section class="3u 6u$(medium) 12u$(small)">
								<h3>Academic organization</h3>
								<ul class="unstyled">
									<li><a href="https://hitcon.org/2016/">Hitcon 2016</a></li>
									<li><a href="https://www.sinica.edu.tw/index.shtml">Academia Sinica</a></li>
									<li><a href="http://www.iii.org.tw/">Insitute For Information Industry</a></li>
									<li><a href="http://sitcon.org/2016/#target-home">Sitcon 2016</a></li>
								</ul>
							</section>
							<section class="3u 6u$(medium) 12u$(small)">
								<h3>Friends Of ICO</h3>
								<ul class="unstyled">
									<li><a href="http://chenbolin84.pixnet.net/blog">Chenbolin Blog</a></li>
									<li><a href="http://hacktku.org/2016/">Hack TKU</a></li>
									<li><a href="https://www.facebook.com/HackathonTaiwan/?fref=ts">Hackathon Taiwan</a></li>
									<li><a href="http://sitcon.org/2016/#target-home">Sitcon 2015</a></li>
								</ul>
							</section>
							<section class="3u 6u$(medium) 12u$(small)">
								<h3>Friends Of ICO</h3>
								<ul class="unstyled">
									<li><a href="http://hacktku.org/2015/">Hack TKU 2015</a></li>
									<li><a href="http://mail.im.tku.edu.tw/~jschang/">Jschang Web</a></li>
									<li><a href="https://www.microsoft.com/zh-tw">Microsoft</a></li>
									<li><a href="http://dsv.su.se/en/">Department of Computer and System Sciences,DSV</a></li>
								</ul>
							</section>
						</div>
					</section>
					<div class="row">
						<div class="8u 12u$(medium)">
							<ul class="copyright">
								<li>Information Consultant Organization, Tamkang University. All rights reserved.</li>
							</ul>
						</div>
						<div class="4u$ 12u$(medium)">
							<ul class="icons">
								<li>
									<a href ="https://www.facebook.com/tkuico" class="icon rounded fa-facebook"><span class="label">Facebook</span></a>
								</li>
								<li>
									<a href="https://twitter.com/?lang=zh-tw" class="icon rounded fa-twitter"><span class="label">Twitter</span></a>
								</li>
								<li>
									<a href="https://plus.google.com/collections/featured"class="icon rounded fa-google-plus"><span class="label">Google+</span></a>
								</li>
								<li>
									<a href="http://websta.me/n/jenweihsu" class="icon rounded fa-linkedin"><span class="label">LinkedIn</span></a>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</footer>

	</body>
</html>

