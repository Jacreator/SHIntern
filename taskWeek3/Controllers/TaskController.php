<?php


// add
if (isset($_POST['add'])) {
    $name = $_POST['name'];
    $user_id = $_SESSION['user_id'];

    $date = date("Y-m-d h:i:s A");

    $a = create('task', ['user_id'=> $user_id, 'title'=>$name ]);

    if ($a == true) {
        header('location:index.php');
    }
}

// update
if (isset($_POST['update'])) {
    $name = $_POST['name'];
    $task_id = $_POST['task_id'];

    $a = update('task', $task_id, ['title' => $name]);
    if ($a) {
        header('location:index.php');
    }
}

// delete
if (isset($_GET['del_id'])){
    $id = $_GET['del_id'];

    $a = delete('task', $id);
    if ($a) {
        header('location:index.php');
    }
}

