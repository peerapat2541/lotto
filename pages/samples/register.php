<?php
include '../../config/config.php';


if(!empty($_POST['txtUsername']) && !empty($_POST['txtPassword']) && !empty($_POST['txtName']) && !empty($_POST['txtdate']) && !empty($_POST['txtTel'])){	
  $rs = mysqli_query($conn,"SELECT * FROM users WHERE username ='".$_POST["txtUsername"]."'");
  $num = mysqli_num_rows($rs);
  if($num>0){
    echo '<script>alert("ชื่อผู้ใช้ซ้ำ");</script>';
  }else{
    $id = "";
    $name= addslashes($_POST["txtName"]);
    $users = addslashes($_POST["txtUsername"]);
    $pass = addslashes($_POST["txtPassword"]);
    $date = addslashes($_POST["txtdate"]);
    $phone = addslashes($_POST["txtTel"]);
    $imgnull ="";
    $status = "users";
    $sql = "INSERT INTO users VALUES('".$id."','".$name."','".$users."','".$pass."','".$date."','".$phone."','".$imgnull."','".$status."')";
      if (mysqli_query($conn,$sql)) {
        echo '<script>alert("เพิ่มข้อมูลแล้ว");</script>';
        header('refresh: 0.1;login.php');
      }else{
        echo '<script>alert("ไม่สามารถเพิ่มข้อมูลได้");</script>';
      }
  }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Star Admin Free Bootstrap Admin Dashboard Template</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="../../vendors/iconfonts/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="../../vendors/css/vendor.bundle.base.css">
  <link rel="stylesheet" href="../../vendors/css/vendor.bundle.addons.css">
  <!-- endinject -->
  <!-- plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="../../css/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="../../images/favicon.png" />
</head>

<body>
<form method="post">
  <div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper auth-page">
      <div class="content-wrapper d-flex align-items-center auth register-bg-1 theme-one">
        <div class="row w-100">
          <div class="col-lg-4 mx-auto">
            <h2 class="text-center mb-4">Register</h2>
            <div class="auto-form-wrapper">
              <!-- <form method="post" action="login.php"> -->
                <div class="form-group">
                  <div class="input-group">
                    <input type="text" class="form-control" placeholder="Username" id="txtUsername" name="txtUsername" required="">
                    <div class="input-group-append">
                      <span class="input-group-text">
                        <i class="mdi mdi-check-circle-outline"></i>
                      </span>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <div class="input-group">
                    <input type="password" class="form-control" placeholder="Password" id="txtPassword" name="txtPassword" required="">
                    <div class="input-group-append">
                      <span class="input-group-text">
                        <i class="mdi mdi-check-circle-outline"></i>
                      </span>
                    </div>
                  </div>
                </div>
                <!-- <div class="form-group">
                  <div class="input-group">
                    <input type="password" class="form-control" placeholder="Confirm-Password" id="txtConPassword" name="txtConPassword" required="">
                    <div class="input-group-append">
                      <span class="input-group-text">
                        <i class="mdi mdi-check-circle-outline"></i>
                      </span>
                    </div>
                  </div>
                </div> -->
                <div class="form-group">
                  <div class="input-group">
                    <input type="text" class="form-control" placeholder="ชื่อ-สกุล" id="txtName" name="txtName" required="">
                    <div class="input-group-append">
                      <span class="input-group-text">
                        <i class="mdi mdi-check-circle-outline"></i>
                      </span>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <div class="input-group">
                    <input type="text" class="form-control" placeholder="วันเกิด 1998-12-13" id="txtdate" name="txtdate" required="">
                    <div class="input-group-append">
                      <span class="input-group-text">
                        <i class="mdi mdi-check-circle-outline"></i>
                      </span>
                    </div>
                  </div>
                </div>
                <!-- <div class="form-group">
                  <div class="input-group">
                    <input type="text" class="form-control" placeholder="สกุล" id="txtLastname" name="txtLastname" required="">
                    <div class="input-group-append">
                      <span class="input-group-text">
                        <i class="mdi mdi-check-circle-outline"></i>
                      </span>
                    </div>
                  </div>
                </div> -->
                <!-- <div class="form-group">
                  <div class="input-group">
                    <input type="text" class="form-control" placeholder="ที่อยู่" id="txtAddress" name="txtAddress" required="">
                    <div class="input-group-append">
                      <span class="input-group-text">
                        <i class="mdi mdi-check-circle-outline"></i>
                      </span>
                    </div>
                  </div>
                </div> -->
                <div class="form-group">
                  <div class="input-group">
                    <input type="text" class="form-control" placeholder="เบอร์โทรศัพท์" id="txtTel" name="txtTel" required="">
                    <div class="input-group-append">
                      <span class="input-group-text">
                        <i class="mdi mdi-check-circle-outline"></i>
                      </span>
                    </div>
                  </div>
                </div>
                <div class="form-group d-flex justify-content-center">
                  <div class="form-check form-check-flat mt-0">
                    <label class="form-check-label">
                      <input type="checkbox" class="form-check-input" checked> I agree to the terms
                    </label>
                  </div>
                </div>
                <div class="form-group">
                  <button type="submit" class="btn btn-primary submit-btn btn-block">Register</button>
                </div>
                <div class="text-block text-center my-3">
                  <span class="text-small font-weight-semibold">Already have and account ?</span>
                  <a href="login.html" class="text-black text-small">Login</a>
                </div>
              
            </div>
          </div>
        </div>
      </div>
      <!-- content-wrapper ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
  <!-- plugins:js -->
  <script src="../../vendors/js/vendor.bundle.base.js"></script>
  <script src="../../vendors/js/vendor.bundle.addons.js"></script>
  <!-- endinject -->
  <!-- inject:js -->
  <script src="../../js/off-canvas.js"></script>
  <script src="../../js/misc.js"></script>
  <!-- endinject -->
  </form>
</body>

</html>