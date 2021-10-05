<html>

<head>
<?php
session_start();
if(isset($_SESSION['admin'])){
  header('location: index.html');
}
?>
<meta charset="utf-8">
<meta property="og:title" content="Xem phim miễn phí">
<link rel="shortcut icon" href="image/favicon.ico" type="image/x-icon"> 
<title> Đăng Nhập </title>
<link rel="stylesheet" type="text/css" href="./css/baitap.css">
<link href="fontawesome/css/fontawesome.css" rel="stylesheet">
<link href="fontawesome/css/brands.css" rel="stylesheet">
<link href="fontawesome/css/solid.css" rel="stylesheet">
</head>
<?php
require('ketnoi.php');
if(isset($_POST['dangnhap'])){
$tk = $_POST['username'];
$mk = $_POST['password'];
$sql ="select * from user where taikhoan='$tk' and matkhau='$mk'";
$query = mysqli_query($conn, $sql);
$test = mysqli_num_rows($query);
if($test > 0){
	$_SESSION['admin']=$tk;
	header('location: index.html');
}else{
	echo '<p style="color: #FFF; font-weight: bold; font-size: 18px;" >Đăng Nhập Thất Bại</p>';
}
}
?>
<body>
<div class="content">
<div>
	<form action="login.php" class="dangnhap" method="POST"> 

       <label> Tên đăng nhập </label> 
       <input class="tkmk" type="text" name="username"> 

       <label> Mật khẩu </label>
       <input class="tkmk" type="password" name="password"> 

       <input type="submit" class="button" name="dangnhap" value="Đăng nhập"> 
      <a href="dangky.php" title="Đăng ký">Đăng ký</a> 
      <a href="" title="Quên mật khẩu">Quên mật khẩu</a>
</form> 
</div>
</div>
</body>
</html>