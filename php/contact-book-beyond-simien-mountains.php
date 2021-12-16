<!doctype html>
<html>

	<head>
		<meta charset="utf-8">
		<meta name="viewport"
			  content="width=device-width, initial-scale=1, shrink-to-fit=yes">
		<meta name="description"
			  content="The book - Beyond - Simien Mountains. A Personal story and amazing photographs of a trek in Ethiopia to support local communities.">
		<script
				src="https://www.google.com/recaptcha/api.js?render=6Le7rPwZAAAAADLLQJ9ItIexI6n49geDCQWBa4mz">
		</script>
		<script src="https://kit.fontawesome.com/ae99ef662c.js"
				crossorigin="anonymous"></script>
		<link rel="stylesheet"
			  type="text/css"
			  href="./styles/style-page.css">
		<link rel="icon"
			  type="image/png"
			  href="./images/cross.png" />
		<link rel="canonical"
			  href="https://beyondsimienmountains.com/contact-book-beyond-simien-mountains/">
		<script>
		grecaptcha.ready(function() {
			grecaptcha.execute(
				'6Le7rPwZAAAAADLLQJ9ItIexI6n49geDCQWBa4mz', {
					action: 'homepage'
				}).then(function(token) {
				document.getElementById(
						'recaptchaResponse')
					.value = token
			});
		});
		</script>
		<title>Contact the authors : The Book - BEYOND -
			Simien Mountains</title>
	</head>

	<body onload="checkWidth()"
		  onresize="checkWidth()">
		<div class="bloc1"
			 id="menu"
			 style="display:none">
			<?php include("top-menu.php"); ?>
		</div>
		<div class="bloc1-mobile"
			 id="menu-mobile"
			 style="display:block">
			<?php include("top-menu-mobile.php"); ?>
		</div>
		<main class="bloc-page">
			<h2>CONTACT</h2>
			<img src="./images/contact.jpg"
				 alt="Sona Camp above Ansiya Valley in the Simien Mountains National Park">
			<div class="legend">Sona Camp, the 4,000 m
				summits in the background and the lush green
				Ansiya Valley awaiting us below.</div>
			<?php
            if (!empty($_GET['id']))
            {  echo '<div class="message-get">' . $_GET['id'] . ' !</div>';  }
        ?>
			<h3 style="text-align: center">Don’t Hesitate to
				contact us for any question, suggestion or
				information request</h3><br>
			<p style="text-align: center">TO CONTACT US
				<br>PLEASE SEND AN EMAIL <br>OR<br> FILL IN
				THE FORM BELOW
			</p>
			<p style="text-align: center">Email address :
			</p>
			<p class="email"
			   style="text-align: center">
				contact@beyondsimienmountains.com</p>
			<br>
			<form class="gform pure-form pure-form-stacked"
				  method="POST"
				  action="contact-form.php">
				<div class="form-elements"
					 style="text-align: center">
					<fieldset class="pur-group">
						<label for="name">Your
							Name</label><br>
						<input id="name"
							   name="name"
							   placeholder="What is your name ?"
							   style="text-align: center" />
					</fieldset>
					<fieldset class="pur-group">
						<label for="message">Your
							Message</label><br>
						<textarea id="message"
								  name="message"
								  rows="10"
								  placeholder="Tell us what's on your mind..."
								  style="text-align: center"></textarea>
					</fieldset>
					<fieldset class="pur-group">
						<label for="email">Your Email
							Address</label><br>
						<input id="email"
							   name="email"
							   type="email"
							   value=""
							   required
							   placeholder="your.name@email.com"
							   style="text-align: center" />
						<span class="email-invalid"
							  style="display:none">
							Must be a valid email
							address</span>
					</fieldset>

					<input type="hidden"
						   id="recaptchaResponse"
						   name="recaptcha-response">

					<div class="button2"><button
								type="submit">SEND YOUR
							MESSAGE</button></div>
				</div>
			</form>
		</main>
		<footer class="bloc8">
			<?php include("footer.php"); ?>
		</footer>
	</body>
	<script src="./js/anime.js"></script>
	<script src="./js/checkWidth.js"></script>

</html>