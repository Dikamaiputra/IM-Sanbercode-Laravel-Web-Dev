<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register</title>
</head>
<body>
    <h1>Buat Account Baru!</h1>

	<h2>Sign Up  Form</h2>
	<form action="{{ route('welcome') }}" method="post">
		@csrf
		<label for="firstName">First name:</label><br><br>
		<input type="text" name="firstName"><br><br>

		<label for="lastName">Last name:</label><br><br>
		<input type="text" name="lastName"><br><br>

		<label for="gender">Gender:</label><br><br>
		<input type="radio" name="gender">Male <br>
		<input type="radio" name="gender">Female <br>
		<input type="radio" name="gender">Other <br><br>

		<label for="nationality">Nationality:</label><br><br>
		<select name="nationality">
			<option value="indonesia">Indonesia</option>
			<option value="malaysia">Malaysia</option>
			<option value="singapur">Singapur</option>
		</select><br><br>

		<label for="language">Language Spoken:</label><br><br>
		<input type="checkbox" name="language">Bahasa Indonesia <br>
		<input type="checkbox" name="language">English <br>
		<input type="checkbox" name="language">Other <br><br>

		<label for="bio">Bio:</label><br><br>
		<textarea name="bio" rows="7" cols="25"></textarea><br>

		<input type="submit" value="Sign Up">
	</form>
</body>
</html>