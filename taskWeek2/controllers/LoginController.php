<?php
include ROOT_PATH . '/taskWeek2/helpers/validateUser.php';

$email = '';

if (isset($_POST['login_btn'])) {

    $errors = validateLogin($_POST);
    $_POST = test_input($_POST);

    if (count($errors) === 0) {
        $user =  $_SESSION['email'];

        if ($user == $_POST['email'] && password_verify($_POST['password'], $_SESSION['password'])) {
            header('location: ' . BASE_URL .'/taskWeek1/index.php');
        } else {
            array_push($errors, 'Wrong credentials');
        }
    }

    $email = $_POST['email'];
    $password = $_POST['password'];
}
