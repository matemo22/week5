<!DOCTYPE html>
<html>
<head>
	<title>Mailer Test</title>
</head>
<body>
	<form action="send_email" method="post">
		{{ csrf_field() }}
		<label for="email">Send To : </label><br>
		<input type="email" name="email" id="email">
		<br><label for="content">Content : </label><br>
		<textarea name="content" rows="5" id="content"></textarea>
		<button type="submit">Submit</button>
	</form>
</body>
</html>