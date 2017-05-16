<?php
	$from_email = 'webmaster@example.com';
	$to_email = 'wooohooog58@gmail.com';

function process_form(){
	$first_name = $_POST['first_name'];
	$second_name = $_POST['second_name'];
	$email = $_POST['email'];
	$subject = $_POST['subject'];
	$message = $_POST['message'];
	$mail_content = 'first_name:'.$first_name.'\r\n'.
					'second_name:'.$second_name.'\r\n'.
					'Message from:'.$email.'\r\n'.
					'subject:'.$subject.'\r\n'.
					'message:'.$message.'\r\n';
	$headers = 'From: '.$from_email. "\r\n";
	$res = mail($to_email, $subject, $mail_content,$headers);
}

if(isset($_POST['action'])){
	if($_POST['action'] == 'send_form'){
		process_form();
	}
}




 ?>


<section id="contact_form">
<div class="container">
	<div class="row row_form_1">
	<div class="form_header_block">
		<p class="form_header" id="get_in_touch">Get in touch</p>
		<div class="for_under">
			<div class="under_border_form"></div>
		</div>
		<p class="form_subtitle">Have any questions? Get in touch. We'd love to hear you.</p>
	</div>
	</div>
	
	<div class="row">
		<div class="form_welcome">
			<form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST">
				<input type="hidden" name="action" value="send_form">
				<div class="col-md-6 col-sm-6 col-lg-6 col-xs-6 fst_name"><input type="text" name="first_name" id="first_name" placeholder="First Name*" required></div>
				<div class="col-md-6 col-sm-6 col-lg-6 col-xs-6 scnd_name"><input type="text" name="second_name" id="second_name" placeholder="Second Name*" required></div>
				<div class="col-md-12 col-sm-12 email_form"><input type="text" name="email" id="email_adress_form" placeholder="Email Address*" required></div>
				<div class="col-md-12 col-sm-12 subject_form"><input type="text" name="subject" id="subject" placeholder="Subject*" required></div>
				<div class="col-md-12 col-sm-12 message_form"><textarea name="message" id="message" placeholder="Message*" required></textarea></div>
				<div class="col-md-12 col-sm-12 submit_form"><input type="submit" value="Submit"></div>
		</form>
		</div>
	</div>
	</div>
</section>