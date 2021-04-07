<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Pet Adoption | Pet Services | Nutrition Counselling</title>
    <link rel="icon" href="<?php echo base_url('/pawsome/images/paw.png') ?>" type="image/png" sizes="16x16">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
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
		<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar" aria-controls="navbar" aria-expanded="false">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse ms-5 ms-md-0 mt-3 mt-md-0 " id="navbar">
			<ul class="navbar-nav ms-auto ">
				<li class="nav-item  ms-md-4">
					<a href="<?php echo base_url('/pawsome/') ?>" class="nav-link navbarText">
						Home
					</a>
				</li>

				<li class="nav-item dropdown ms-md-4 ">
					<a class="nav-link dropdown-toggle navbarText" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
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
						<li><a class="navbarText dropdown-item" href="/pawsome/order-history/">Order History</a></li>
						<li><a class="navbarText dropdown-item" href="/pawsome/cart/">My Cart</a></li>
						<li><button id="logout" class="navbarText dropdown-item" >Logout</button></li>
					</ul>
				</li>
			</ul>
		</div>
	</nav>
	<!--	row for order list-->
	<div class="row justify-content-center whoWeArebg pb-5">
		<?php
		if(count($values)==0){
			?>
			<div class="text-center mt-5">
				<p class="themeFontRegular text-secondary fs-6">
					No Orders Yet!
				</p>
			<img class="img-fluid mt-md-5 mt-lg-0" src="<?php echo base_url('/pawsome/images/no order.gif') ?>" alt="Food and accessories">
			</div>
		<?php } ?>
		<?php
		foreach ($values as $item){
			?>
			<ul class="list-group col-md-8 mt-5  col-12" >
				<li class="whoWeArebg list-group-item d-flex flex-row justify-content-between">
					<div class="d-flex flex-column ">
						<small class="  themeFontRegular">
							ORDER PLACED
						</small>
						<small class="fs-6 themeFontMedium" ><?php echo  $item[0]->order_date?></small>
					</div>
					<div class="d-flex ms-3 flex-column ">
						<small class="mb-0 themeFontRegular">
							TOTAL
						</small>
						<small class="ms-1 themeFontMedium">₹<?php echo  $item[0]->total ?></small>
					</div>

				</li>
				<?php
				foreach ($item as $order){
					?>
					<li class="list-group-item d-flex flex-row">
						<div class="" style="width:150px;height: 100px">
							<img class="img-fluid" src="<?php echo base_url($order->image) ?>" alt="logo">
						</div>
						<div class="d-flex flex-column ps-md-3">
							<div class="">
								<h6 class="textPrimary themeFontMedium">
									<?php
									echo $order->product_name;
									?>
								</h6>
							</div>
							<div class="">
								<p class="mb-2" >Dispatched address: &nbsp;<?php
									echo $order->housename;
									?>
								</p>

							</div>
							<div class="d-flex flex-row mt-2">
								<div >
									<img class="img-fluid" src="<?php echo base_url('/pawsome/images/price-tag.png') ?>" alt="logo">
								</div>

								<div class=" ms-3">
									<p >₹<?php
										echo $order->price;
										?>
									</p>

								</div>
							</div>
						</div>
					</li>
				<?php } ?>
			</ul>
			<?php
		}
		?>
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
				<p class="themeFontLight mb-2">
					<a href="/pawsome/rescue"class="text-dark" >Rescue a Pet</a>
				</p>
			</div>
			<div class="col-md-3 mt-5 mt-md-4">
				<p class="themeFontRegular ">Contact us:</br>
				<a href="mailto:apoorvagargi99@gmail.com" target= "_blank" >help@pawsome.com </a></p>
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

	if (sessionValue.length==0) {
		const ulTag = document.getElementsByClassName('navbar-nav');
		var node = document.createElement("li");
		node.className = "nav-item  ms-md-4";
		var aTag = document.createElement('a');
		aTag.className="nav-link  navbarActive";
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
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script type="text/javascript" src="<?php echo  base_url('/pawsome/js/logout.js') ?>"></script>
<!-- link for fontawesome -->
<script src="https://kit.fontawesome.com/0295f823fc.js" crossorigin="anonymous"></script>
<!-- jQuery library -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
</body>
</html>
