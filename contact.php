<!doctype html>
<html>
	<head> 
		<title>Contact</title>
		<link rel="shortcut icon" href="files/images/icons/npa_website_icon.png">
		<link rel="stylesheet" href="styles/main.css">
		<link rel="stylesheet" href="styles/contact.css">
		<!--Bootstrap-->
		<link rel="stylesheet" type="text/css" href="styles/css/bootstrap.min.css">
		<!--Bootstrap_grid-->
		<link rel="stylesheet" type="text/css" href="styles/css/bootstrap-grid.min.css">
		<link rel="stylesheet" type="text/css" href="styles/css/bootstrap-theme.min.css">
	</head>
	<body class="body">
		<header class="navbar-inverse"> 
			<nav  id="WebsiteName"> 
				<h1><a href="index.html">Nicholas Paterson ART</a></h1>
			</nav>	
			<div class="container" id="border">
			  <div class="Nav-stick">
				<nav class="navbar navbar-expand-lg navbar-dark bg-black">
				  <a class="navbar-brand" href="index.html"><img class="web_icon" src="files/images/icons/npa_website_icon.png"></a>
				  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				    <span class="navbar-toggler-icon"></span>
				  </button>

				  <div class="collapse navbar-collapse" id="navbarSupportedContent">
				    <ul class="navbar-nav mr-auto">
				      <li class="nav-item">
				        <a class="nav-link" href="index.html">Home</a>
				      </li>
				      <li class="dropdown nav-item">
			           	<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Galleries</a>
				       	 <ul class="dropdown-content" id="galdrop">
				       	  <li><a class="nav-link gallink" href="gallery-1.html">Gallery 1</a></li>
				       	  <li><a class="nav-link gallink" href="gallery-2.html">Gallery 2</a></li>
			        	 </ul> 
		        	  </li>
				      <li class="nav-item">
				        <a class="nav-link" href="biography.html">Biography</a>
				      <li class="nav-item" id="active">
				        <a class="nav-link" href="contact.php">Contact <span class="sr-only">(current)</span></a>
				      </li>
				      <li class="nav-item">
				        <a class="nav-link" href="about.html">About</a>
				      </li>
				    </ul>
 			<!--    <form class="form-inline my-2 my-lg-0">
					  <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
				      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button> 
				    </form>  -->
				  </div>
				</nav>
			  </div>
			</div>
		</header>

		<main>
			<div class="container" id="contain"> 
			  <form id="contact-form" method="post" action="php/contact-form.php">
				<p>CONTACT US</p>
				<div class="login">
					<input type="text" name="name" placeholder="Your Name" class="input" required>
					<input type="text" name="email" placeholder="Your Email" class="input" required>
				</div>
				<div class="subject"> 
					<input type="text" name="subject" placeholder="Subject" class="input" required>
				</div>
				<div class="msg"> 
					<textarea name="message" class="area" placeholder="Leave a Message"></textarea required>
				</div>
				<div class="ver"> 
					<label><span class="req">*</span>What is 2+2? <span class="spam"><strong><em>(Anti-spam)</em></strong></span></label>
					<input class="vrf" name="human" placeholder="Type Here" required>
				</div>
				<div class="submit"> 
					<input class="btn" id="submit" name="submit" type="submit" value="Send Message">
				</div>
			  </form>
			</div>
		</main> 
				
		<footer class="sticky">
			<div class="footer"> 
				&copy2019 NicholasPatersonART <img class="web_icon" src="files/images/icons/npa_website_icon.png">
			</div>
		</footer>
	</body>
	<!--jquery-->
	<script src="script/js/jquery.min.js"></script>
	<!--bootstrap.min-script-->
	<script src="script/js/bootstrap.min.js"></script>
	<!--bootstrap_bundle-->
	<script src="script/js/bootstrap.bundle.js"></script>
	<!--bootstrap_bundle.min-->
	<script src="script/js/bootstrap.bundle.min.js"></script>
	<!--bootstrap-script-->
	<script src="script/js/bootstrap.js"></script>
</html>