<?php


function loginUser($user)
{
    $_SESSION['firstName'] = $user['firstName'];
    $_SESSION['lastName'] = $user['lastName'];
    $_SESSION['password'] = $user['password'];
    $_SESSION['phoneNumber'] = $user['phoneNumber'];
    $_SESSION['email'] = $user['email'];
    $_SESSION['user_id'] = $user['id'];
    $_SESSION['message'] = 'You Have now Registered successfully Please Sign in';
    $_SESSION['type'] = 'success';

    if ($user['login']) {
        header('location: ' . BASE_URL . '/taskWeek3/index.php');
    } else {
        header('location: ' . BASE_URL .'/taskWeek2/login.php');

    }
    exit();
}