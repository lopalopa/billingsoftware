
<style>
.error-warning{padding:5px 5px 5px 30px;border:1px solid #f09301;color:#f09301;background:#ffffd8 url(img/error-warning.png) no-repeat 5px center;margin:10px 0;}
.error-success{padding:5px 5px 5px 30px;border:1px solid #8ce000;color:#1fb200;background:#eaffc6 url(img/error-success.png) 
<title>User Login</title><BODY onLoad="noBack();" onpageshow="if (event.persisted) noBack();" onUnload="">
			<div class="row-fluid">
			<noscript>no-repeat 5px center;margin:10px 0;}
.error-wrong{padding:5px 5px 5px 30px;border:1px solid #BD4247; color:#BD4247;background:#ffcece url(img/error-wrong.png) no-repeat 5px center;margin:10px 0;}
.error{border:1px #BD4247 solid;}
.error-text{color:#BD4247;}
</style>
<!DOCTYPE html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>BILLING SOFTWARE</title>
<!-- Vendor CSS -->
<link href="assets/animate.min.css" rel="stylesheet">
<!-- CSS -->
<link href="assets/app.min.css" rel="stylesheet">
<link href="assets/css/font-awesome.min.css" rel="stylesheet">
</head>
<body class="login-content">
<!-- Login -->
<div class="lc-block toggled" id="l-login">
  <form class="form-horizontal" method="post" action="loginCheck.php" id="login_form">
    <input type="hidden" name="browsername" id="browserName" >
    <div class="input-group m-b-20"> <span class="input-group-addon"><i class="fa fa-user"></i></span>
      <div class="fg-line">
        <input type="text" class="form-control required username" placeholder="Username" name="username" id="username" autocomplete="off"/>
        <small id="nameInfo"></small> </div>
    </div>
    <div class="input-group m-b-20"> <span class="input-group-addon"><i class="fa fa-user-secret"></i></span>
      <div class="fg-line">
        <input type="password" class="form-control required password" placeholder="Password" name="password" id="password"/>
        <small id="pass1Info"></small> </span> </div>
    </div>
    <div class="clearfix"></div>
   <!-- <div class="checkbox">
      <label>
      <input type="checkbox"  name="checkbox" class="remember">
      <i class="input-helper"></i> Keep me signed in </label>
    </div>-->
	<button type="submit" class="btn btn-login btn-danger btn-float"><i class="fa fa-arrow-right"></i></button><small id="msgbox" style="display:none"></small>
  </form>
</div>
<!-- Register -->
<!--<div class="logo" style="position:absolute; top:20px; left:10%"><img src="img/chopstic.jpg" height="173" width="1000" alt="logo"></div>-->

<div style="position:absolute; top:20px; left:33%"><b style="font-size:50px; font-style:BOID; color:#FFFFFF">BILLING SOFTWARE</b></div>
<!-- Forgot Password -->
<!-- Javascript Libraries -->
<script src="assets/jquery-2.1.1.min.js"></script>
<script src="js/jquery.validate.min.js"></script>
<script src="assets/bootstrap.min.js"></script>
<script type="text/javascript">
$(document).ready(function() {
$('#login_form').validate();

});

</script>
<div class="foooter" style="position:absolute;top:97%;">
  <!--<center>
    @copyright by <a href="#">Isolutionindia.in</a>
  </center>-->
</div>
</body>
</html>