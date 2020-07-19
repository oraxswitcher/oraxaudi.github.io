<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="https://fonts.googleapis.com/css2?family=Alegreya&family=Grenze+Gotisch:wght@300&display=swap" rel="stylesheet"> 	<link rel="stylesheet" href="css/style.css">
	<title>Audi | HOME</title>
</head>
<body>
	<div class="full-page">
		<header>
			<div class="nav" >
                <div class="logo">
					<a href="http://localhost/redsec%20audi%20compi/">
						<img src="./img/logo.gif" alt="logo">
					</a>
                </div>
                <div class="nav-bar">
                    <a href="#">Experience Audi</a>
                    <a href="#">Company</a>
                    <a href="#">Careers</a>
                </div>
			</div>
			<div class="company-details">
				<div class="bio">
					<div class="logo2"><img src="./img/logo2.png" alt="logo2"></div>
					<p>“Lead by technology”</p>
				</div>
			</div>
		</header>
		<section id="app">
			<div  @mouseover="show=true" class="section-vue">
				<div  class="text-top">
					<div class="text-left">_____________________________________________________________________</div>
					<div class="text">Cars Review</div>
					<div class="text-right">_____________________________________________________________________</div>
				</div>
				<transition name="showup">
					<div v-if="show" class="cars-container">
						<div class="car"><img src="./img/audi-a1.jpg" alt="audi A1"></div>
						<div class="car-content">
							<h2>AUDI A1</h2>
							<p>The Audi A1 (internally designated Typ 8X) is a supermini car launched by Audi at the 2010 Geneva Motor Show. Sales of the initial 3 door A1 model started in Germany in August 2010, with the United Kingdom following in November 2010. A five-door version, called Sportback, was launched in November 2011, with sales starting in export markets during spring 2012</p>
							<p>Price:$19,500 – 59,850</p>
						</div>
					</div>
				</transition>
				<transition name="showup2">
					<div v-if="show" class="cars-container">
						<div class="car"><img src="./img/audi-a5.jpg" alt="audi a5"></div>
						<div class="car-content">
							<h2>AUDI A5</h2>
							<p>The Audi A5 is a series of compact executive coupe cars produced by the German automobile manufacturer Audi since March 2007. The A5 range additionally comprises the coupe, cabriolet, and "Sportback" (a four-door hatchback with a fastback-like roofline) version of the Audi A4 saloon and estate models. </p>
							<p>Price:$42,900 - 60,200</p>
						</div>
					</div>
				</transition>
				<transition name="showup3">
					<div v-if="show" class="cars-container">
						<div class="car"><img src="./img/audi-Q7.jpg" alt="audi q7"></div>
						<div class="car-content">
							<h2>AUDI Q7</h2>
							<p>The Audi Q7 is a mid-size luxury SUV made by the German manufacturer Audi, unveiled in September 2005 at the Frankfurt Motor Show. Production of this seven-seater SUV began in the autumn of 2005 at the Volkswagen Bratislava Plant in Bratislava, Slovakia. It was the first SUV offering from Audi and went on sale in 2006. </p>
							<p>Price:$54,950 - 85,000 </p>
						</div>
					</div>
				</transition>
				<transition name="showup4">
					<div v-if="show" class="cars-container">
						<div class="car"><img src="./img/audi-r8.jpg" alt="audi r8"></div>
						<div class="car-content">
							<h2>AUDI R8</h2>
							<p>The Audi R8 is a mid-engine, 2-seater sports car, which uses Audi's trademark quattro permanent all-wheel drive system. It was introduced by the German car manufacturer Audi AG in 2006. </p>
							<p>Price:$169,900 - 208,100</p>
						</div>
					</div>
				</transition>
			</div>
		</section>
		<footer>
			
		</footer>
	</div>
		<script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
		<script src="./JS/app.js"></script>
</body>
</html>