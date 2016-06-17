<!DOCTYPE html>
<!--
	Transit by TEMPLATED
	templated.co @templatedco
	Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Sign Up | TKUICO</title>
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


				function messageGo(){
				  // var _c = $(c).is(':checked') ? 1 : 0;
				  // var _java = $(jav).is(':checked') ? 1 : 0;
				  

				  var c = $('#c').val();
				  var _java = $('#java').is(':checked')? 1 : 0;
				  var python = $('#python').val();
				  var swift = $('#swift').val();
				  var mssql = $('#mssql').val();
				  var mysql = $('#mysql').val();
				  var nb = $('#nb').val();
				  var pc = $('#pc').val();
				  var ios = $('#ios').val();
				  var android = $('#android').val();
				  var agree = $('#agree').val();    
				  var stuid = $('#stuid').val();


				    $.ajax({
				        url:"course.php", 
				        // data: {c: _c, _java: _java}
				        data:"&c="+c+"&java="+_java+"&python="+python+"&swift="+swift+"&mssql="+mssql+"&mysql="+mysql+"&nb="+nb+"&pc="+pc+"&ios="+ios+"&android="+android+"&agree="+agree+"&stuid="+stuid,    
				        type : "POST",
				        dataType:'json' ,
				        complete:function(){

				        alert("\nWe hava received your request\n" + c + "\n" + _java);

				        },

				    }); 

				};
			</script>

	</head>
	<body>
		<?php   
		 $dbhost = '127.0.0.1';   
		 $dbuser = 'root';   
		 $dbpass = '';   
		 $dbname = 'ico';

		 $StuID =$_REQUEST['Stdid'];
		 $StuName = $_REQUEST['name'];
		 $department = $_REQUEST['department'];
		 $grade = $_REQUEST['grade'];
		 

		 $conn = mysql_connect($dbhost, $dbuser, $dbpass) or die('Error with MySQL connection');
		  
		  mysql_query("SET NAMES 'utf8'");
		  mysql_select_db($dbname);   
		  
		  $sql_insert = "INSERT INTO signupnow(studentID, studentName, department , Grade) VALUES ('$StuID','$StuName','$department','$grade')";
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
						<h2>Sign Up Now</h2>
						<p>Hello, <?php echo  $_POST['name'];?>. Choose the courses we prepare for you!</p>
					</header>
					

					<div class="container 50%">
						
						<form id="course" action="success.php" method="post">
							<p class="coursetype">Basic Programming Languages</p>
							<div class="row uniform">
								<div class="6u 12u$(small)">
									<input type="checkbox" name="c" value="1" id="c1"><label for="c1">C-Language</label>
								</div>
								<div class="6u$ 12u$(small)">
									<input type="checkbox" name="java" value="1" id="c2"><label for="c2">Java</label>
								</div>
								<div class="6u 12u$(small)">
									<input type="checkbox" name="python" value="1" id="c3"><label for="c3">Python</label>
								</div>
								<div class="6u$ 12u$(small)">
									<input type="checkbox" name="swift" value="1" id="c4"><label for="c4">Swift</label>
								</div>
							</div>
							<br/>
							<p class="coursetype">Basic Database Skills</p>
							<div class="row uniform">
								<div class="6u 12u$(small)">
									<input type="checkbox" name="mssql" value="1" id="c5"><label for="c5">MS SQL Server</label>
								</div>
								<div class="6u$ 12u$(small)">
									<input type="checkbox" name="mysql" value="1" id="c6"><label for="c6">MySQL</label>
								</div>
							</div>
							<br/>
							<p class="coursetype">Computer Repairing Courses</p>
							<div class="row uniform">
								<div class="6u 12u$(small)">
									<input type="checkbox" name="nb" value="1" id="c7"><label for="c7">Laptop</label>
								</div>
								<div class="6u$ 12u$(small)">
									<input type="checkbox" name="pc" value="1" id="c8"><label for="c8">Desktop</label>
								</div>
							</div>
							<br/>
							<p class="coursetype">Mobile Application Courses</p>
							<div class="row uniform">
								<div class="6u 12u$(small)">
									<input type="checkbox" name="ios" value="1" id="c9"><label for="c9">Apple iOS</label>
								</div>
								<div class="6u$ 12u$(small)">
									<input type="checkbox" name="android" value="1" id="c10"><label for="c10">Android</label>
								</div>
							</div>
							<hr/>
							<div class="row uniform">
								<div class="12u$">
									<input type="checkbox" name="agree" value="1" id="c11"><label for="c11">I agree to give my information (Student ID, Dept., Grade) to ICO and participate in ICO courses.</label>
								</div>
							</div>
							<div class="row uniform">
								<div class="12u$">
									<input type="checkbox" name="stuid" value="<?php echo $_POST['Stdid'] ?>" checked="checked">
								</div>
							</div>
							<div class="row uniform">	
								<div class="12u$">
									<ul class="actions">
										<center>
											<li><input class="btn btn-secondary" value="Register Now" type="submit"/></li>
										</center>
									</ul>
								</div>
							</div>
						</form>
					</div>

					
				</div>
			</section>

		<!-- Footer -->
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

<!--
						<div class="row">
							<div class="col-md-6">
								<?php 
								echo "Name: ";
								echo $_POST['name'];
								?>
							</div>
							<div class="col-md-6">
								<?php
								echo "Student ID: ";
								echo $_POST['Stdid'];
								?>
							</div>
							<div class="col-md-6">
								<?php
								echo "Department: ";
								if ($_POST['department'] == "dp1")
									echo "Information Management";
								else if ($_POST['department'] == "dp2")
									echo "International Bussiness Management";
								else if ($_POST['department'] == "dp3")
									echo "Accounting";
								else if ($_POST['department'] == "dp4")
									echo "Statistics";
								else if ($_POST['department'] == "dp5")
									echo "Insurance";
								else if ($_POST['department'] == "dp6")
									echo "Economics";
								?>
							</div>
							<div class="col-md-6">
								<?php
								echo "Grade: ";
								echo $_POST['grade'];
								echo "<br/>";
								?>
							</div>
						</div>
-->