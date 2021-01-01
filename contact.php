<?php
define("TITLE", "Contact | Franklin\'s Fine Dining");
include './assets/includes/header.php';?>

	<div id="contact">

		<hr>

		<h1>Get in touch with us</h1>

		<form method="post" action="" id="contact-form">

			<label for="name">Your name</label>
			<input type="text" id="name" name="name">

			<label for="email">Your email</label>
			<input type="email" id="email" name="email">

			<label for="message">and your message</label>
			<textarea name="message" id="message" cols="30" rows="10"></textarea>


			<input type="checkbox" id="subscribe" name="subscribe" value="subscribe">
			<label for="subscribe">Subscribe your newsletter</label>

			<input type="submit" class="button next" name="contact_submit" value="Send Message">

		</form>

		<hr>

	</div><!-- contact -->


<?php include './assets/includes/footer.php';?>