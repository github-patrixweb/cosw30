<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Form Feedback</title>
</head>
<body>
<?php # Script 2.5 - handle_form.php #4
// Print the submitted information:
if ( !empty($_POST['first_name']) &&  !empty($_POST['last_name']) && !empty($_POST['age']) && !empty($_POST['email']) && !empty($_POST['gender']) ) {
	echo "<p>Thank you, <strong>{$_POST['first_name'] . $_POST[last_name]}</strong>, your message was sent:</p>
<pre>{$_POST['first_name']}  . $_POST['last_name']</pre>
<p>We will reply to you at <em>{$_POST['email']}</em>.</p>\n";
} else { // Missing form value.
	echo '<p>Please go back and fill out the form again.</p>';
}
?>
</body>
</html>