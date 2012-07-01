<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<!--  This notice must remain in place!
 _______________________________________________________________
|                                                               |
|     AUTHOR  : Jeeremie { http://web-kreation.com }            |
|DESCRIPTION  : LightForm - Ajax Contact Form                   |
|   DOWNLOAD  : http://web-kreation.com/blog/?p=71              |
|    VERSION  : 1.1                                             |
|       DATE  : 2008.02.03                                      |
|      EMAIL  : info@web-kreation.com                           |
|    CREDITS  : Credits go to Moo Floor (www.moo.floor.ch) for  |
|               their fabulous FormCheck2 and to Badboy         |
|               (www.badboy.ro) his nice looking web form       |
|_______________________________________________________________|
-->

<?php

//========
//LICENSE
//========

//The CSS, XHTML, PHP and design is released under Creative Commons Attribution v2.5:
//http://creativecommons.org/licenses/by/2.5/

//Use of this contact form is free of charge but the copyright notes in the footer must remain intact.
//I would appreciate if you send me the URI of your site if you use LightForm.

//FormCheck (http://moo.floor.ch/?p=18) is released under the MIT license:
//http://www.opensource.org/licenses/mit-license.php

//NiceForms (http://www.badboy.ro/articles/2005-07-23/niceforms_preview/) is released under no specific license. You are free to use and modify but you must provide credits.

//This said, let's see how to use this contact form:


//=============
//INSTALLATION
//=============

//Installation is straight forward:

//1. Download and unzip the file
//2. Copy all the files to your root directory


//==============
//CONFIGURATION
//==============

//IMPORTANT!!
//Put in your email address below:
$to = 'yourname@domain.com';


//User info (DO NOT EDIT!)
$name = stripslashes($_POST['name']); //sender's name
$email = stripslashes($_POST['email']); //sender's email
$website = stripslashes($_POST['website']); //sender's website

//The subject
$subject  = "[LightFormX Contact Form] "; //The default subject. Will appear by default in all messages. Change this if you want.
$subject .= stripslashes($_POST['subject']); // the subject


//The message you will receive in your mailbox
//Each parts are commented to help you understand what it does exaclty.
//YOU DON'T NEED TO EDIT IT BELOW BUT IF YOU DO, DO IT WITH CAUTION!
$msg  = "From : $name \r\n";  //add sender's name to the message
$msg .= "e-Mail : $email \r\n";  //add sender's email to the message
$msg .= "Website : $website \r\n"; //add sender's website to the message
$msg .= "Subject : $subject \r\n\n"; //add subject to the message (optional! It will be displayed in the header anyway)
$msg .= "---Message--- \r\n".stripslashes($_POST['message'])."\r\n\n";  //the message itself

//Extras: User info (Optional!)
//Delete this part if you don't need it
//Display user information such as Ip address and browsers information...
$msg .= "---User information--- \r\n"; //Title
$msg .= "User IP : ".$_SERVER["REMOTE_ADDR"]."\r\n"; //Sender's IP
$msg .= "Browser info : ".$_SERVER["HTTP_USER_AGENT"]."\r\n"; //User agent
$msg .= "User come from : ".$_SERVER["HTTP_REFERER"]; //Referrer
// END Extras

?>

<head>
<title>:::LightForm::: Ajax Contact form</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="description" content="Ajax Contact form using CheckForm2 and NiceForms." />
<meta name="keywords" content="php, contact form, Ajax, mootools, checkform2, niceforms, Moo Floor, class, javascript, spamcheck, badboy.ro" />
<meta name="author" content="Jeremie Tisseau" />

<link rel="stylesheet" href="css/main.css" type="text/css" media="screen" />

<script type="text/javascript" src="js/mootools.js"></script>

<!-- Formcheck2 / Moo.Floor.ch -->
<!-- http://moo.floor.ch/?p=18 -->
<script type="text/javascript" src="js/formcheck.js"></script>
<script type="text/javascript">
	window.addEvent('domready', function(){check = new FormCheck('third', {
		display : {
			fadeDuration : 500,
			errorsLocation : 1,
			indicateErrors : 1,
			showErrors : 1
		}
	})});
</script>

<!-- NiceForms / BadBoy.ro -->
<!-- http://www.badboy.ro/articles/2005-07-23/niceforms_preview/ -->
<script type="text/javascript" src="js/niceforms.js"></script>

</style>

</head>
<body>
<!-- The contact form starts here-->
<?php
   if ($_SERVER['REQUEST_METHOD'] != 'POST'){
      $self = $_SERVER['PHP_SELF'];
?>

    <!-- Start HTML form -->
   	<form name="form" method="post" id="third" action="<?php echo $self;?>"  class="niceform">
		<h1>:::LightForm::: Free Ajax/PHP Contact Form</h1>
        <!-- Name -->
		<label for="name"><strong><span class="blue">*</span> Name : </strong></label>
			<input id="name" name="name" type="text" class="validate['required','length[3,-1]','nodigit']" size="20" />

		<!-- Email -->
		<label for="email"><strong><span class="blue">*</span> Email : </strong></label>
			<input id="email" name="email" type="text" class="validate['required','length[5,-1]','email']" size="20" />

		<!-- Website -->
		<label for="site">Website : </label>
			<input id="website" name="website" type="text" class="validate['url']" size="20" />

		<!-- Subject -->
	    <label for="subject"><strong><span class="blue">*</span> Subject : </strong></label>
			<input id="subject" name="subject" type="text" class="validate['required']" size="20" />

		<!-- Message -->
		<label for="msg"><strong><span class="blue">*</span> Your message : </strong></label><br />
			<textarea id="message" name="message" type="text" class="validate['required']" rows="10" cols="30"></textarea>

		<!-- Spam Check -->
	    <label for="spamcheck"><span class="blue">*</span> <acronym  title="[ Spam prevention ]"><strong>Are you human?</acronym> : <span class="blue">2 + 3 = ???</span></strong></label>
			<input id="spamcheck" name="spamcheck" type="text" size="5" class="validate['required','number','spamcheck']" />

		<br /><br />
		<input type="submit" class="buttonSubmit" value="Send it!" />

	    <!-- Niceforms: mouse over effect -->
		<!-- Do not remove the line below -->
		<div id="stylesheetTest"></div>

	</form>

     <!-- Download -->
	<!-- You can delete this! -->
	<div class="dwnld">
    	<a href="http://web-kreation.com/?dl_id=8" title="Download!">Download LightForm! &raquo;</a>
	</div> <!-- / Download -->


	<!-- Footer -->
	<!-- If you would like to support us, keep the footer intact. Many thanks! -->
	<div class="footer">
    	<p>Design by <a href="http://web-kreation.com" title="Web-Kreation Home">Web-kreation</a> - Ajax Form validation (<a href="http://moo.floor.ch/?p=18" target="_blank" title="Moo Floor">FormCheck2</a>) by <a href="http://moo.floor.ch/" target="_blank" title="Moo Floor">Moo Floor</a> - This form uses <a href="http://www.badboy.ro/articles/2005-07-23/niceforms_preview/" target="_blank" title="NiceForms">NiceForms</a> (<a href="http://www.badboy.ro/" target="_blank" title="BadBoy">BadBoy.ro</a>) to style text fields and textareas.</p>
		<p>&copy; Some Copyrights by their respective authors (if you are not sure visit authors' websites).</p>
	</div> <!-- / footer -->


<?php
	} else {
        error_reporting(0);

      	if  (mail($to, $subject, $msg, "From: $email\r\nReply-To: $email\r\nReturn-Path: $email\r\n"))

	  	//Message sent!
	  	//It the message that will be displayed when the user click the sumbit button
	  	//You can modify the text if you want
      	echo nl2br("
	   	<div class=\"MsgSent\">
			<h1>Congratulations!!</h1>
			<p>Thank you <b><?=$name;?></b>, your message is sent!<br /> I will get back to you as soon as possible.</p>
		</div>
	   ");

       	else

	    // Display error message if the message failed to send
        echo "
	   	<div class=\"MsgError\">
			<h1>Error!!</h1>
			<p>Sorry <b><?=$name;?></b>, your message failed to send. Try later!</p>
		</div>";
	}
?>

</body>
</html>



