<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>Vyplněná data</h1>
    <?php
    $firstname = filter_input(INPUT_POST, 'firstname');
    $lastname = filter_input(INPUT_POST, 'lastname');
    $gender = filter_input(INPUT_POST, 'gender');
    $email = filter_input(INPUT_POST, 'email');
    $question = filter_input(INPUT_POST, 'question');
    $answer = filter_input(INPUT_POST, 'answer');
    echo "Your firstname is: $firstname";
    echo "</br>";
    echo "Your lastname is: $lastname";
    echo "</br>";
    echo "Your gender is $gender";
    echo "</br>";
    echo "Your email adress is $email";
    echo "</br>";
    echo "Your security question is '$question' with answer '$answer'";

    ?>
</body>
</html>