
<?php
   $host_heroku = "ec2-3-231-69-204.compute-1.amazonaws.com";
			$db_heroku = "d5boqk3bekfndr";
			$user_heroku = "zweujvxfknurip";
			$pw_heroku = "a34706f696373b39c20d08e062a4bba2c33d0f9febe6eeaa26e77985c92a9e5e";
			# Create connection to Heroku Postgres
			$conn_string = "host=$host_heroku port=5432 dbname=$db_heroku user=$user_heroku password=$pw_heroku";
			# Connect to DATABASE
			$pg_conn = pg_connect($conn_string);
$sql = "DELETE FROM shop1 WHERE productid='" . $_GET["productid"] . "'";
if (pg_query($pg_conn, $sql)) {
    echo "Record deleted successfully";
}
<meta http-equiv="refresh" content="0; url=https://fptapptech.herokuapp.com/shop1.php"/>
else {
    echo "Error deleting record");
}

?>
