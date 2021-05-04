<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prihlaseni</title>
</head>
<body>
<h1>Přihlášení</h1>
<form action="submit.php" method="post">
<label for="firstname">Firstname:</label>
<input type="text" name="firstname" id="firstname" placeholder="Firstname">
<label for="lastname">Lastname:</label>
<input type="text" name="lastname" id="lastname" placeholder="Lastname">
<br>
<label for="gender">Gender:</label></br>
<input type="radio" name="gender" id="Male" value="Male">
<label for="Male">Male</label>
</br>
<input type="radio" name="gender" id="Female" value="Female">
<label for="Female">Female</label>
</br>
<input type="radio" name="gender" id="Not Providing" value="Not Providing">
<label for="Not Providing">Not Providing</label>
</br>
<label for="email">Email</label>
<input type="email" name="email" id="email" placeholder="Email">
</br>
<label for="question">Security Question</label>
<select id="question" name="question">
<option value="hobby">Your most favorite hobby?</option>
<option value="hate">Who do you hate the most?</option>
<option value="namevictim">What was name of your first murder victim?</option>
<label for="answer">Answer:</label>
<input type="text" name="answer" id="answer" placeholder="Answer">
<input type="submit" value="login">
</form>
</body>
</html>