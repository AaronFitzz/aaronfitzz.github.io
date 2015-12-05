<!DOCTYPE html>
<html>
	<head>
		<title>Bootstrap Tutorial</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="css/bootstrap.min.css" />
		<link rel="stylesheet" href="css/style.css" />
	</head>
	<body>
	<div class="navbar-static-top navbar-inverse" id="home">
		<div class="container">
			<div class="navbar-brand">
				My Site
			</div>
			<button class="navbar-toggle" data-toggle="collapse" data-target=".navHeaderCollapse">
				Menu
			</button>
			<div class="collapse navbar-collapse navHeaderCollapse">
				<ul class="nav navbar-nav navbar-right">
					<li><a href="#">Home</a></li>
					<li><a href="#about">About</a></li>
					<li><a href="#portfolio">Portfolio</a></li>
					<li><a href="#contact">Contact</a></li>
				</ul>
			</div>
		</div>
	</div>
	
	<div class="jumbotron">
		<div class="container">
			<h1>Hello World!</h1>
			<p>This is our demo site, I hope you like it!</p>
			<p>All code can be found on my GitHub account, and is free to use, modify and sell!</p>
			<p><a href="http://github.com/samcogan" target="_blank" class="btn btn-primary btn-lg">Show me the code!</a></p>
		</div>
	</div>
	
	
	<div class="alt1 padding" id="about">
	<div class="container">
					
			<?php
			
			// Load the XML source
			$xml = new DOMDocument;
			$xml->load('index.xml');
			
			$xsl = new DOMDocument;
			$xsl->load('index.xsl');
			
			// Configure the transformer
			$proc = new XSLTProcessor;
			$proc->importStyleSheet($xsl); // attach the xsl rules
			
			echo $proc->transformToXML($xml);
			
			?>
		<div class="row">
			<div class="col-md-4">
				<h2 class="text-center">Ronald</h2>
				<p class="text-justify">Cristiano Ronaldo dos Santos Aveiro GOIH, known as Cristiano Ronaldo, is a Portuguese professional footballer who plays for Spanish club Real Madrid and the Portugal national team. He is a forward and serves as captain for Portugal. </p>
				<a href="#one" class="btn btn-default">Tell me more..</a>
				
			</div>
			<div class="col-md-4">
				<h2 class="text-center">Rooney</h2>
				<p class="text-justify">Wayne Mark Rooney /ˈruːni/ is an English professional footballer who plays for and captains both Manchester United and the England national team. He has played much of his career as a forward, but he has also been used in various midfield roles.</p>
				<a href="#two" class="btn btn-default">Tell me more..</a>
			</div>
			<div class="col-md-4">
				<h2 class="text-center">Ashley Young</h2>
				<p class="text-justify">Ashley Simon Young is an English professional footballer who plays as a winger for Manchester United and the English national team. Born and raised in Hertfordshire, Young's father was from Jamaica. </p>
				<a href="#three" class="btn btn-default">Tell me more..</a>
			</div>
		
		</div>
	</div>	
	</div>
	
	
	<div class="container" id="portfolio">
		<div class="row padding" id="one">
			<div class="col-md-6">
				<img src="1.png" class="img-circle img-responsive" alt="Circular holding image"/>
			</div>
			<div class="col-md-6">
				<h2 class="text-center">Work 1</h2>
				<p class="text-justify">Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
				
			</div>
		</div>	
		<hr />
		
		<div class="row padding" id="two">
			<div class="col-md-6">
				<h2 class="text-center">Work 2</h2>
				<p class="text-justify">Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
				
			</div>
			<div class="col-md-6">
				<img src="2.png" class="img-circle img-responsive" alt="Circular holding image"/>
			</div>
		</div>
		<hr />
		<div class="row padding" id="three">
			<div class="col-md-6">
				<img src="3.png" class="img-circle img-responsive" alt="Circular holding image"/>
			</div>
			<div class="col-md-6">
				<h2 class="text-center">Work 3</h2>
				<p class="text-justify">Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>	
			</div>
		</div>
		<hr />
	</div>
	
	<div class="container padding" id="contact">
		<form role="form">
			<div class="form-group">
				<label for="email">Email:</label>
				<input type="email" class="form-control" id="email" name="email" placeholder="example@example.com"/>
			</div>
			<div class="form-group">
				<label for="name">Name:</label>
				<input type="text" class="form-control" id="name" name="name" placeholder="Your name here"/>
			
			</div>
			<div class="form-group">
				<label for="message">Message:</label>
				<textarea class="form-control" name="message" id="message" placeholder="Your message here"></textarea>
			</div>
			<div class="form-group">
				<input type="checkbox" /> Send me promotional content
			</div>
			<button type="submit" class="btn btn-default">Submit</button>
		</form>
	</div>
	
	<div class="alt2">
		<div class="container">
			<footer>
				&copy; Sam Cogan <br />
				<a href="#home">Back to top</a>
			</footer>
		</div>
	</div>
	
	<script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
	<script src="js/bootstrap.js"></script>
	<script>
	$(function() {
  $('a[href*=#]:not([href=#])').click(function() {
    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
      if (target.length) {
        $('html,body').animate({
          scrollTop: target.offset().top
        }, 1000);
        return false;
      }
    }
  });
});
	</script>
	</body>
</html>