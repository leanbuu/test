<html><head>
<meta charset="utf-8">
<meta property="og:title" content="Xem phim miễn phí">
<link rel="shortcut icon" href="image/favicon.ico" type="image/x-icon"> 
<title> Đăng Ký </title>
<link rel="stylesheet" type="text/css" href="./css/baitap.css">
<link href="fontawesome/css/fontawesome.css" rel="stylesheet">
<link href="fontawesome/css/brands.css" rel="stylesheet">
<link href="fontawesome/css/solid.css" rel="stylesheet">
</head>
<?php
require('ketnoi.php');
if(isset($_POST['dangky'])){
$tk = $_POST['username'];
$mk = $_POST['password'];
$sql ="insert into user(taikhoan,matkhau) values('$tk', '$mk')" ;
$query = mysqli_query($conn, $sql);
	echo '<p style="color: #FFF; font-weight: bold; font-size: 18px;" >Đăng Ký Thành Công</p>';
}
?>
<body>
<div class="content">
<div>
	<form action="dangky.php" class="dangnhap" method="POST"> 
       <label> Tên Tài Khoản </label> 
       <input class="tkmk" type="text" name="username"> 
       <label> Mật khẩu </label>
       <input class="tkmk" type="password" name="password"> 
       <input type="submit" class="button" name="dangky" value="Đăng Ký"> 
      <a href="login.php" title="Đăng ký">Đăng Nhập</a> 
</form> 
</div>
</div>
</body>
</html>