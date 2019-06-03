<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Login</title> 
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/style.css">
  <link rel="shortcut icon" href="images/favicon.png" />
</head>

<body>
  <div class="container-scroller">
    <div class="container-fluid page-body-wrapper">
      <div class="row">
        <div class="content-wrapper full-page-wrapper d-flex align-items-center auth login-full-bg">
          <div class="row w-100">
            <div class="col-lg-4 mx-auto">
              <div class="auth-form-dark text-left p-5">
                <h2>Login</h2>
                <?php if($this->session->flashdata('fail')):?>
                  <div class="alert alert-danger">
                  <?php echo $this->session->flashdata('fail'); ?>
                  </div>
                <?php endif;?>
                <h2 class="font-weight-light text-center">Welcome</h2>
                  <form method="post" action="<?php echo base_url();?>students/login">
                    <div class="form-group">
                      <label for="username">Enter Your ID Number</label>
                      <input type="text" class="form-control"  placeholder="Student id" name="student_id">
                      <i class="mdi mdi-account"></i>
                    </div>
                    <div class="form-group">
                      <label for="password">Password</label>
                      <input type="password" class="form-control" name="password" placeholder="Password">
                      <i class="mdi mdi-eye"></i>
                    </div>
                    <div class="mt-5">
                      <button type="submit" name="submit"class="btn btn-default">Login</button>
                    </div>
                    <div class="mt-3 text-center">
                      <a href="#" class="auth-link text-white">Forgot password?</a>
                    </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  </body>
</html>
