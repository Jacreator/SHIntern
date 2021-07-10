<?php
include('../path.php');
include ROOT_PATH. '/taskWeek3/Classes/database.php';
include ROOT_PATH . '/taskWeek3/Controllers/TaskController.php';
if (isset($_SESSION['user_id'])){
    $tasks = selectAll("task", ['user_id' => $_SESSION['user_id']]);
}

?>

<!DOCTYPE html>
<html dir="ltr" lang="en-US">
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="author" content="Jacreator" />
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,400i,700|Poppins:300,400,500,600,700|PT+Serif:400,400i&display=swap" rel="stylesheet" type="text/css" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <!-- Required meta tags -->
    <meta charset="utf-8">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
          integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
          crossorigin="anonymous">
</head>
<body class="bg-light" data-new-gr-c-s-check-loaded="14.1015.0" data-gr-ext-installed="">
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">

    <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav">
            <li class="nav-item active">
                <a class="nav-link" href="../LogoutHelper.php">Logout <span class="sr-only">(current)</span></a>
            </li>

        </ul>
    </div>
</nav>
<div id="wrapper" class="clearfix">
    <div class="col-md-12 hed">
        <div class="py-5 text-center">
            <h2>SH Intern</h2>
            <p class="lead">This is a simple task for week three of Side hustle internship. To make a user login,
                registration, and some basic validation functionalities and make a TMS(task management system).
                <span style="color: red">
                    <?php if (isset($_SESSION['user_id'])) { ?>
                        <section id="content">
                            <div class="content-wrap">
                                <div class="container clearfix">
                                    <div class="row">
                                        <div class="col-md-12" id="hide">
                                            <form  class="row form" method="post">
                                                <div class="col-md-12 col-sm-12 form-group">
                                                    <label for="register-form-name">Task Title:</label>
                                                    <input type="text" name="name" class="form-control" required>
                                                </div>
                                                <div class="col-12 form-group">
                                                    <input type="submit" class="btn btn-dark" name="add" value="Add">
                                                </div>
                                            </form>
                                        </div>
                                        <div class="col-md-12 p-0">
                                            <table class="table table-dark">
                                                <thead>
                                                <tr>
                                                    <th scope="col">S/N</th>
                                                    <th scope="col">Name</th>
                                                    <th scope="col" colspan="2">Action</th>
                                                </tr>
                                                </thead>
                                                <tbody>

                                                <?php  foreach ($tasks as $key => $task){ ?>
                                                    <tr>
                                                        <td><?php echo $key+1; ?></td>
                                                        <td><?php echo $task['title']; ?></td>
                                                        <td>
                                                            <a href="edit.php?id=<?php echo $task['id']; ?>" type="button" class="btn btn-primary btn-sm">Edit</a>
                                                        </td>
                                                        <td>
                                                            <a href="?del_id=<?php echo $task['id']?>" type="button" class="btn btn-danger btn-sm">Delete</a>
                                                        </td>
                                                    </tr>
                                                <?php } ?>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                    <?php } else { ?>
                        Please Start from <a href="<?php echo BASE_URL .  '/taskWeek2/index.php';?>">here</a> to get the seamless execution of the task</span> </p>
                    <?php }?>
        </div>
    </div>

</div>
<!-- Placed at the end of the document so the pages load faster -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
<script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
<script src="../../assets/js/vendor/popper.min.js"></script>
<script src="../../dist/js/bootstrap.min.js"></script>
<script src="../../assets/js/vendor/holder.min.js"></script>
</body>
</html>
