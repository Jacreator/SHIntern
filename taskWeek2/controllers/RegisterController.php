<?php

include  ROOT_PATH . '/taskWeek2/helpers/validateUser.php';
include ROOT_PATH . '/taskWeek2/helpers/LoginHelper.php';
include ROOT_PATH . '/taskWeek3/Classes/Database.php';

$errors = array();
$id = '';
$firstName = '';
$lastName = '';
$phoneNumber = '';
$email = '';
$password = '';
$passwordConf = '';

if (isset($_POST['register_btn'])) {

    $errors = validateUser($_POST);
    $_POST = test_input($_POST);

    if (count($errors) === 0) {
        unset($_POST['register_btn'], $_POST['passwordConf']);
        $_POST['password'] = password_hash($_POST['password'], PASSWORD_DEFAULT);
        $a = create('users',[
            'firstName' => $_POST['firstName'],
            'lastName' => $_POST['lastName'],
            'email'=> $_POST['email'],
            'password' => $_POST['password'],
            'phoneNumber' => $_POST['phoneNumber'],
        ]);
        if($a){
            $_POST['id'] = $a;
            loginUser($_POST);
        }

    } else {
        $firstName = $_POST['firstName'];
        $lastName = $_POST['lastName'];
        $phoneNumber = $_POST['phoneNumber'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $passwordConf = $_POST['passwordConf'];
    }
}