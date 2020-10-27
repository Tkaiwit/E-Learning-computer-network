<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css">
  <link rel="stylesheet" type="text/css" href="assets/css/stylelogin.css">
  <link rel="stylesheet" href="assets/font-awesome/css/font-awesome.css">
  <title>Login</title>
</head>
<body>
  <div class="login-bg">
    <div class="container">
      <div class="contenst well">
      <h1>Login</h1><hr>
      <form name="form1" method="post" action="check_login.php">
        <div class="text-log">
          <i class="fa fa-address-card" aria-hidden="true"></i> <label>รหัสนักศึกษา</label>
        <input name="txtUsername" class="form-control" type="text" id="txtUsername" placeholder="กรุณกรอกรหัสนักศึกษา..." required="">
        </div>
        <div class="text-log">
          <i class="fa fa-unlock-alt" aria-hidden="true"></i> <label>รหัสผ่าน</label>
          <input name="txtPassword" class="form-control" type="password" id="txtPassword" placeholder="กรุณกรอกรหัสผ่าน..." required="">
        </div>
        <div class="bt-log">
          <input class="btn btn-success" type="submit" name="Submit" value="Login">
        </div>
        <div calss="regis">
          <a href="register.php">สมัครสมาชิก</a>
        </div><hr>
      </form>
      </div>
    </div>
  </div>
</body>
</html>