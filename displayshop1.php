<html>
	<head>
      
	<script type = "text/JavaScript">
	 <!--
		function AutoRefresh( t ) {
		   setTimeout("location.reload(true);", t);
		}
	 //-->
	</script>
    <form action="" method="post">
         <select name = "time_selection">
            <option value = 5 >5 second</option>
            <option value = 10>10 second</option>
            <option value = 30 selected>30 second</option>
         </select><br/>
		<input type="submit" name="timerButton" value="Set time"/>
    </form> 
	<?php
		$sec = 5;
		if(isset($_POST['timerButton'])) 
			{ 
				//get input text
				$sec = $_POST['time_selection'];
				
			}
		echo "This page will reload itself in $sec second!";
	?>  
</head>
	<ul>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
 	<a href="adminatn.php" class="btn btn-info btn-lg"><span class="glyphicon glyphicon-log-out"></span> Log out</a> 
 </ul>
<style>
table, th, td {
  border: 1px solid black;
  padding: 5px;
}
table {
  border-spacing: 15px;

 <style>
   table, th, td {
   border: 1px solid violet;
 }
}
</style>
	 <style>
 body {
 background-image: url('.jpeg');
 background-attachment: fixed;
 background-size: 100%100%;
 }
 </style>
  <table style="width:100%">
  <thread style="text-align:left">
                <tr>
		
                <th style="background-color:#EE82EE"><p style="color:#ffff00"><style="text-align:center">Product ID<p></th>
                <th style="background-color:#FFA07A"><p style="color:#ffff00"><style="text-align:center">Product Name<p></th>
                <th style="background-color:#EE82EE"><p style="color:#ffff00"><style="text-align:center">Product Price<p></th>
                <th style="background-color:#FFA07A"><p style="color:#ffff00"><style="text-align:center">Amount<p></th>
                
                </tr>
<?php
echo '<h1 style="color:orange"> Databse of ATN Shop 1</h1>';
            		$host_heroku = "ec2-3-231-69-204.compute-1.amazonaws.com";
			$db_heroku = "d5boqk3bekfndr";
			$user_heroku = "zweujvxfknurip";
			$pw_heroku = "a34706f696373b39c20d08e062a4bba2c33d0f9febe6eeaa26e77985c92a9e5e";
			# Create connection to Heroku Postgres
			$conn_string = "host=$host_heroku port=5432 dbname=$db_heroku user=$user_heroku password=$pw_heroku";
			# Connect to DATABASE
			$pg_conn = pg_connect($conn_string);
if (!$pg_conn)
{
die('Error: Could not connect: ' . pg_last_error());
}
 $query = 'select * from shop1';
$data = pg_query($pg_conn, $query);
 $total = pg_num_rows($data);
if($total!=0)
{
while ($result=pg_fetch_assoc($data))
{
echo "
<tr>
<td>".$result['productid']."</td>
<td>".$result['productname']."</td>
<td>".$result['productprice']."</td>
<td>".$result['amount']."</td>
</tr>
";
}
}

?>
</html>                  
