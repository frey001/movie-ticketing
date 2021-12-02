


<!doctype html>
<html lang="en">
	<head>
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<title>Book My Show</title>
		<script src="index.pack.js"></script>
		<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>
		<style type="text/css">
			* {
				box-sizing: border-box;
			}
			
		    #logo{
				height: 40px;
				width: 150px;
			}
			nav{
				background-color: #333545;
			}
			#navbarDropdown{
				color: white;
			}
			.form-popup {
				display: none;
				position: fixed;
				top: 50px;
				right: 500px;
				border: 3px solid #f1f1f1;
				z-index: 3;
			}
			.form-container {
				max-width: 300px;
				padding: 10px;
				background-color: white;
			}
			.form-container input[type=email], .form-container input[type=password], .form-container input[type=text] {
				width: 100%;
				padding: 15px;
				margin: 5px 0 22px 0;
				border: none;
				background: #f1f1f1;
			}
			.form-container input[type=email]:focus, .form-container input[type=password]:focus {
				background-color: #ddd;
				outline: none;
			}
			.form-container .btn {
				background-color: #4CAF50;
				color: white;
				padding: 16px 20px;
				border: none;
				cursor: pointer;
				width: 100%;
				margin-bottom:10px;
				opacity: 0.8;
			}
			
			.form-container .cancel {
				background-color: red;
			}
			.form-container .btn:hover {
			    opacity: 1;
			}
			input[type=email]:focus, input[type=password]:focus {
				background-color: #ddd;
				outline: none;
			}
			.open-button{
				background-color: #DC3545;
				color: white;
				padding: 10px 15px;
				margin: 8px ;
				cursor: pointer;
				position: absolute;
				border: none;
				
			}
			#slbtn{
				right: 200px;
				border-radius: 5px;
			}
			#subtn{
				right: 100px;
				border-radius: 5px;
			}
			.cancelbtn {
				padding: 14px 20px;
				background-color: #f44336;
			}
			.signupbtn {
				padding: 14px 20px;
				background-color: green;
			}
			.cancelbtn, .signupbtn {
				float: left;
			    width: 50%;
			}
			.modal {
				display: none; /* Hidden by default */
				position: fixed; /* Stay in place */
				z-index: 1; /* Sit on top */
				left: 0;
				top: 0;
				width: 100%; /* Full width */
				height: 100%; /* Full height */
				overflow: auto; /* Enable scroll if needed */
				background-color: #474e5d;
				padding-top: 50px;
			}
			.modal-content {
				background-color: #fefefe;
				margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
				border: 1px solid #888;
				width: 80%; /* Could be more or less, depending on screen size */
			}
			input[type=email], input[type=password], input[type=text] {
				width: 100%;
				padding: 15px;
				margin: 5px 0 22px 0;
				display: inline-block;
				border: none;
				background: #f1f1f1;
			}
			.close {
				position: absolute;
				right: 35px;
				top: 15px;
				font-size: 40px;
				font-weight: bold;
				color: #f1f1f1;
			}

			.close:hover,
			.close:focus {
				color: #f44336;
				cursor: pointer;
			}
			.clearfix::after {
				content: "";
				clear: both;
				display: table;
		    }
			.topnav {
				overflow: hidden;
				background-color: #222539;
			}

			.topnav a {
				float: left;
				color: #f2f2f2;
				text-align: center;
				padding: 14px 16px;
				text-decoration: none;
				font-size: 17px;
			}

			.topnav a:hover {
				background-color: #ddd;
				color: black;
			}

			.topnav a.active {
				display: bold;
				color: white;
			}
			#movie-poster{
				height: 300px;
				width: 100%;
				padding: 20px;
			}
			
			
			.column {
			  float: left;
			  width: 20%;
			  padding: 0 10px;
			}


			.row {margin: 0 -5px;}

			.row:after {
			  content: "";
			  display: table;
			  clear: both;
			}


			@media screen and (max-width: 600px) {
			  .column {
				width: 100%;
				display: block;
				margin-bottom: 20px;
			  }
			}


			.card {
			  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
			  padding: 5px;
			  text-align: center;
			  background-color: #f1f1f1;
			}
			iframe{
				margin: 20px 250px;
				
			}
			.site-footer
			{
				background-color:#26272b;
				padding:45px 0 20px;
				font-size:15px;
				line-height:24px;
				color:#737373;
			}
			.site-footer hr
			{
				border-top-color:#bbb;
				opacity:0.5
			}
			.site-footer hr.small
			{
				margin:20px 0
			}
			.site-footer h6
			{
				color:#fff;
				font-size:16px;
				text-transform:uppercase;
				margin-top:5px;
				letter-spacing:2px
			}
			.site-footer a
			{
				color:#737373;
			}
			.site-footer a:hover
			{
				color:#3366cc;
				text-decoration:none;
			}
			.footer-links
			{
				padding-left:0;
				list-style:none
			}
			.footer-links li
			{
				display:block
			}
			.footer-links a
			{
				color:#737373
			}
			.footer-links a:active,.footer-links a:focus,.footer-links a:hover
			{
				color:#3366cc;
				text-decoration:none;
			}
			.footer-links.inline li
			{
				display:inline-block
			}
			.site-footer .social-icons
			{
				text-align:right
			}
			.site-footer .social-icons a
			{
				width:40px;
				height:40px;
				line-height:40px;
				margin-left:6px;
				margin-right:0;
				border-radius:100%;
				background-color:#33353d
			}
			.copyright-text
			{
				margin:0
			}
			@media (max-width:991px)
			{
				.site-footer [class^=col-]
			  {
					margin-bottom:30px
			  }
			}
			@media (max-width:767px)
			{
				.site-footer
			  {
					padding-bottom:0
			  }
			  .site-footer .copyright-text,.site-footer .social-icons
			  {
					text-align:center
			  }
			}
			.social-icons
			{
				padding-left:0;
				margin-bottom:0;
				list-style:none
			}
			.social-icons li
			{
				display:inline-block;
				margin-bottom:4px
			}
			.social-icons li.title
			{
				margin-right:15px;
				text-transform:uppercase;
				color:#96a2b2;
				font-weight:700;
				font-size:13px
			}
			.social-icons a{
				background-color:#eceeef;
				color:#818a91;
				font-size:16px;
				display:inline-block;
				line-height:44px;
				width:44px;
				height:44px;
				text-align:center;
				margin-right:8px;
				border-radius:100%;
				-webkit-transition:all .2s linear;
				-o-transition:all .2s linear;
				transition:all .2s linear
			}
			.social-icons a:active,.social-icons a:focus,.social-icons a:hover
			{
				color:#fff;
				background-color:#29aafe
			}
			.social-icons.size-sm a
			{
				line-height:34px;
				height:34px;
				width:34px;
				font-size:14px
			}
			.social-icons a.facebook:hover
			{
				background-color:#3b5998
			}
			.social-icons a.twitter:hover
			{
				background-color:#00aced
			}
			.social-icons a.linkedin:hover
			{
				background-color:#007bb6
			}

			@media (max-width:767px)
			{
				.social-icons li.title
			  {
					display:block;
					margin-right:0;
					font-weight:600
			  }
			}
			.form-group{
				
				padding-top: 10px;
				
			}
			#clock{
				color:white;
				position:absolute;
				right:120px;
			}
			
		</style>
	</head>
	<body>
	
		<nav class="navbar navbar-expand-lg navbar-light ">
			<a class="navbar-brand" href="#"><img id="logo" src="bookmyshow.png"></a>
			<div>
				<form class="form-inline my-2 my-lg-0">
				  <input class="form-control mr-sm-2" type="search" placeholder="Search" ng-model="searchbox">
				  <button type="button" class="btn btn-danger">Search</button>
				</form>
			</div>
			&emsp;
			<div class="form-group">
				
				<select class="form-control">
				<option>City</option>
				<option>Mumbai</option>
				<option>Bangalore</option>
				<option>Delhi</option>
				</select>
				<span class="select-arrow"></span>
			</div>

			
			<button class="open-button" id="slbtn"><a href="login.php">Sign In/Login</button>

			
		    <button class="open-button" id="subtn"><a href="registration.php">Sign Up</button>

			
		</nav>	
		<div class="topnav" >
			<a class="active" href="#home">Home</a>
			<a href="index.php">Movies</a>
			<a href="#contact">Events</a>
			<a href="contact.php">Contact Us</a>
			<a href="wishlist.html">Wishlist</a>
			 <div ng-app="myApp" ng-controller="myCtrl" id="clock"> 
			<h1>{{theTime}}</h1>
			</div>




		</div>
		
		<br>
		
		<a href="https://youtu.be/COvnHv42T-A"><img id="movie-poster" src="movie-poster.jpg"></a>
		
		<h2 align="center">Movies</h2>
		<br>

		<div class="row">
		  <div class="column">
			<div class="card">
			  
			  <img src="ddlj.jpg" alt="" />
			  <br>
			  <p>DDLJ</p>
			</div>
		  </div>

		  <div class="column">
			<div class="card">
			  
			  <img src="moonlight.jpg" alt="" />
			  <br>
			  <p>Moonlight</p>
			</div>
		  </div>
		  
		  <div class="column">
			<div class="card">
			  
			  <img src="aladdin.jpg" alt="" />
			  <br>
			  <p>Aladdin</p>
			</div>
		  </div>
		  
		  <div class="column">
			<div class="card">
			  
			  <img src="vtm.jpg" alt="" />
			  <br>
			  <p>Vijay The Master</p>
			</div>
		  </div>
		  
		  <div class="column">
			<div class="card">
			  
			  <img src="ww1984.jpg" alt="" />
			  <br>
			  <p>Wonder Woman</p>
			</div>
		  </div>
		</div>
			
		<hr>
		<iframe width="60%" height="450" src="https://www.youtube.com/embed/GAr61hdF59Y" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
		<br>
		<footer class="site-footer">
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-md-6">
            <h6>About</h6>
            <p class="text-justify">Bigtree Entertainment's BookMyShow is India's largest entertainment ticketing website. Headquartered in Mumbai, it is the only destination for movie and non-movie options like events, plays and sports.</p>
          </div>

          <div class="col-xs-6 col-md-3">
            <h6>Categories</h6>
            <ul class="footer-links">
              <li><a href="#">Home</a></li>
              <li><a href="#">Movies</a></li>
              <li><a href="#">Events</a></li>
              <li><a href="#">Plays</a></li>
              
            </ul>
          </div>

          <div class="col-xs-6 col-md-3">
            <h6>Quick Links</h6>
            <ul class="footer-links">
              <li><a href="#">About Us</a></li>
              <li><a href="#">Contact Us</a></li>
              <li><a href="#">Contribute</a></li>
              <li><a href="#">Privacy Policy</a></li>
              <li><a href="#">Sitemap</a></li>
            </ul>
          </div>
        </div>
        <hr>
      </div>
      <div class="container">
        <div class="row">
          <div class="col-md-8 col-sm-6 col-xs-12">
            <p class="copyright-text">Copyright &copy; 2021 All Rights Reserved by 
         <a href="#">SNF</a>.
            </p>
          </div>

          <div class="col-md-4 col-sm-6 col-xs-12">
            <ul class="social-icons">
              <li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>
              <li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li>
              <li><a class="linkedin" href="#"><i class="fa fa-linkedin"></i></a></li>   
            </ul>
          </div>
        </div>
      </div>
</footer>

		<script>
			function openForm() {
			  document.getElementById("myForm").style.display = "block";
			}
			function closeForm() {
			  document.getElementById("myForm").style.display = "none";
			}
			function openForm1() {
			  document.getElementById('id01').style.display='block'
			}
			function closeForm1() {
			  document.getElementById('id01').style.display='none'
			}
			var modal = document.getElementById('id01');
			window.onclick = function(event) {
			if (event.target == modal) {
				modal.style.display = "none";
			  }
			}
		</script>
<script>
var app = angular.module('myApp', []);
app.controller('myCtrl', function($scope, $interval) {
  $scope.theTime = new Date().toLocaleTimeString();
  $interval(function () {
      $scope.theTime = new Date().toLocaleTimeString();
  }, 1000);
});
</script> 
		
	</body>
</html>	