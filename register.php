<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css">
  <link rel="stylesheet" type="text/css" href="assets/css/stylelogin.css">
  <link rel="stylesheet" href="assets/font-awesome/css/font-awesome.css">
  <title>สมัครสมาชิก</title>
</head>
<body>
  <div class="login-bg">
    <div class="container">
      <div class="contenss well">
      <h2>สมัครสมาชิก</h2><hr>
      <form name="form1" method="post" action="insert/insertmember.php">
        <div class="text-log">
          <i class="fa fa-address-card" aria-hidden="true"></i> <label>รหัสนักศึกษา</label>
        <input name="txtUsername" class="form-control" type="text" id="txtUsername" placeholder="กรุณกรอกรหัสนักศึกษา..." required="">
        </div>
        <div class="text-log">
          <i class="fa fa-address-card" aria-hidden="true"></i> <label>ชื่อ</label>
        <input name="txtfirstName" class="form-control" type="text" id="txtfirstName" placeholder="กรุณกรอกชื่อนักศึกษา..." required="">
        </div>
        <div class="text-log">
          <i class="fa fa-address-card" aria-hidden="true"></i> <label>นามสกุล</label>
        <input name="txtlastName" class="form-control" type="text" id="txtlastName" placeholder="กรุณกรอกนามสกุลนักศึกษา..." required="">
        </div>
        <div class="text-log" hidden="hidden">
        <input name="txtstatus" class="form-control" type="text" id="txtstatus" value="1">
        </div>
        <div class="text-log">
          <i class="fa fa-unlock-alt" aria-hidden="true"></i> <label>รหัสผ่าน</label>
          <input name="txtPassword" class="form-control" type="password" id="txtPassword" placeholder="กรุณกรอกรหัสผ่าน..." required="">
        </div>
        <div class="text-log">
          <i class="fa fa-address-card" aria-hidden="true"></i> <label>เลขบัตรปรชาชน</label>
        <input name="txtid" class="form-control" type="text" id="txtid" placeholder="กรุณกรอกรหัสนักศึกษา..." required="">
        </div>
        <div class="bt-log">
          <input class="btn btn-success run" type="submit" name="Submit" value="สมัครสมาชิก">
        </div>
        <div calss="regis">
          <a href="login.php">กลับไปหน้า Login</a>
        </div><hr>
      </form>
      </div>
    </div>
  </div>
</body>
</html>