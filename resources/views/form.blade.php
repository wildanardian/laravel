<!DOCTYPE html>
<html>
<head>
	<title>LARAVEL - SIGNUP</title>
</head>
<body>

	<h1>Buat Account Baru!</h1>

	<h3>Sign Up Form</h3>

    <form action="/selamat-datang" method="POST">
        @csrf
		<p>First Name:</p>
		<input type="text" name="first-name">
		
		<p>Last Name:</p>
		<input type="text" name="last-name">

		<p>Gender:</p>
		<input type="radio" name="gender" id="male" value="male">Male<br>
		<input type="radio" name="gender" id="female" value="female">Female<br>
		<input type="radio" name="gender" id="other" value="other">Other<br>

		<p>Nationality:</p>
		<select name='nationality'>
			<option>Indonesian</option>
			<option>Malaysian</option>
			<option>Singapore</option>
			<option>Australian</option>
		</select>

		<p>Language Spoken:</p>
		<input type="checkbox" name="bahasa" value="0">Bahasa Indonesia<br>
		<input type="checkbox" name="bahasa" value="1">English<br>
		<input type="checkbox" name="bahasa" value="2">Other<br>

		<p>Bio:</p>
		<textarea id="bioarea" name="bio" rows="10" cols="30"></textarea><br>

		<input type="submit" value="Sign Up">

	</form>

</body>
</html>