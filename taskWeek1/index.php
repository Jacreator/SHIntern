<?php include 'solution.php'; ?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>

  <body class="bg-light" data-new-gr-c-s-check-loaded="14.1015.0" data-gr-ext-installed="">

  <div class="container">
      <div class="py-5 text-center">
          <h2>SH Intern</h2>
          <p class="lead">This is a simple task for week One of Side hustle internship. To make a user defined range of numbers function from two input gotten from the user and Add them up with a user created sum function  </p>
      </div>

      <div class="row">
          <div class="col-md order-md-1">
              <h4 class="mb-3 text-center">Input Area</h4>
              <form class="needs-validation" novalidate="" method="post">
                  <div class="row">
                      <div class="col-md-6 mb-3">
                          <label for="start">Start Number</label>
                          <input type="number" min="0" name="start" class="form-control" id="start" value="<?php if (isset($oldStartInput)){ echo $oldStartInput; } else { null; } ?>" required>
                          <span>
                              <?php if (isset($reportStart)){ ?>
                                  <div class="alert alert-danger mt-2" role="alert">
                                      <?php echo $reportStart; ?>
                                  </div>
                              <?php } ?>
                          </span>
                      </div>
                      <div class="col-md-6 mb-3">
                          <label for="end">End Number</label>
                          <input type="number" min="0" name="end" class="form-control" id="end" value="<?php if (isset($oldEndInput)){ echo $oldEndInput; } else { null; } ?>" required>
                          <span>
                              <?php if (isset($reportEnd)){ ?>
                                  <div class="alert alert-danger mt-2" role="alert">
                                      <?php echo $reportEnd; ?>
                                  </div>
                              <?php } ?>
                          </span>
                      </div>
                      <button class="btn btn-primary btn-lg btn-block" type="submit" name="check">Check Solution</button>
                  </div>
              </form>
                  <hr class="mb-4">
                  <h4 class="mb-3 text-center">Result Area</h4>
                  <div class="row">
<!--                      array result-->
                      <div class="col-md-6">
                          <h5 class="mb-3 text-center">Array Result</h5>
                          <hr class="mb-4">
                          <div class="d-block my-3 ">
                              <?php if (isset($result)){ ?>
                                <pre>
                                    <?php print_r($result); ?>
                                </pre>
                                <?php } else {?>
                                    <p class="text-center">No result</p>
                                <?php } ?>
                          </div>
                      </div>
<!--                      sum result-->
                      <div class="col-md-6">
                          <h5 class="mb-3 text-center">Sum Result</h5>
                          <hr class="mb-4">
                          <div class="d-block my-3">
                              <?php
                              if (isset($sumResult)){ ?>
                                  <p class="lead">The sum of the array generated is: <span style="color: green"><?php echo $sumResult?></span></p>
                              <?php } else {?>
                                  <p class="text-center">No result</p>
                              <?php } ?>
                          </div>
                      </div>
                  </div>
                  <hr class="mb-4">

          </div>
      </div>


  </div>

  <!-- Bootstrap core JavaScript
  ================================================== -->
  <!-- Placed at the end of the document so the pages load faster -->
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
  <script src="../../assets/js/vendor/popper.min.js"></script>
  <script src="../../dist/js/bootstrap.min.js"></script>
  <script src="../../assets/js/vendor/holder.min.js"></script>



  </body>
</html>
