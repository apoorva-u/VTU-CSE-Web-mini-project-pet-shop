<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="<?php echo base_url('/pawsome/images/paw.png') ?>" type="image/png" sizes="16x16">
    <title>Pawsome | One Stop Destination for All Things Pet</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600&display=swap"
		  rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('/pawsome/css/style.css') ?>">
</head>

<body>
<div class="container-fluid">
	<!-- navigation bar -->
	<nav class="navbar navbar-expand-lg navbar-light bg-white">
		<a href="#" class="navbar-brand navbarActive">
			<img class="" src="<?php echo base_url('/pawsome/images/pawsome.png') ?>" alt="logo">
		</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar" aria-controls="navbar"
				aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse  d-lg-flex mr-lg-5  pr-md-5 justify-content-lg-end mt-3 mt-md-0 " id="navbar">
			<ul class="navbar-nav ml-md-5">
				<li class="nav-item  ml-md-4">
					<a href="#" class="nav-link navbarActive">
						Home
					</a>
				</li>
				<li class="nav-item dropdown  ml-md-4">
					<a href="#" class="nav-link dropdown-toggle navbarText" id="dropdown" role="button"
					   data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						Services
					</a>
					<div class="dropdown-menu " aria-labelledby="dropdown">
						
						<a href="/pawsome/pet-adoption" class="dropdown-item navbarText">
							Pet Adoption
						</a>
						<a href="/pawsome/nutriaccess" class="dropdown-item navbarText">
							Nutrition & Accessories
						</a>
						<a href="/pawsome/grooming" class="dropdown-item navbarText">
							Grooming
						</a>
						
					</div>
				</li>
				
				<li id="profile" class="nav-item dropdown ml-4 d-none">
					<a class="nav-link dropdown-toggle navbarText " href="#" id="navbarDropdown" role="button"
					   data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					</a>
					<div class="dropdown-menu" aria-labelledby="navbarDropdown">
						<a class="dropdown-item navbarText" href="/pawsome/order-history">Order History</a>
						<a class="dropdown-item navbarText" href="/pawsome/cart">My Cart</a>
						<button class="dropdown-item mb-0 navbarText" href="" id="logout" >Logout</button>
					</div>
				</li>
			</ul>
		</div>
	</nav>
	
	
	<!-- row of Adoption -->
	<div class="row pt-lg-5 pb-md-5 pb-lg-0">
		<div class="col-md-5 offset-md-1  mt-lg-5">
			<h1 class="themeFontExtraBold align-middle mt-lg-5">
				This Love is 
				<span class="textPrimary">Furr </span>Real 💙
			</h1>
			<p class="themeFontMedium">Ensure your four-legged friend is always cared for!</p>
			<a href="/pawsome/pet-adoption"
			   class="themeFontMedium mt-3 btn btn-outline-primary pl-md-5 rounded-pill pr-md-5">
				Adopt a Pet
			</a>
		</div>
		<div class="col-md-6 mt-md-5">
			<img class="img-fluid" src="<?php echo base_url('/pawsome/images/bd.png') ?>" alt="Pet Image">
		</div>
	</div>
	<!-- us -->
	<div class="row  justify-content-center pt-3 whoWeArebg">
		<div class="col-md-8 mt-5 ">
			<h2 class="themeFontBold mt-md-3 text-center">Know Us</h2>
			<p class="themeFontMedium text-center">We are Purr-fect for you. 
				We have a list of furry and non-furry friends who can't wait to meet you. 
				We help you take care of all your petting needs, food, accessories 
				and we can make them look dashing and be more healthier!</p>
		</div>
	</div>
	<!-- row for img of cats -->
	<div class="row justify-content-center whoWeArebg">
		<div class="col-md-8">
			<img class="img-fluid"
				 src="<?php echo base_url('/pawsome/images/cats.png') ?>"
				 alt="Group of cats image">
		</div>
	</div>
	<!-- row for Services -->
	<div class="row  mt-5">
		<div class="col-md-8  mt-md-5 offset-md-1">
			
			<div class="row justify-content-center">
				<div class="col-md-6 col-lg-5  mt-5 ">
					
					
				</div>
				<div class="col-md-6 col-lg-5   mt-5 ">
					
					
				</div>
			</div>
		</div>
		<div class="col-md-3 d-none d-sm-block ">
			<img class="img-fluid" src="<?php echo base_url('/pawsome/images/groomer.png') ?>"
				 alt="Groomer image">
		</div>

		
	
	


