<?php
require_once"database/db.php";
$obj = new db();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>Add Employee Information</title>
  <?php
  	require_once"assets/head.php";
  ?>
</head>

<body class="fixed-nav sticky-footer bg-dark" id="page-top">
  <?php
  	require_once"assets/header.php";
  ?>
  <div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="index.php">Employees</a>
        </li>
        <li class="breadcrumb-item active">Add New</li>
      </ol>
      <!-- Example DataTables Card-->
      <div class="card">
        <div class="row">
          <div class="col-md-12">
            <div class="card-header">
              <i class="fa fa-table"></i> Employee Information</div>
              <div class="card-body">
                <!-- form -->
                  <div class="form">
                    <form method="post" id="emp-form" role="form" action="form_action.php">
                      <?php
                      if(@$_SESSION['message'] != ''){ ?>
                        <div class="form-group">
                          <span class="alert alert-info">
                            <?php 
                              echo $_SESSION['message'];
                              $_SESSION['message'] = '';
                            ?>
                          </span>
                        </div>
                      <?php } ?>
                      <div class="row">
                        <div class="col-md-6">
                           <div class="form-group">
                              <label for="inputName" class="label-control">Name</label>
                              <input type="text" name="name" class="form-control" required placeholder="name" id="inputName">
                              <div class="help-block with-errors"></div>
                            </div>
                        </div>
                        <div class="col-md-6">
                           <div class="form-group">
                            <label>Province</label>
                            <input type="text" name="province" required class="form-control" placeholder="Yukon">
                            <div class="help-block with-errors"></div>
                          </div>
                        </div>
                      </div> <!-- /row -->
                     
                      <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                            <label>Date of Birth</label>
                            <input type="date" name="dob" class="form-control" required>
                            <div class="help-block with-errors"></div>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group">
                            <label>Address</label>
                            <textarea class="form-control" name="address" placeholder="address..." required></textarea>
                          </div>
                        </div>
                      </div><!-- row -->
                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-group">
                            <label>city</label>
                            <input type="text" name="city" class="form-control" placeholder="whitehorse" required>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group">
                            <label>Postal Code</label>
                            <input type="text" name="postal_code" required placeholder="postal code" class="form-control" minlength="5" maxlength="7">
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-group">
                            <label>Email Address</label>
                            <input type="email" name="email" value="" placeholder="email" class="form-control" required>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group">
                            <label>Website Link</label>
                            <input type="url" name="website" placeholder="http://www.example.com" class="form-control" required>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-group">
                            <label>Joining Date</label>
                            <input type="date" name="joining-date" class="form-control" required>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group">
                            <label>Annual Basic Pay</label>
                              <div class="input-group">
                                <span class="input-group-addon">$</span>
                                <input type="number" name="annual_pay" pattern="[0-9]{10}" class="form-control" required>
                              </div>
                            </div>
                        </div>
                      </div><!-- /row -->
                      <div class="row">
                        <div class="col-md-6">
                         <div class="form-group">
                            <label>Gender</label>
                            <div class="checkbox">
                              <label class="radio-inline">
                                <input type="radio" name="gender" value="male">Male
                              </label>
                              <label class="radio-inline">
                                <input type="radio" name="gender" value="female">Female
                              </label>
                            </div>
                          </div> 
                        </div>
                      </div><!-- row -->
                      
                      <input type="submit" name="submit" class="btn btn-info">  
                    </form>
                  </div>
                <!-- /form -->
              </div>
              <br>
              <br>
            <div class="card-footer small text-muted">click here to </div>
          </div>
          </div>
        </div>
    </div>
    <!-- /.container-fluid-->

    <?php
      require_once"assets/footer.php";
    ?>
  </div>
</body>

</html>
