<?php
$uname = $_GET["uname"];

$conn = new mysqli("localhost","manras6_blog","manik3112","manras6_blog");
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT * FROM manras6_blog.data";
$result = $conn->query($sql);
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
				<th><center><?php date_default_timezone_set("Asia/Kolkata"); $date=date_create();date_modify($date,"+0 min"); echo date_format($date,"D,	 d.M.Y h:i A"); ?></center></th>
				<th style="border-left:solid #000 1px;"><center><?php echo"<a href='home.php?uname=".$uname."' class='btn'>";?>Home</a></center></th>
			</tr>
		</table>
		<div class="banner">
		Editor's Page
		</div>
		<div class="content">
			<div class="con">
				<h5>blogoff.me/<?php echo $uname; ?></h5>
				<table><tr><th>Title</th><th>Delete</th></tr>
			<?php
			if ($result->num_rows > 0) {
			while($row = $result->fetch_assoc()) {
				if($row["uname"]==$uname){
					echo "<tr><td>".$row['head']."</td><td><button onclick=del('".$row['head']."') class='btn red'>Delete</button></td></tr>";
				}
				}
		}
		?>
		</table>
			</div>
		</div>
		<div class="footer">
		&copy; 2016-2017 BlogOff.me
		</div>
		</div>
	</div>
</body>
<script>
function del(x){
	
	window.location="cname.php?sql=DELETE from manras6_blog.data WHERE data.head = '"+x+"' AND data.uname =  '<?php echo $uname; ?>'";
}
</script>
</script>
</html>

<?php
$conn->close();
?>