<!DOCTYPE html>
<html>
<head>
	<title>Form Pendaftaran</title>
</head>
<body>
<h1>Buat Account Baru!</h1>
<h3>Sign Up Form</h3>
<form method="POST" action="/welcome">
    @csrf
	<p>First Name:</p>
	<input type="text" name="fname">

	<p>Last Name:</p>
	<input type="text" name="lname">

	<p>Gender:</p>
	<input type="radio" name="gender" value="Male">Male<br>
	<input type="radio" name="gender" value="Female">Female<br>
	<input type="radio" name="gender" value="Other">Other<br>

	<p>Nationality</p>
	<select name="nationality">
		<option value="indonesian" selected>Indonesian</option>
		<option value="singaporean">Singaporean</option>
		<option value="malaysian">Malaysian</option>
		<option value="australian">Australian</option>
	</select>

	<p>Language Spoken</p>
	<input type="checkbox" name="language" value="bahasa">Bahasa indonesia<br>
	<input type="checkbox" name="language" value="english">English<br>
	<input type="checkbox" name="language" value="other">Other<br>

	<p>Bio:</p>
	<textarea name="bio" rows="10" cols="30"></textarea>

	<br><button type="submit" name="sign_up">Sign Up</button>
</form>
</body>
</html>