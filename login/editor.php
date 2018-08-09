<?php
$uname = $_GET["uname"];
$conn = new mysqli("localhost","manras6_blog","manik3112","manras6_blog");
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT * FROM manras6_blog.database";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
			while($row = $result->fetch_assoc()) {
				if($row["uname"]==$uname){
					$user = $row['user'];
}}}
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
				<th style="border-left:solid #000 1px;"><center><?php echo"<a href='home.php?uname=".$uname."' class='btn'>";?>Home</a></center></th>
			</tr>
		</table>
		<div class="banner">
		Editor's Page
		</div>
		<div class="content">
			<div class="con">
				<p><b><big>Hints :</big> Line Break:&lt;br&gt;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Bold:&lt;b&gt;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Italic:&lt;i&gt;<b></p>
				<h5>blogoff.me/<?php echo $uname; ?></h5>
			</div>
			<div class="con">
				<form action="post.php" method="post">
					<label class="white-text">Heading</label>
					<input type="text" name="head" required /><br>
					<label class="white-text">Body</label>
					<textarea style="height:100px;" name="data" required ></textarea><br>
					<input type="hidden" name="uname" value="<?php echo $uname; ?>"><br>
					<input type="hidden" name="user" value="<?php echo $user; ?>"><br>
					<input class="btn" type="submit" value="Submit" required />
				</form>
			</div>
		</div>
		<div class="footer">
		&copy; 2016-2017 BlogOff.me
		</div>
		</div>
	</div>
</body>
</html>
<?php
$conn->close();
?>
