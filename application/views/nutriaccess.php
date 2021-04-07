<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Pawsome | One Stop Destination for All Things Pet</title>
    <link rel="icon" href="<?php echo base_url('/pawsome/images/paw.png') ?>" type="image/png" sizes="16x16">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600&display=swap" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('/pawsome/css/style.css')?>">
</head>
<body>
<div class="container-fluid">
	<!-- navigation bar -->
	<nav class="navbar navbar-expand-lg navbar-light bg-white pl-lg-5 pr-lg-5">
		<a href="#" class="navbar-brand navbarActive">
			<img class="" src="<?php echo base_url('/pawsome/images/pawsome.png') ?>" alt="logo">
		</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar" aria-controls="navbar" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse ml-5 ml-md-0 mt-3 mt-md-0 " id="navbar">
			<ul class="navbar-nav ml-auto ">
				<li class="nav-item  ml-md-4">
					<a href="<?php echo base_url('/pawsome/'); ?>" class="nav-link navbarText">
						Home
					</a>
				</li>
				<li class="nav-item dropdown  ml-md-4">
					<a href="#" class="nav-link dropdown-toggle navbarActive" id="dropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
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
						<button class="dropdown-item mb-0 navbarText"  id="logout" >Logout</button>
					</div>
				</li>
			</ul>
		</div>
	</nav>

	<!-- row land -->
	<div class="row  mt-md-2">
		<div class="col-md-4 offset-md-1">
			<img class="img-fluid " src="<?php echo base_url('/pawsome/images/dog-walk.png') ?>" alt="Man walking a dog">
		</div>
		<div class="col-md-6 ml-md-5  mt-md-5 pt-lg-5">
			<h1 class="themeFontExtraBold align-middle mt-lg-5">
				Nutrition & 
				<span class="textPrimary">Acces</span>sories
			</h1>
			
			<p>Confused about your pet's diet?</p>
			
  			<button type="button" class="btn btn-primary" data-toggle="collapse" data-target="#demo">Watch this video</button>
  			<div id="demo" class="collapse">
    		<!-- Youtube embed-->
				<div class="container-fluid embed-nutri">
					<div class="embed-responsive embed-responsive-16by9">
  				<iframe class="embed-responsive-item" src="https://www.youtube.com/embed/k36X7ij0HQM" allowfullscreen></iframe>
					</div>
				</div>
  			</div>
			
	</div>
</div>
	<!-- row for importance of nutrition -->
	<div class="row whoWeArebg mt-5 mt-md-0 pb-md-5">
		<div class="col-md-6 pt-md-5 d-block d-sm-none ">
			<img class="img-fluid " src="<?php echo base_url('/pawsome/images/tbd.png') ?>" alt="Image">
		</div>
		<div class="col-lg-4 col-md-6 offset-lg-2 mt-md-5">
			<h3 class="themeFontBold pt-md-5">Get The 
				<span class="textPrimary">Best </span>
				of 
				<span class="textPrimary">Food </span>
				and 
				<span class="textPrimary">Accessories</span>
			</h3>
			
			<p class="themeFonLight mt-md-7">We have everything! The food, The treats, The Accessories, The Toys.</br>
			Everything that your pets love.
			</p>
			<p class="themeFontBold">You name it.</br>
			We got it!
			</p>
		</div>
		<div class="col-md-6 d-none d-sm-block">
			<img class="img-fluid mt-md-5 mt-lg-0" src="<?php echo base_url('/pawsome/images/nutriaccess-dog.png') ?>" alt="Food and accessories">
			
		</div>
	</div>


	<!-- row for product -->
	
	
	<div class="row  justify-content-center pt-md-5 pb-md-5  whoWeArebg">
		<?php
		foreach ($value as $item){
			?>
			<div class="col-lg-2 col-md-5 col-1 mt-5 ms-lg-5 col-8">
				<div class="card cardGrroming pb-5 pb-lg-0">
					<div class="card-body">
						<div class=" text-center">
							<img class="imgCard rounded-3 card-img-top" src="<?php echo base_url($item->product_image) ?>" alt="Product image missing">
						</div>

						<h5 class="font-weight-bold themeFontMedium textPrimary ">
							<?php echo $item->product_name; ?>
							<class style="float:right">
							<?php echo "₹".$item->price;?>
							
						
						</h5>
						<?php
						$myArray = explode(',', $item->description);
						foreach ($myArray as $val){
							?>
							<ul class="mt-3">
								<li class="themeFontLight h6 ">
									<?php  echo $val; ?>
								</li>
							</ul>
						<?php } ?>
					
					</div>
					
					<a href="#" email="<?php echo $this->session->userdata('email');?>" data-product='<?php echo json_encode($item)?>' class="bookNowBtn1 themeFontMedium mt-2 btn btn-outline-primary pl-md-5 rounded-pill pr-md-5 pl-0 pr-0" >
						Add to Cart
					</a>
				</div>
			</div>
		<?php } ?>
	</div>

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
				<p class="themeFontMedium ">Service</p>
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
				</p>
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

<!-- link for fontawesome -->
<script src="https://kit.fontawesome.com/0295f823fc.js" crossorigin="anonymous"></script>
<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<!--link for grooming js-->
<script src="<?php echo base_url('/pawsome/js/nutrition.js')?>" ></script>
<script type="text/javascript" src="<?php echo  base_url('/pawsome/js/logout.js') ?>"></script>
<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</body>
</html>
