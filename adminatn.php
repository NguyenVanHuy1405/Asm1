<html>
<head>
 <ul>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
 	<a href="logindemo.php" class="btn btn-info btn-lg"><span class="glyphicon glyphicon-log-out"></span> Log out</a> 
 </ul>
 </head>
 <body>
 <font 
 size="20" 
 color ="red" 
 text-align:center>
 Welcome to website for admin or boss
 </font>
 <style>
 body {
 background-image: url('login1.jpeg');
 background-attachment: fixed;
 background-size: 100%100%;
 }
 </style>
   <style>
table, th, td {
  border: 1px solid black;
  padding: 5px;
}
table {
  border-spacing: 15px;
}
</style>
 <style>
   table, th, td {
   border: 1px solid violet;
 }
}
</style>
  <table style="width:100%">
  <thread style="text-align:left">
                <tr>
		
                <th style="background-color:#FFFF00"><p style="color:darkblue">Product ID<p></th>
                <th style="background-color:#FF7F50"><p style="color:darkblue">Product Name<p></th>
                <th style="background-color:#FFFF00"><p style="color:darkblue">Product Price<p></th>
                <th style="background-color:#FF7F50"><p style="color:darkblue">Quantity<p></th>
                
                </tr>
<?php
echo '<h1 style="color:orange"> Databse of ATN Shop 1</h1>';
            		$host_heroku = "ec2-34-233-114-40.compute-1.amazonaws.com";
			$db_heroku = "d63vsqeg1u1bhr";
			$user_heroku = "vcljjiechthrbs";
			$pw_heroku = "91e24a4f6c609d6e3bd3c33019a26933d378b76f8e8c58956c617060bdf2bc12";
$conn_string = "host=$host_heroku port=5432 dbname=$db_heroku user=$user_heroku password=$pw_heroku";
$pg_heroku = pg_connect($conn_string);
if (!$pg_heroku)
{
die('Error: Could not connect: ' . pg_last_error());
}
 $query = 'select * from atnshop1';
$data = pg_query($pg_heroku, $query);
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
<td>".$result['quantityonhand']."</td>
</tr>
";
}
}

?>
<style>
   table, th, td {
   border: 1px solid violet;
 }
}
</style>
  <table style="width:100%">
  <thread style="text-align:left">
                <tr>
		
                <th style="background-color:#FFFF00"><p style="color:darkblue">Product ID<p></th>
                <th style="background-color:#FF7F50"><p style="color:darkblue">Product Name<p></th>
                <th style="background-color:#FFFF00"><p style="color:darkblue">Product Price<p></th>
                <th style="background-color:#FF7F50"><p style="color:darkblue">Quantity<p></th>
                
                </tr>
<?php
echo '<h1 style="color:orange"> Databse of ATN Shop 2</h1>';
            		$host_heroku = "ec2-34-233-114-40.compute-1.amazonaws.com";
			$db_heroku = "d63vsqeg1u1bhr";
			$user_heroku = "vcljjiechthrbs";
			$pw_heroku = "91e24a4f6c609d6e3bd3c33019a26933d378b76f8e8c58956c617060bdf2bc12";
$conn_string = "host=$host_heroku port=5432 dbname=$db_heroku user=$user_heroku password=$pw_heroku";
$pg_heroku = pg_connect($conn_string);
if (!$pg_heroku)
{
die('Error: Could not connect: ' . pg_last_error());
}
 $query = 'select * from atnshop1';
$data = pg_query($pg_heroku, $query);
 $total = pg_num_rows($data);
if($total!=0)
{
while ($result=pg_fetch_assoc($data))
{
echo "
<tr>
<td>".$result['productID']."</td>
<td>".$result['productname']."</td>
<td>".$result['productprice']."</td>
<td>".$result['productquality']."</td>
</tr>
";
}
}

?>
</body>
</html>