<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Forms</title>
</head>
<body>
<h2>Student Registration Form</h2>
<form action="sendto.php"method="get">
<label for="firstname">firstname</label>
<input type="text"id="firstname"name="fname">
<br>
<label for="lastname"id=>lastname</label>
<input type="text"id="lastname"name="lname">
<br>
<label for="email">email</label>
<input type="text"id="email"name="email">
<br>
<label for="dob">Date of Birth</label>
<input type="date"id="dob"name="dob">
<br>
<input type="submit"value="Register!!!">
</form>
</body>
</html>
