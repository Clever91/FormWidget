<?php
include_once __DIR__."/classes/Form.php";
include_once __DIR__."/classes/TextInput.php";
include_once __DIR__."/classes/PasswordInput.php";
include_once __DIR__."/classes/Button.php";

$form = new Form("/register", "post");
$form->addElement(new TextInput("name", "", "Enter Name"));
$form->addElement(new TextInput("login", "", "Enter Login"));
$form->addElement(new PasswordInput("password", "", "Enter Password"));
$form->addElement(new Button("submit", "Save", "submit"));

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