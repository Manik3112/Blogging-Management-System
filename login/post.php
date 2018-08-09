<?php
$head = $_POST['head'];
$user = $_POST['user'];
$data = $_POST['data'];
$uname = $_POST['uname'];

$conn = new mysqli("localhost","manras6_blog","manik3112","manras6_blog");
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$sql = "INSERT INTO data values('".$head."','".$user."','".$data."','".$uname."',CURRENT_TIMESTAMP)";
if ($conn->query($sql) === TRUE) {
    echo '	<html>
<head>
<title>Blog in 20 seconds</title>
<meta name="description" content="Create a Text Blog in just 20 Seconds. Fastest text Blogging website. Write your memories in your own blog." />
<meta name="keywords" content="text blog ,fastest blog,create blog,write blog,blogging,writing,instant blog" />
<meta name="author" content="Manik Rastogi"
<meta name="robots" content="index, follow" />
<meta name="viewport" content="width=device-width,initial-scale=1.0">
<link rel="stylesheet" type="text/css" href="..\color.css">
<link rel="stylesheet" type="text/css" href="..\design.css">
</head>
<body>
	<div class="main">
		<table class="top"><center>
			<tr>
				<th><center>Congratulations</center></th>
				<th style="border-left:solid #000 1px;"><center><a class="btn" href="home.php?uname='.$uname.'">Home</a></center></th>
			</tr>
		</table>
		<div class="banner">
			BlogOff
		</div>
		<div class="content">
			<div class="con">
				<h4>blogoff.me/'.$uname.'</h4>
				<h5>Post has been Published.</h5>
				<a class="btn red" href="../'.$uname.'">See Here.</a>
			</div>
		</div>
		<div class="footer"> 
		&copy; 2016-2017 BlogOff.me
		</div>
	</div>
</body>
</html>	';
} else {
    echo '<html>
<head>
<title>Blog in 20 seconds</title>
<meta name="description" content="Create a Text Blog in just 20 Seconds. Fastest text Blogging website. Write your memories in your own blog." />
<meta name="keywords" content="text blog ,fastest blog,create blog,write blog,blogging,writing,instant blog" />
<meta name="author" content="Manik Rastogi"
<meta name="robots" content="index, follow" />
<meta name="viewport" content="width=device-width,initial-scale=1.0">
<link rel="stylesheet" type="text/css" href="..\color.css">
<link rel="stylesheet" type="text/css" href="..\design.css">
</head>
<body>
	<div class="main">
		<table class="top"><center>
			<tr>
				<th><center>oops</center></th>
				<th style="border-left:solid #000 1px;"><center><a class="btn" href="login/">Login</a></center></th>
			</tr>
		</table>
		<div class="banner">
			BlogOff
		</div>
		<div class="content">
			<div class="con">
				<h4>blogoff.me/'.$uname.'</h4>
				<h5>Post Cannot be Published.</h5>
				<a class="btn red" href="index.php">Login Again</a>
			</div>
		</div>
		<div class="footer"> 
		&copy; 2016-2017 BlogOff.me
		</div>
	</div>
</body>
</html>	';
}
$conn->close();
?>