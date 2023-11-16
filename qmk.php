<?php
/*
**********************************************************
+ Tên code: website gạch thẻ                             +
+ Người viết: TMQ                                        +
+ Vui lòng không xóa bản quyền để tôn trọng tác giả      +
+ LIÊN HỆ: tmquang0209@gmail.com                         +
**********************************************************
*/
require("TMQ/function.php");
require("TMQ/head.php");
require("TMQ/menu.php");
?>
<?php

session_start();
error_reporting(E_ALL^E_NOTICE);
error_reporting(E_ERROR);

  
if($_POST){
  $newpass = rand(100000,999999);
  $password = md5(md5($newpass));
  $username = $_POST['username'];
  $email = $_POST['email'];
   //Email information
   if(mysql_result(mysql_query("SELECT COUNT(*) FROM `TMQ_user` WHERE `uid` = '$username' AND `email` = '$email' LIMIT 1"), 0) < 1){
 $arr = 'Tài khoản không tồn tại';
}else{
     mysql_query("UPDATE `TMQ_user` SET `matkhau`= '$password' WHERE `uid` = '$username'");
$subject = "Lấy lại mật khẩu truy cập";
$txt = "Mật khẩu của tài khoản $username là: $newpass";
$headers = "From: chauquoc310@gmail.com"."\r\n";
$headers .= "CC: chauquoc310@gmail.com";

mail($email,$subject,$txt,$headers);
  //Email response
 
  $arr = 'Thành Công';
 }}else{
  $arr = '';} ?>
  <div class="c-layout-page">
	<!-- BEGIN: PAGE CONTENT -->
	    <div class="login-box">

        <!-- /.login-logo -->
        <div class="login-box-body">
            <p class="login-box-msg">Lấy lại mật khẩu</p>
 <span class="help-block" style="text-align: center;color: #dd4b39">
                       <strong><?php /*echo $arr;*/?>Liên Hệ Admin để lấy lại.</strong>
                </span>

            <form action="" method="POST">
                
                <div class="form-group has-feedback">
                    <input type="text" class="form-control" name="username" minlength="6"  value="" placeholder="Tài khoản" required>
                </div>

                <div class="form-group has-feedback">
                    <input type="email" class="form-control" name="email" minlength="6" placeholder="Email" required>
                </div>


                <div class="row">

                    <!-- /.col -->
                    <div class="col-xs-12">
                        <button type="submit" class="btn btn-primary btn-block btn-flat" style="margin: 0 auto;">Yêu cầu mật khẩu</button>
                    </div>
                    <!-- /.col -->
                </div>
            </form>
            <!-- /.social-auth-links -->
        </div>
        <!-- /.login-box-body -->
    </div>
    <!-- /.login-box -->

    <style>
        .login-box, .register-box {
            width: 400px;
            margin: 7% auto;
            border: 1px solid #cccccc;
            padding: 20px;;
        }

        .login-box-msg, .register-box-msg {
            margin: 0;
            text-align: center;
            padding: 0 20px 20px 20px;
            text-align: center;
            font-size: 20px;;
        }
    </style>
			<!-- END: PAGE CONTENT -->
</div>
<?php
include 'TMQ/end.php';
?>