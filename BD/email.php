<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><!-- InstanceBegin template="/Templates/Stardust.dwt" codeOutsideHTMLIsLocked="false" -->
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<META name="description" content="Official site of Bhurakhia Dada, INDIA - dedicated to Bhurakhia Dada" />
<meta http-equiv="keywords" content="Bhurakhia Dada, Bhurakhia, Bhurakhiadada, Indian Temple, Indain culture, Indian tradition, Indian phliosophy, Indian mythology, Arrtis and poojas, pujas, festivals, Shlokas, Mantras, Upasana, Hanuman" />
<META NAME="Robots" CONTENT="all" />
<meta http-equiv="content-type" content="text/html; charset=ISO-8859-1" />
<META http-equiv="Pragma" content="no-cache" />
<META http-equiv="Pragmas" content="no-cache" />
<META HTTP-EQUIV="CACHE-CONTROL" CONTENT="NO-CACHE" />
<META HTTP-EQUIV="EXPIRES" CONTENT="0" />
<!-- InstanceBeginEditable name="doctitle" -->
<title>Official web-site of Bhurakhia Hanuman Dada Temple, INDIA</title>
<!-- InstanceEndEditable --><!-- InstanceBeginEditable name="head" -->
<script type="text/javascript">

function chk_msg(which){
	a='';
	if (which.name.value=="")a=true;
	else if (!(/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(which.email.value)))a=false;
	else if (which.messg.value!="")return true;

	if(true===a)alert("Please provide your Name");
	else if(false===a)alert("Please enter your EmailId to reply to...");
	else alert("Please provide your valuable Opinion(s)...");

	return false;
}

</script>
<!-- InstanceEndEditable -->
<meta name="keywords" content="" />
<meta name="description" content="" />
<link href="css/css.css" rel="stylesheet" type="text/css" />
<!-- InstanceParam name="MainBody02" type="boolean" value="false" --><!-- InstanceParam name="PageTitle" type="boolean" value="true" --><!-- InstanceParam name="classHome" type="text" value="" --><!-- InstanceParam name="classTrust" type="text" value="" --><!-- InstanceParam name="classHistory" type="text" value="" --><!-- InstanceParam name="Marriage" type="boolean" value="false" -->
</head>
<body>
<!-- start header -->
<div id="header-bg">
		<div id="header">
				<div id="logo">
						<h1><a href="index.htm">Bhurakhia Dada</a></h1>
						<h2>Jai Bhurakhia Hanuman Dada</h2>
				</div>
				<div id="menu">
						<ul>
								<li class=""><a href="index.htm"> home</a></li>
								<li class=""><a href="trust.htm">trust</a></li>
								<li class=""><a href="history.htm">history</a></li>
								<li ><a href="mailto:jmshah123@gmail.com">contact </a></li>
						</ul>
				</div>
		</div>
</div>
<!-- end header -->
<!-- start page -->
<div id="page">
		<!-- start content -->
		<div id="content">
				<div class="post"><!-- InstanceBeginEditable name="PageTitle" -->	Feedback / opinion<!-- InstanceEndEditable -->
						<div class="entry">
								<div class="meta"><!-- InstanceBeginEditable name="MainBody01" -->
								<form action="email.php" method="get" target="middle" id="formname" onsubmit="return chk_msg(this)">
										<table cellpadding="5">
												<tr>
														<td>&nbsp;</td>
														<?php 
															$email_to = "jmshah123@gmail.com"; 
															$mailsubject = "An email from BhurakhiaDada's Website"; 
															if (isset($name) && isset($email) && (mail($email_to, $mailsubject, "<html><body>\n \n  From : ".$name."\n Email Id : <a href=\"".$email."\">".$email."</a>\n Message : ".$messg."</body></html>", "")) )
																print("<td>We have received your opinion(s).<br> You will receive a reply as soon as possible.<br>We will be pleased to hear more from you for this website of Bhurakhiadada.</td>");
															elseif (isset($name) && isset ($email))
																print("<td>There was an error while sending your opinion(s)... Please email the <a href='jmshah123@gmail.com'>webmaster at jmshah123@gmail.com </a></td>");
															else {
																$name="";
																$email="@.";
																print("<td>Please provide your opinion(s) to improve this website</td>");
															}
														?>
												</tr>
												<tr>
														<td><label for="name">Name:</label></td>
														<td><input class="text" id="name" value="<?php echo $name ;?>" size="40" name="name" /></td>
												</tr>
												<tr>
														<td><label for="email">Email Id:</label></td>
														<td><input class="text" name="email" id="email" value="<?php echo $email ;?>" size="40" /></td>
												</tr>
												<tr>
														<td valign="top"><label for="messg">Message:</label></td>
														<td><textarea name="messg" cols="40" rows="9" id="messg"></textarea></td>
												</tr>
												<tr>
														<td>&nbsp;</td>
														<td><input class="button" id="Submit" type="submit" value="Submit" name="Submit" />
																<input class="button" type="reset" value="Reset" name="Reset" /></td>
												</tr>
										</table>
								</form>
								<!-- InstanceEndEditable --></div>
						</div>
				</div>
				</div>
		<!-- end content -->
		<!-- start sidebar -->
		<div id="sidebar">
				<ul>
						<li>
								<h2>Rites & Rituals</h2>
								<ul>
										<li><a href="marriage.htm">Marriage</a></li>
										<li><a href="child_birth.htm">Child Birth</a></li>
										<li><a href="niece.htm">Niece (Bhanej)</a></li>
										<li><a href="kali_chaturdashi.htm">Kali Chaturdashi</a></li>
								</ul>
						<li>
								<h2>The Temple</h2>
								<ul>
										<li><a href="photo_gallery.htm">Photo Gallery</a></li>
										<li><a href="#donate.htm">Donate to Temple</a></li>
										<li><a href="#plan.htm">Plan (what lies where)</a></li>
										<li><a href="#email.php">Feedback</a></li>
								</ul>
						</li>
						</li>
				</ul>
		</div>
		<!-- end sidebar -->
		<div style="clear: both;">Jai Bhurakhia Hanuman Dada</div>
</div>
<!-- end page -->
<!-- start footer -->
<div id="footer">
		<p id="legal">Bhurakhia Hanuman</p>
</div>
<!-- end footer --><script type="text/javascript">
var gaJsHost = (("https:" == document.location.protocol) ? "https://ssl." : "http://www.");
document.write(unescape("%3Cscript src='" + gaJsHost + "google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E"));
</script>
<script type="text/javascript">
try {
var pageTracker = _gat._getTracker("UA-3664370-3");
pageTracker._trackPageview();
} catch(err) {}</script></body>
<!-- InstanceEnd --></html>