<?php
      $host_heroku = "ec2-3-231-69-204.compute-1.amazonaws.com";
			$db_heroku = "d5boqk3bekfndr";
			$user_heroku = "zweujvxfknurip";
			$pw_heroku = "a34706f696373b39c20d08e062a4bba2c33d0f9febe6eeaa26e77985c92a9e5e";
			# Create connection to Heroku Postgres
			$conn_string = "host=$host_heroku port=5432 dbname=$db_heroku user=$user_heroku password=$pw_heroku";
			# Connect to DATABASE
			$pg_conn = pg_connect($conn_string);
if (isset($_POST['upload'])) {
$errors= array();
$file_name = $_FILES['image']['name'];
$file_size = $_FILES['image']['size'];
$file_tmp = $_FILES['image']['tmp_name'];
$file_type = $_FILES['image']['type'];
$file_parts =explode('.',$_FILES['image']['name']);
$file_ext=strtolower(end($file_parts));
$expensions= array("jpeg","jpg","png");
if(in_array($file_ext,$expensions)=== false){
$errors[]="Only JPEG or PNG files are supported";
}
if($file_size > 2097152) {
$errors[]='File size should not be larger than 2MB';
}
$image = $_FILES['image']['name'];
$target = "photo/".basename($image);
$pg = "INSERT INTO shop1 (image) VALUES ('$image')";
mysqli_query($pg_conn, $pg);
if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
echo '<script language="javascript">alert("Uploaded successfully!");</script>';
}else{
echo '<script language="javascript">alert("Upload failed!");</script>';
}
}
$result = pg_query($pg_conn, "SELECT * FROM shop1");
?>
<link rel="stylesheet" href="style.css">   
<?php
while ($row = pg_fetch_array($result)) {
echo "<div id='img_div'>";
echo "<img src='photo/".$row['image']."' >";
echo "</div>";
}
?>

</div>
</body>
</html>
