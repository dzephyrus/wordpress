<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Dzephy-shop
 */

?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/style.css">
	<?php wp_head();?>
</head>

<body>
	<header>
		<div class="header ">
			<div class="container col-lg-8 col-md-8 col-sm-12 offset-md-2">
				<div class="row justify-content-between align-items-center header-top border-bottom">
						<div class="header-top-left d-flex col-lg-4 col-md-4 col-12">
							<a href=""><button type="button" class="btn btn-light bg-white border-0 text-uppercase t-grey px-2 "><i class="fas fa-sign-in-alt"></i> Register</button></a>
							<div class="dropdown ">
							 	<button class="btn btn-light bg-white border-0 shadow-none text-uppercase t-grey px-2 " type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								my account <i class="fas fa-angle-down"></i>
							 	</button>
								<div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
									<a class="dropdown-item" href="#">Action</a>
									<a class="dropdown-item" href="#">Another action</a>
									<a class="dropdown-item" href="#">Something else here</a>
							 	</div>
							</div>
							<a href=""><button type="button" class="btn btn-light bg-white border-0 text-uppercase t-grey px-2 "><i class="fas fa-shopping-cart"></i> 5 items</button></a>
						</div>
					
						<div class="header-top-mid col-lg-4 col-md-4 col-12">
							<?php the_custom_logo()?>
							<h2 class="text-uppercase text-center">VOLTA</h2>
						</div>
					
						<div class="header-top-right col-lg-4 col-md-4 col-12 px-0 d-flex justify-content-end">
							<div class="input-group border rounded-0 col-sm-12">
							  <input type="text" class="form-control border-0 search " placeholder="Search" aria-label="Recipient's username" aria-describedby="basic-addon2">
							  <div class="input-group-append">
								<a href=""><button class="btn btn-outline-secondary border-0  bg-white" type="button"><i class="fas fa-search t-grey"></i></button></a>
							  </div>
							</div>
						</div>
					</div>
				<?php wp_nav_menu(array(
						'container' =>	'div',
						
						'menu_class' => 'd-flex header-list text-uppercase'
					))?>
				<div class="row justify-content-center">
					<ul class="d-flex header-list text-uppercase ">
						<li class="header-list_item">
							<a href="" class="header-list_item_name ">home</a>
							<ul class="header-list_item_drop ">
								<li>
									<a href="">home page</a>
								</li>
								<li>
									<a href="">home page 2</a>
								</li>
							</ul>
						</li>
						<li class="header-list_item">
							<a href="" class="header-list_item_name ">shop</a>
						</li>
						<li class="header-list_item">
							<a href="" class="header-list_item_name ">shop</a>
						</li>
						<li class="header-list_item">
							<a href="" class="header-list_item_name ">shop</a>
						</li>
						<li class="header-list_item">
							<a href="" class="header-list_item_name ">shop</a>
						</li>
						<li class="header-list_item">
							<a href="" class="header-list_item_name ">shop</a>
						</li>
					</ul>
					<ul class="d-flex header-list text-uppercase">
						<li class="header-list_item">
							<a href="" class="header-list_item_name ">home</a>
							<ul class="header-list_item_drop ">
								<li>
									<a href="">home page</a>
								</li>
								<li>
									<a href="">home page 2</a>
								</li>
							</ul>
						</li>
						<li class="header-list_item">
							<a href="" class="header-list_item_name ">shop</a>
						</li>
						<li class="header-list_item">
							<a href="" class="header-list_item_name ">shop</a>
						</li>
						<li class="header-list_item">
							<a href="" class="header-list_item_name ">shop</a>
						</li>
						<li class="header-list_item">
							<a href="" class="header-list_item_name ">shop</a>
						</li>
						<li class="header-list_item">
							<a href="" class="header-list_item_name ">shop</a>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</header>