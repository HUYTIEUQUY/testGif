<!DOCTYPE html>
<html>
<head>
	<title>LARAVEL MASTER</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="{{asset('resources/css/style.css')}}"> 
	<link rel="stylesheet" type="text/css" href="{{asset('resources/css')}}"> 
	<link rel="stylesheet" href="resources/css/bootstrap.min.css" >
	<link rel="stylesheet" href="resources/css/bootstrap3.css" >
   <link rel="stylesheet" href="resources/css/menu.css">
   <link rel="stylesheet" href="resources/css/style.css">
   <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
<!--hearder-->
   <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Oswald">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open Sans">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<!--table-->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

   <meta charset="utf-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
<style>

</style>

</head>
<body>
<header class="w3-container w3-center w3-padding-48 w3-gray" >
  <div>
</a><br>
<a href=".../admin/layout/logout"></a>

  </div>

  <h1 class="w3-xxxlarge"><b style="color: rgb(20, 0, 136); text-align: center;">Lập trình LARAVEL</b></h1>
  <h6>Welcome to the blog of <span class="w3-tag">laravel</span></h6>
</header>

<fieldset>
    <legend>
            THANH TOÁN QUA CỔNG PAYPAL
    </legend>
    <!-- nhập địa chir email người nhận tiền -->
    <form action="https://www.sandbox.paypal.com/cgi-bin/webscr" method="post">
    <!-- tham số cmd có giá trị _xclick chỉ rõ cho paypal biết là người dùng nhấn nút thanh toán -->
        <input type="hidden" name="business" value="sb-qrma476102009@business.example.com">
    <!-- thông tin mua hàng -->
        <input type="hidden" name="cmd" value= "_xclick" >
    <!-- trị giá của giỏ hàng vì paypal không hỗ trọ tiền Việt nên phải đổi ra tiền đô -->

    Nhập số tiền hoá đơn: <input type="number" name="acount" placeholder="nhập số tiền vào" value="">
   
        <!-- loại tiền -->
        <input type="hidden" name="currency_code" value="USD">
        <!-- đường link cung cấp cho paypal biết để sau khi xử lý thành công nó sẽ chuyển về clik nay -->
        <input type="hidden" name="return" value="http://localhost/paypal/thanhcong.php">
        <input type="hidden" name="return" value="http://localhost/paypal/thanhcong.php">

        <!-- nút bấm -->
        <input type="submit" name="submit" value="Thanh toán bằng Paypal">
    </form>
</fieldset>


	





	<div style="background-color: rgb(182, 197, 219)">footer</div>

	<script src="resources/js/jquery.min.js"></script>
<script src="resources/js/jquery.zoom.min.js"></script>
<script src="resources/js/main.js"></script>
<script  src="resources/js/bootstrap.bundle.js"></script>
<script  src="resources/js/bootstrap.bundle.min.js"></script>
<script  src="resources/js/bootstrap.bundle.js.map"></script>
<script  src="resources/js/bootstrap.bundle.min.js.map"></script>
<script  src="resources/js/bootstrap.js">
</script>
</body>
</html>