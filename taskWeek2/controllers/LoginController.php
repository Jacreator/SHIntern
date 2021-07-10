<?php
include ROOT_PATH . '/taskWeek2/helpers/validateUser.php';
include ROOT_PATH . '/taskWeek2/helpers/LoginHelper.php';
include ROOT_PATH. '/taskWeek3/Classes/database.php';

$email = '';

if (isset($_POST['login_btn'])) {

    $errors = validateLogin($_POST);
    $_POST = test_input($_POST);

    if (count($errors) === 0) {
        $userDetail = selectOne('users', ['email' => $_POST['email']]);
        $userEmail = $userDetail['email'];

        if ($userEmail === $_POST['email'] && password_verify($_POST['password'], $userDetail['password'])) {
            $userDetail['login'] = 'login';
            loginUser($userDetail);
        } else {
            array_push($errors, 'Wrong credentials');
        }
    }


    $email = $_POST['email'];
    $password = $_POST['password'];
}
