<?php
/*
Template Name: Contact
*/
?>

<?php
if(isset($_POST['submitted'])) {
	if(trim($_POST['contactName']) === '') {
		$nameError = 'Please enter your name.';
		$hasError = true;
	} else {
		$name = trim($_POST['contactName']);
	}

	if(trim($_POST['email']) === '')  {
		$emailError = 'Please enter your email address.';
		$hasError = true;
	} else if (!preg_match("/^[[:alnum:]][a-z0-9_.-]*@[a-z0-9.-]+\.[a-z]{2,4}$/i", trim($_POST['email']))) {
		$emailError = 'You entered an invalid email address.';
		$hasError = true;
	} else {
		$email = trim($_POST['email']);
	}

	if(trim($_POST['comments']) === '') {
		$commentError = 'Please enter a message.';
		$hasError = true;
	} else {
		if(function_exists('stripslashes')) {
			$comments = stripslashes(trim($_POST['comments']));
		} else {
			$comments = trim($_POST['comments']);
		}
	}

	if(!isset($hasError)) {
		$emailTo = get_option('admin_email');
		if (!isset($emailTo) || ($emailTo == '') ){
			$emailTo = $_POST['toemail'];
		}
		$subject = '[PHP Snippets] From '.$name;
		$body = "Name: $name \n\nEmail: $email \n\nComments: $comments";
		$headers = 'From: '.$name.' <'.$emailTo.'>' . "\r\n" . 'Reply-To: ' . $email;

		mail($emailTo, $subject, $body, $headers);
		$emailSent = true;
	}

} ?>
<?php get_header(); ?>
<div id="content" class="site-content container">
<div id="primary" class="content-area col-sm-12 col-md-10">
	<div id="left-box">

	<div class="box-signup">
              <h2>Stay in touch</h2>
              <p style="color: #fff;margin-bottom: 18px;min-height: 42px;font-size:16px;">
                Sign up to receive our latest updates and we'll reward you with 10% off all business with us.              </p>
              <div class="signup-form">
    <form action="//vivodigital.us8.list-manage.com/subscribe/post-json?u=a0a970266516e9ecdbc44175b&amp;id=314563cc82" method="post" id="signup-form" class="signup-form__form" name="signup-form">
        <input type="text" name="FNAME" id="name" class="form__input" placeholder="Your name" required=""> 
        <input type="email" name="EMAIL" id="email" class="form__input" placeholder="Your email" required=""> 
        <button type="submit" class="form__submit btn">Subscribe</button>
        <div class="form__message"></div>
    </form>
</div>
 </div>
	
			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			<div <?php post_class() ?> id="post-<?php the_ID(); ?>">
				<h1 class="entry-title"><?php the_title(); ?></h1>
					<div class="entry-content">
						<?php if(isset($emailSent) && $emailSent == true) { ?>
							<div class="thanks">
								<p>Thanks, your email was sent successfully.</p>
							</div>
						<?php } else { ?>
							<?php the_content(); ?>
							<?php if(isset($hasError) || isset($captchaError)) { ?>
								<p class="error">Sorry, an error occured.<p>
							<?php } ?>

						<form action="<?php the_permalink(); ?>" id="contactForm" method="post">
							<ul class="contactform">
							<li style="margin:10px 0px;display: flex;">
								<label for="contactName">Name:</label>
								<input type="text" name="contactName" id="contactName" value="<?php if(isset($_POST['contactName'])) echo $_POST['contactName'];?>" class="required requiredField" />
								<?php if($nameError != '') { ?>
									<span class="error"><?=$nameError;?></span>
								<?php } ?>
							</li>

							<li style="margin:10px 0px;display: flex;">
								<label for="email">Email:</label>
								<input type="text" name="email" id="email" value="<?php if(isset($_POST['email']))  echo $_POST['email'];?>" class="required requiredField email" />
								<?php if($emailError != '') { ?>
									<span class="error"><?=$emailError;?></span>
								<?php } ?>
							</li>

							<li style="margin:10px 0px;display: flex;">
							<label for="commentsText">Message:</label>
								<textarea name="comments" id="commentsText" rows="10" cols="15" class="required requiredField"><?php if(isset($_POST['comments'])) { if(function_exists('stripslashes')) { echo stripslashes($_POST['comments']); } else { echo $_POST['comments']; } } ?></textarea>
								<?php if($commentError != '') { ?>
									<span class="error"><?=$commentError;?></span>
								<?php } ?>
							</li>

							<li style="margin:10px 0px;display: flex;">
								<label for="toemail">To:</label>
								<select name="toemail" size="1">
									<option value="huangxunliu@gmail.com">Number 1</option>
									<option value="huangxunliu@gmail.com">No.2</option>
									<option value="hayden.liuhx@gmail.com">No.3</option>
									
								</select>
							</li>





							<li style="margin:10px 0px;display: flex;">
								<input type="submit">Send email</input>
							</li>
						</ul>
						<input type="hidden" name="submitted" id="submitted" value="true" />
					</form>
				<?php } ?>
				</div><!-- .entry-content -->
			</div><!-- .post -->

				<?php endwhile; endif; ?>
		</div><!-- #content -->
	
</div>
<?php get_sidebar(); ?>
</div><!-- #container -->
<?php get_footer(); ?>