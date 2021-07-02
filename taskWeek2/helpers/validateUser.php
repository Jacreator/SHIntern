<?php

function test_input($datas) {
    foreach ($datas as $data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
    }

    return $datas;
}

function validateUser($user)
{
    $errors = array();

    if (empty($user['firstName'])) {
        array_push($errors, 'first name is required');
    }

    if (empty($user['lastName'])) {
        array_push($errors, 'last name is required');
    }

    if (empty($user['phoneNumber']) && $user['phoneNumber'] == 0) {
        array_push($errors, 'last name is required');
    }


    if (empty($user['email'])) {
        array_push($errors, 'Email is required');
    }

    if (empty($user['password'])) {
        array_push($errors, 'Password is required');
    }

    if ($user['passwordConf'] !== $user['password']) {
        array_push($errors, 'Password do not match');
    }


    return $errors;
}

function validateLogin($user)
{
    $errors = array();

    if (empty($user['email'])) {
        array_push($errors, 'email is required');
    }

    if (empty($user['password'])) {
        array_push($errors, 'Password is required');
    }

    return $errors;
}


