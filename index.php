<!DOCTYPE html>
<html lang="en">

<?php
require("./config.php");
include(ROOT . "components/head.php");
?>

<body>
	<div class="top__block">
		<div class="__block container">
			<div class="top__menu">
				<ul class="menu">
					<li><a href="<?php echo HOST; ?>index.php"><img src="img/logo.svg" alt="logo"></a></li>
					<li><a href="<?php echo HOST; ?>contacts.php"><img src="img/Vector.svg" alt="contact"></a></li>
				</ul>
			</div>
			<div class="top__content">
				<h1 class="top_content_header">New Automation
					Tool for Your </h1>
				<p class="text text_top__content">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Faucibus
					tristique vulputate ultrices ut mauris tellus at. Posuere sollicitudin odio tellus elit.</p>
				<a href="#" class="top__button">See Our Project</a>
			</div>
		</div>
	</div>
	<div class="info container">
		<h3 class="header__h3">What we do to help our client grow in digital era</h3>
		<div class="info__block">
			<div class="info__card">
				<img class="card__img" src="img/image1.svg" alt="card 1">
				<h4 class="header__h4 header__card">Make Your business To Be
					Better Famous In Internet</h4>
				<p class="text text__card">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
					tempor
					incididunt ut labore et dolore magna aliqua.
				</p>
				<a href="" class="card__link">Learn more</a>
			</div>
			<div class="info__card">
				<img class="card__img" src="img/image2.svg" alt="card 2">
				<h4 class="header__h4 header__card">Bring Technology To Your
					Comfrotable Home</h4>
				<p class="text text__card">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua.
				</p>
				<a href="" class="card__link">Learn more</a>
			</div>
			<div class="info__card">
				<img class="card__img" src="img/image3.svg" alt="card 3">
				<h4 class="header__h4 header__card">Build Your Digital Product
					That Suitable For Your Need</h4>
				<p class="text text__card">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua.
				</p>
				<a href="#" class="card__link">Learn more</a>
			</div>
		</div>
	</div>
	<div class="project container">
		<h3 class="header__h3 prodject_header">Our Finished Project.</h3>
		<p class="text project__text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
			incididunt ut
			labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
		<div class="project__item">
			<img class="project__img" src="img/Mask_Group_1.png" alt="photo">
			<p class="text__project1">Smart Home Installation</p>
		</div>
		<div class="project__parent">
			<div class="project__item project__item_marj">
				<img class="project__img" src="img/Mask_Group_2.png" alt="photo">
				<p class="text__project2">Sparklite App</p>
			</div>
			<div class="project__item">
				<img class="project__img" src="img/Mask_Group_3.png" alt="photo">
				<p class="text__project2">Car-Rapetition App</p>
			</div>
		</div>
	</div>

	<?php
	include(ROOT . "components/footer.php");
	?>
</body>

</html>