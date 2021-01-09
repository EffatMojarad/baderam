<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>contactus</title>
	<link type="text/css" href="css/contactus.css" rel="stylesheet" />
</head>
<style>
a{
    text-decoration:none;
    color:#000;
}
a:hover{
    color:#666;
}
.menu-line{
    border-bottom:#fff 6px solid;
    display:block;
	background: white;
}
.menu-off{
    display:inline-block;
    list-style:none;
    width:60px;
    height:25px;
    background-color:#EEE;
    margin:2px;
    text-align:center;
}
.menu-on{
    display:inline-block;
    list-style:none;
    width:60px;
    height:25px;
    background-color:#EEE;
    margin:2px;
    text-align:center;        
}
.clear{
    clear:both;
}
</style>
<body>
<?php
//دریافت پارامتر درخواستی
$param = @$_GET['param'];

//آیتم پیش فرض
if(empty($param)){
    $param = 'home';
}

//ساخت کلاس داینامیک با توجه به پارامتر درخواستی
if($param == 'home'){
    $class_home = 'class="menu-on"';
} else{
    $class_home = 'class="menu-off"';
}
if($param == 'learn'){
    $class_learn = 'class="menu-on"';
} else{
    $class_learn = 'class="menu-off"';
}
if($param == 'buy'){
    $class_buy = 'class="menu-on"';
} else{
    $class_buy = 'class="menu-off"';
}
if($param == 'contact'){
    $class_contact = 'class="menu-on"';
} else{
    $class_contact = 'class="menu-off"';
}
?>
<div class="menu-line">
<ul>
<li <?php echo $class_home ?>><a title="خانه" href="http://127.0.0.1:8000/">خانه</a></li>
<li <?php echo $class_learn ?>><a title="آموزش" href="http://127.0.0.1:8000/dashboard">داشبورد</a></li>
<li <?php echo $class_buy ?>><a title="خرید" href="http://127.0.0.1:8000/user/profile">پروفایل</a></li>
<li <?php echo $class_contact ?>><a title="تماس" href="?param=contact">تماس</a></li>
</ul>
<div class="clear"></div>
</div>
	<div class="container">
		<form id="contact" action="" method="post">
			<h3>با ما در ارتباط باشید</h3>
			<h4>نظرات و پیشنهادات خود را برای ما ارسال کنید</h4>
			<fieldset>
				<input placeholder="نام شما" type="text" tabindex="1" required autofocus>
			</fieldset>
			<fieldset>
				<input placeholder="پست الکترونیک" type="email" tabindex="2" required>
			</fieldset>
			<fieldset>
				<input placeholder="تلفن همراه (اختیاری)" type="tel" tabindex="3" required>
			</fieldset>
			<fieldset>
				<input placeholder="آدرس وب سایت (اختیاری)" type="url" tabindex="4" required>
			</fieldset>
			<fieldset>
				<textarea placeholder="پیام خود را تایپ کنید..." tabindex="5" required></textarea>
			</fieldset>
			<fieldset>
				<button name="submit" type="submit" id="contact-submit" data-submit="...ارسال">ارسال پیام</button>
			</fieldset>
			
		</form>
	</div>
</body><!-- This template has been downloaded from Webrubik.com -->
</html>
