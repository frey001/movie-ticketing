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
		<style type="text/css">
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
			.user{
				position: absolute;
			}
			#user-pic{
				right: 300px;
			}
			#user-name{
				right: 200px;
				
				color:white;
			}
			#logout-button{
				position:absolute;
				right: 100px;
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
				style: bold;
				color: white;
			}
			#movie-poster{
				height: 300px;
				width: 100%;
				padding: 20px;
			}
			

			.main-movie img{
				display: inline-block;
				width: 19.5%;
				height: 300px;
				padding: 20px;
				border-radius: 10px;
			}
			#ww1984{
				padding: -40px !important;
				margin: -50px;
			
			}

			.main-movie a {
				
				display: inline-block;
				text-align: justify;
				padding:  0px 170px 0px 20px;
				color: black;
				font-weight: bold;
				
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
			
			
		</style>
	</head>
	<body>
		<nav class="navbar navbar-expand-lg navbar-light ">
			<a class="navbar-brand" href="#"><img id="logo" src="bookmyshow.png"></a>
			<div>
				<form class="form-inline my-2 my-lg-0">
				  <input class="form-control mr-sm-2" type="search" placeholder="Search">
				  <button type="button" class="btn btn-danger">Search</button>
				</form>
			</div>
			<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
			City
			</a>
			<img class="user" id="user-pic" src="user-pic.png">
			<span class="user" id="user-name">Hi You</span>
			<button type="button" class="btn btn-danger" id="logout-button"><a href="logout.php">LogOut</a></button>
			
		</nav>	
		<div class="topnav" >
			<a class="active" href="#home">Home</a>
			<a href="index.html">Movies</a>
			<a href="#contact">Events</a>
			<a href="#about">Plays</a>
			  
		</div>
		<br>
		<br>
		<a href="https://youtu.be/COvnHv42T-A"><img id="movie-poster" src="movie-poster.jpg"></a>
		<div class="main-movie">
			<img src="ddlj.jpg" alt=""  /> 
			<img src="moonlight.jpg" alt=""  />
			<img src="aladdin.jpg" alt="" />
			<img src="vtm.jpg" alt="" />
			<img src="ww1984.jpg" alt="" />
			<a href="#">DDLJ</a>
			&emsp;
			&ensp;
			<a href="#">Moonlight</a>
			<a href="#">Aladdin</a>
			&ensp;
			<a href="#">Vijay The Master</a>
			<a id="ww1984" href="#">Wonder Woman</a>
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
		
	</body>
</html>	