<?php
$uname=$_GET['uname'];
?>
<html>
<head>
<title>Blog in 20 seconds</title>
<meta name="description" content="Create a Text Blog in just 20 Seconds. Fastest text Blogging website. Write your memories in your own blog." />
<meta name="keywords" content="text blog ,fastest blog,create blog,write blog,blogging,writing,instant blog" />
<meta name="author" content="Manik Rastogi"
<meta name="robots" content="index, follow" />
<meta name="viewport" content="width=device-width,initial-scale=1.0">
<link rel="stylesheet" type="text/css" href="..\design.css">
<link rel="stylesheet" type="text/css" href="..\color.css">
</head>
<body>
	<div class="main">
		<table class="top"><center>
			<tr>
				<th><center><?php date_default_timezone_set("Asia/Kolkata"); $date=date_create();date_modify($date,"+0 min"); echo date_format($date,"D, d.M.Y h:i A"); ?></center></th>
				<th style="border-left:solid #000 1px;"><center><a class="btn" href="../">LogOut</a></center></th>
			</tr>
		</table>
		<div class="banner">
		Editor's Page
		</div>
		<div class="content">
			<div class="con">
				<p><b><big>Hints :</big> Line Break:&lt;br&gt;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Bold:&lt;b&gt;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Italic:&lt;i&gt;<b></p>
			<?php echo '<a class="btn" href="http://blogoff.me/'.$uname.'">'; ?>Visit</a><br>
				<h5>blogoff.me/<?php echo $uname; ?></h5>
			</div>
			<div class="con">
			<div class="row">
				<div class="col-sm-4" style="margin-top:10px;"><a class="btn" href="editor.php?uname=<?php echo $uname;?>">New Post</a></div>
				<div class="col-sm-4" style="margin-top:10px;"><a class="btn" href="edit.php?uname=<?php echo $uname;?>">Account Details</a></div>
				<div class="col-sm-4" style="margin-top:10px;"><a class="btn" href="show.php?uname=<?php echo $uname;?>">Show All Post</a></div>
			</div>
		</div>
		<div class="footer">
		&copy; 2016-2017 BlogOff.me
		</div>
		</div>
	</div>
</body>
</html>