<!-- Collapse-->

<div class="container">
  <h2> </br>
  Thinking of adopting a dog?</h2>
  <p>Know which kind of dog suits you and your lifestyle!</p>
  <button type="button" class="btn btn-primary" data-toggle="collapse" data-target="#demo">Watch this video</button>
  <div id="demo" class="collapse">
    	<!-- Youtube embed-->
	<div class="container-fluid embed">
		<div class="embed-responsive embed-responsive-16by9">
  			<iframe class="embed-responsive-item" src="https://www.youtube.com/embed/ASxkyQKZE4k" allowfullscreen></iframe>
		</div>
	</div>
  </div>
</div>

</body>
</html>	

	<!-- footer -->
	<footer class="ps-2 ">
		<div class="row justify-content-center mt-5">
			<div class="col-md-3 ms-3 ms-md-0">
				<div class="row ">
					<img class="" src="<?php echo base_url('/pawsome/images/pawsomel.png') ?>" alt="logo">
				</div>
				<div class="row">
					<p class="themeFontLight small mt-3 text-left">
						Pawsome offers
						at home grooming treatments through 
						your favorite shops.
						Pawsome delivers your orders in 5-8 business days.</br>
						Shipping free on all orders.
					</p>

				</div>
			</div>
			<div class="col-md-2 mt-5 mt-md-4 ps-md-5 ">
				<p class="themeFontMedium ">Company</p>
				<p class="themeFontLight mb-2">
					<a href="/pawsome/"class="text-dark" >Home</a>
				</p>
				
			</div>
			<div class="col-md-2 mt-5 mt-md-4 ">
				<p class="themeFontMedium ">Services</p>
				<p class="themeFontLight mb-2">
					<a href="/pawsome/pet-adoption"class="text-dark" >Pet Adoption</a>
				</p>
				<p class="themeFontLight mb-2">
					<a href="/pawsome/nutriaccess"class="text-dark" >Nutrition & Accessories</a>
				</p>
				<p class="themeFontLight mb-2">
					<a href="/pawsome/grooming"class="text-dark" >Grooming</a>
				</p>				
				
			</div>
			<div class="col-md-3 mt-5 mt-md-4">
				<p class="themeFontRegular ">Contact us:</br>
				<a href="mailto:apoorvagargi99@gmail.com" target= "_blank" >woof@pawsome.com </a></p>
				<p class="themeFontLight mb-2">
					Find us on: 
				<p class="themeFontRegular mb-2 d-flex flex-row">
					<a href="https://twitter.com/iApoorvaAcharya" target= "_blank" class="me-3 text-info" >
						<i class="fab fa-twitter"></i>
					</a>
					<a href="https://www.linkedin.com/in/apoorva-u-147474189/" target= "_blank" class="text-primary" >
						<i class="fab fa-linkedin-in"></i>
					</a>
				</p>
			</div>
		</div>
	</footer>
</div>

</div>
<script type="text/javascript">

	var sessionValue = "<?php echo $this->session->userdata('email');?>";
	if (sessionValue.length == 0) {
		const ulTag = document.getElementsByClassName('navbar-nav');
		var node = document.createElement("li");
		node.className = "nav-item  ml-md-4";
		var aTag = document.createElement('a');
		aTag.href = "<?php echo base_url('/pawsome/login'); ?>"
		aTag.className = "nav-link navbarText";
		aTag.innerHTML = "Login";
		node.appendChild(aTag);
		console.log(localStorage.getItem('userInfo'));
		ulTag[0].appendChild(node);
	} else {
		var profileUl = document.getElementById("profile");
		profileUl.className = "nav-item dropdown ml-4";
		profileUl.childNodes[1].innerHTML = sessionValue;
	}

</script>
<!--link for jquery cookie-->

<!-- link for fontawesome -->
<script src="https://kit.fontawesome.com/0295f823fc.js" crossorigin="anonymous"></script>
<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script><script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script type="module" src="https://cdn.jsdelivr.net/npm/js-cookie@rc/dist/js.cookie.min.mjs"></script>
<script type="text/javascript" src="<?php echo  base_url('/pawsome/js/logout.js') ?>"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>