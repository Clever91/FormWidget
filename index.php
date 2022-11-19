<?php
include_once "autoloading.php";

$form = new Form("/register", "post");
$form->addElement(new TextInput("Fullname ", "name", "Enter Name"));
$form->addElement(new TextInput("Login", "login", "Enter Login"));
$form->addElement(new PasswordInput("Password", "password", "Enter Password"));
$form->addElement(new Select("Select gender", "gender", [
    new Option("", "Select gender"),
    new Option("male", "Male"),
    new Option("female", "Female"),
]));
$form->addElement(new Button("submit", "Save", "submit"));
$form->addElement(new Button("reset", "Reset", "reset"));

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Widget Form</title>
</head>

<body>
    <?php echo $form->render() ?>
</body>

</html>