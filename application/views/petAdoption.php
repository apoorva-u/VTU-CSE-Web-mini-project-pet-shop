<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Pawsome | One Stop Destination for All Things Pet</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="icon" href="<?php echo base_url('/pawsome/images/paw.png') ?>" type="image/png" sizes="16x16">
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600&display=swap" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('/pawsome/css/style.css')?>">
</head>
<body>
<div class="container-fluid">
	<!-- navigation bar -->
	<nav class="navbar navbar-expand-lg navbar-light bg-white">
		<a href="#" class="navbar-brand navbarActive">
			<img class="" src="<?php echo base_url('/pawsome/images/pawsome.png') ?>" alt="logo">
		</a>
		<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar" aria-controls="navbar" aria-expanded="false" >
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse ms-5 ms-md-0 mt-3 mt-md-0 " id="navbar">
			<ul class="navbar-nav ms-auto pe-lg-5 me-lg-5">
				<li class="nav-item  ms-md-4">
					<a href="/pawsome/" class="nav-link navbarText">
						Home
					</a>
				</li>

				<li class="nav-item dropdown ms-md-4 ">
					<a class="navbarActive nav-link dropdown-toggle " href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
						Services
					</a>
						<ul class="dropdown-menu" aria-labelledby="navbarDropdown">
						<li><a class="navbarText dropdown-item" href="/pawsome/pet-adoption">Pet Adoption</a></li>
						<li><a class="navbarText dropdown-item" href="/pawsome/nutriaccess">Nutrition & Accessories</a></li>
						<li><a class="navbarText dropdown-item" href="/pawsome/grooming">Grooming</a></li>
						
					</ul>
				</li>
				
				<li class="nav-item dropdown ms-md-4 d-none" id="profile">
					<a class="nav-link dropdown-toggle navbarText" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">

					</a>
					<ul class="dropdown-menu" aria-labelledby="navbarDropdown">
						<li><a class="dropdown-item navbarText" href="/pawsome/cart">My Cart</a></li>
						<li><a class="navbarText dropdown-item" href="/pawsome/order-history/">Order History</a></li>
						<li><button class="navbarText dropdown-item" id="logout">Logout</button></li>
					</ul>
				</li>
			</ul>

		</div>
	</nav>

	<!-- row  for pet Adoption heading -->
	<div class="row justify-content-center pt-md-5 whoWeArebg ">
		<div class="col-md-8 text-center">
			<h1 class="themeFontMedium " >
				Pets available for
				<span class="textPrimary"> adoption</span>
			</h1>
			<small class="text-secondary">With pets, things are different. 
			Our world and their world swirled together long ago like two 
			different shades of paints. Once you've achieved a serene orange, 
			you are never going back to red and yellow.
			</small>
		</div>
	</div>

	<!-- Filter 
<div class = "row whoWeArebg">
<div class = "container col-sm-10">
<div class="dropdown filter">
  <button class="btn btn-outline-primary btn-lg dropdown-toggle" type="button" id="filter1" data-bs-toggle="dropdown" aria-expanded="false">
    Filter
  </button>
  
  <ul class="dropdown-menu" aria-labelledby="filter">
  	<li><button class="dropdown-item filter" type="submit" id=f1 value ="all">All</button></li>
    <li><button class="dropdown-item filter " type="button" id=f2 value ="dog">Dogs and Puppies</button></li>
    <li><button class="dropdown-item filter" type="button" id=f3 value ="cat">Cats and Kittens</button></li>
	<li><button class="dropdown-item filter" type="button" id=f4 value ="bird">Birds</button></li>
	<li><button class="dropdown-item filter" type="button" id=f5 value ="fish">Fishes</button></li>
	</ul>
</div>
</div>
</div>
-->
	<!-- row for pet show up card -->
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
						<p class="textSecondary themeFontMedium fs-6" >

							<?php echo $item->product_name ; ?>

						</p>
						<div class="d-flex flex-row justify-content-between">
							<?php
							$myArray = explode(',', $item->description);
							foreach ($myArray as $val){
								?>
								<small class="textSecondary">
									<?php  echo $val; ?>
								</small>
							<?php } ?>
							<class style="right">
							<?php echo "₹".$item->price;?>
							</li>
						</div>
						<div>
						<a href="#" email="<?php echo $this->session->userdata('email');?>"  data-product='<?php echo json_encode($item)?>'
							   data-product='<?php echo json_encode($item)?>'
							   class="adopt  themeFontRegular mt-3 btn btn-outline-primary btn-sm rounded-pill ">
								<small>Adopt Now</small>
							</a>
						</div>
					</div>
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
<!-- link for fontawesome -->
<script src="https://kit.fontawesome.com/0295f823fc.js" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>

<!--link for js-->
<script src="<?php echo base_url('/pawsome/js/adopt.js')?>" ></script>
<script type="text/javascript" src="<?php echo  base_url('/pawsome/js/logout.js') ?>"></script>
<script type="text/javascript">

	var sessionValue = "<?php echo $this->session->userdata('email');?>";

	if (sessionValue.length==0) {
		const ulTag = document.getElementsByClassName('navbar-nav');
		var node = document.createElement("li");
		node.className = "nav-item  ms-md-4";
		var aTag = document.createElement('a');
		aTag.className="nav-link navbarText";
		aTag.innerHTML = "Login";
		aTag.href = "/pawsome/login";
		node.appendChild(aTag);
		console.log(localStorage.getItem('userInfo'));
		ulTag[0].appendChild(node);
	}
	else{
		var profileUl = document.getElementById("profile");
		profileUl.className="nav-item dropdown ms-4";
		profileUl.childNodes[1].innerHTML = sessionValue;
	}

</script>
</body>
</html>
