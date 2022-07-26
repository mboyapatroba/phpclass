<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>form validation</title>
</head>
<body>
<h2>Registration form</h2>
<form action="">
    <label for="username">username</label>
    <input type="text"id="username"name="uname">
    <br>
    <label for="email">email</label>
    <input type="email"id="email"name="email">
    <br>
    <label for="website">website</label>
    <input type="text"id="website"name="website">
    <br>
    <label for="comment">comment</label>
    <textarea name="comment" id="comment" cols="40" rows="5"></textarea><br>
    Gender <br>
    <label for="male">Male</label>
    <input type="radio"id="male"name="gender">
    <label for="female">Female</label>
    <input type="radio"id="female"name="gender">
    <label for="others">Others</label>
    <input type="radio"id="others"name="gender">
    <label for="registration"></label>
    <input type="submit"value="submit">
</form>

</body>
</html>
