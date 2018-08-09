<?php
$uname = $_POST['uname'];
$fullname = $_POST['fname'];
$pass = $_POST['pass'];
$email = $_POST['email'];
$bname = $_POST['bname'];

$conn = new mysqli("localhost","manras6_blog","manik3112","manras6_blog");
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$sql = "INSERT INTO manras6_blog.database values('".$uname."','".$pass."','".$email."','".$bname."','','".$fullname."')";
if ($conn->query($sql) === TRUE) {
    echo '
	<html>
<head>
<title>Blog in 20 seconds</title>
<meta name="description" content="Create a Text Blog in just 20 Seconds. Fastest text Blogging website. Write your memories in your own blog." />
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
				<th><center>Congratulations</center></th>
				<th style="border-left:solid #000 1px;"><center><a class="btn" href="login/">Login</a></center></th>
			</tr>
		</table>
		<div class="banner">
			BlogOff
		</div>
		<div class="content">
			<div class="con">
				<h4>blogoff.me/'.$uname.'</h4>
				<h5>Login and Start Blogging</h5>
				<a class="btn red" href="login/">Login</a>
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
<link rel="stylesheet" type="text/css" href="color.css">
<link rel="stylesheet" type="text/css" href="design.css">
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
				<h5>It seems an error</h5><h4>Start Again</h4><h5>with different username</h5>
				<a class="btn red" href="index.php">Home</a>
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

<?php
mkdir($uname);
$fname = $uname."/index.php";
$myfile = fopen($fname, "w") or die("Unable to open file!");
$txt = '<?php
$servername = "localhost";
$username = "manras6_blog";
$password = "manik3112";
$dbname = "manras6_blog";


$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
?>
<?php
$sql = "SELECT * FROM data order by date desc";
$result = $conn->query($sql);
?>


<html>
<head>
<title>'.$fullname.' | Blog in 20 seconds</title>
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
				<th><center><?php date_default_timezone_set("Asia/Kolkata"); $date=date_create();date_modify($date,"0 min"); echo date_format($date,"D,	 d.M.Y h:i A"); ?></center></th>
				<th style="border-left:solid #000 1px;"><center><a class="btn" href="..">Create</a></center></th>
			</tr>
		</table>
		<div class="banner">
		'.$bname.'
		</div>
		<div class="content">
			<?php
				if ($result->num_rows > 0) {
				while($row = $result->fetch_assoc()) {
				if($row["uname"]=="'.$uname.'"){
			?>
		<?php
				echo "<div class=con><h4 class=lft>" . $row["head"]. "</h4><h5 class=rght>- " . $row["user"]. "</h5><hr><p>" . $row["data"]. "</p></div>";
					}}
				} else {
			echo "0 results";
			}
			?>
		</div>
		<div class="footer">
		&copy; 2016-2017 BlogOff.me
		</div>
	</div>
</body>
</html>
<?php
$conn->close();
?>';
fwrite($myfile, $txt);
fclose($myfile);
?>