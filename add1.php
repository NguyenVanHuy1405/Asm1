<?php
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
            ?>
            <html>
             <head>
             <title> Add for ATNshop1 </title>
             </head>
             <body>
            <style>
             body {
             background-image: url('add1.jpeg');
             background-attachment: fixed;
             background-size: 100%100%;
             }
             </style>
             <br>
             <form action="" method="GET">
             <table border"0" bgcolor="white" align="center" cellspacing="20">
                <tr>
             <td>Product ID</td>
             <td><input type="text" value="" name="productid" required></td>
             </tr>
            
             <tr>
             <td>Product Name</td>
             <td><input type="text" value="" name="productname" required></td>
             </tr>
            
             <tr>
             <td>Product Price</td>
             <td><input type="text" value="" name="productprice" required></td>
             </tr>
            
             <tr>
             <td>Status</td>
             <td><input type="text" value="" name="quantityonhand" required></td>
             </tr>
            
             <tr>
             <td colspan="2" align="center"><input type="submit" id="button" name="submit" value="Add"></td>
             </tr>
             </form>
             </table>
            </body>
            </html>
            <?php
            if($_GET['submit'])
            {
            $pi=$_GET['productid'];
            $pn=$_GET['productname'];
            $pp=$_GET['productprice'];
            $stt=$_GET['status'];
            $query = "INSERT INTO shop1 VALUES ('$pi','$pn','$pp','$stt')";
            $data = pg_query($pg_heroku,$query);
            if($data)
            {
            echo "<script>alert('Added Successfully!')</script>";
            ?>
            <meta http-equiv="refresh" content="0; url=https://localhost/shop1.php" />
            <?php
            }
            else
            {
            echo "Failed to update the table.";
            }
            }
     ?>