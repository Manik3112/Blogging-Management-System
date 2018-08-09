<?php
$servername = "localhost";
$username = "manras6_blog";
$password = "manik3112";
$dbname = "manras6_blog";
date_default_timezone_set("Asia/Kolkata");

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
?>
<?php
$sql = "SELECT * FROM data";
$result = $conn->query($sql);
?>


<html>
<head>
<title>Blog in 20 seconds</title>
<meta name="description" content="Love to Write | Start Writing now. Create a Text Blog in just 20 Seconds. Fastest text Blogging website. Write your memories in your own blog." />
<meta name="keywords" content="text blog ,fastest blog,create blog,write blog,blogging,writing,instant blog" />
<meta name="author" content="Manik Rastogi"
<meta name="robots" content="index, follow" />
<meta name="viewport" content="width=device-width,initial-scale=1.0">
<link rel="stylesheet" type="text/css" href="color.css">
<link rel="stylesheet" type="text/css" href="design.css">
</head>
<body>
	<div class="main">
		<table class="top"><center>
			<tr>
				<th><center><?php $date=date_create();date_modify($date,"0 min"); echo date_format($date,"D,	 d.M.Y h:i A"); ?></center></th>
				<th style="border-left:solid #000 1px;"><center><a class="btn" href="login/">Login</a></center></th>
			</tr>
		</table>
		<div class="banner">
			BlogOff
		</div>
		<div class="content">
			<div class="con">
				<h4>Start Your Blog/Diary in 20 Seconds</h4>
				<form action="new.php" method="post">
					<label class="white-text big">Username</label>
					<input type="text" name="uname" required /><br>
					<label class="white-text big">Full name</label>
					<input type="text" name="fname" required /><br>
					<label class="white-text big">Password</label>
					<input type="password" name="pass" required /><br>
					<label class="white-text big">Email</label>
					<input type="email" name="email" required /><br>
					<label class="white-text big">Blog Name</label>
					<input type="text" name="bname" required /><br>
					<input type="submit" class="btn" value="Submit" required />
				</form>
			</div>
		</div>
		<div class="footer">
		&copy; 2016-2017 BlogOff.me
		</div>
	</div>
</body>
</html>
<?php
$conn->close();
?>