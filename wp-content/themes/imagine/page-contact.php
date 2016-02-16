<?php
/* Template Name: Contact */
?>

<?php get_header(); ?>

<?php

//response generation function
$response = "";

//function to generate response
function my_contact_form_generate_response($type, $message) {

	global $response;

	if($type == "success") $response = "<div class='success'>{$message}</div>";
	else $response = "<div class='error'>{$message}</div>";
}

//response messages
$not_human       = "Human verification incorrect.";
$missing_content = "Please supply all information.";
$email_invalid   = "Email Address Invalid.";
$message_unsent  = "Message was not sent. Try Again.";
$message_sent    = "Thanks! Your message has been sent.";

//user posted variables
$name = $_POST['contactName'];
$email = $_POST['email'];
$message = $_POST['comments'];


//php mailer variables
$to = get_option('admin_email');

$subject = "Someone sent a message from ".get_bloginfo('name');
$headers = 'From: '. $email . "\r\n" . 'Reply-To: ' . $email . "\r\n";


		if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
			// email not valid

			my_contact_form_generate_response("error", $email_invalid);

		} else {
			// missing required fields
			if (empty($name) || empty($message)) {
				my_contact_form_generate_response("error", $missing_content);
			} else {
				$sent = mail($to, $subject, strip_tags($message), $headers);
				var_dump($sent);
				if ($sent) {
					my_contact_form_generate_response("success", $message_sent); //message sent!
				} else {
					my_contact_form_generate_response("error", $message_unsent); //message wasn't sent
				}
			}
		}
?>

	<div class="contact">
		<ul class="social">
			<li><a href="https://www.facebook.com/ivan.veres.dj"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/facebook.png" width="50" height="50" alt="Facebook"/>Contact me on Facebook</a></li>
			<li><a href="https://twitter.com/ivan_veres"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/twitter.png" width="50" height="50" alt="Twitter"/>Follow me on Twitter</a></li>
			<li><a href="https://hr.linkedin.com/in/ivan-vere%C5%A1-417811106"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/linkedin.png" width="50" height="50" alt="Linkedin"/>Connect with me on LinkedIn</a></li>
			<li><a href=""><img src="<?php bloginfo('stylesheet_directory'); ?>/images/skype.png" width="50" height="50" alt="Skype"/>Add me on Skype</a></li>
		</ul>
		<form action="<?php the_permalink(); ?>" id="contactForm" method="post">
			<h3>Send me an email</h3>
			<ol>
				<li>
					<input type="text" name="contactName" id="contactName" placeholder="Name..." value="" />
				</li>
				<li>
					<input type="text" name="email" id="email" placeholder="E-mail..." value="" />
				</li>
				<li>
						<textarea name="comments" id="commentsText" rows="20" cols="30" placeholder="Message..."></textarea>
				</li>
				<li>
					<button id="submit-btn" type="submit">SEND</button>
				</li>
			</ol>
			<input type="hidden" name="submitted" id="submitted" value="true" />
		</form>
	</div>

<?php get_footer(); ?>