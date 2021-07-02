<?php
include('../path.php');
include (ROOT_PATH . "/taskWeek2/controllers/LoginController.php");
?>

<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
              integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
              crossorigin="anonymous">

        <title>Login</title>
    </head>
    <body>
        <div class="container">
            <main class="form-signin mt-5">
                <div class="py-5 text-center">
                    <h2>SH Intern</h2>
                    <p class="lead">This is a simple task for week two of Side hustle internship. To make a user login,
                        registration, and some basic validation functionalities without the use of database. and store
                        the user details in session</p>
                </div>
                <?php if(isset($_SESSION['message'])): ?>
                    <div class="alert alert-<?php echo $_SESSION['type']; ?>">
                        <li><?php echo $_SESSION['message']; ?></li>
                        <?php
                        unset($_SESSION['message']);
                        unset($_SESSION['type']);
                        ?>
                    </div>
                <?php endif; ?>
                <form method="post">
                    <h5 class="h3 mb-3 fw-normal">Please sign in</h5>
                    <?php if (isset($errors)) {
                        include(ROOT_PATH . "/taskWeek2/helpers/formError.php");
                    }  ?>
                    <div class="form-floating">
                        <label for="floatingInput">Email address</label>
                        <input type="email" name="email" value="<?php echo $email;?>" class="form-control" id="floatingInput" placeholder="name@example.com">
                    </div>
                    <div class="form-floating">
                        <label for="floatingPassword">Password</label>
                        <input type="password" name="password" class="form-control" id="floatingPassword" placeholder="Password">
                    </div>

                    <div class="checkbox mb-3">
                        <label>
                            <input type="checkbox" value="remember-me"> Remember me
                        </label>
                    </div>
                    <div class="text-center">
                        <button class="w-50 btn btn-lg btn-primary" name="login_btn" type="submit">Sign in</button>
                        <p class="mt-5 mb-3 text-muted">© <?php echo date('Y') ?></p>
                    </div>

                </form>
            </main>
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
