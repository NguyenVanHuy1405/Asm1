<html>
<head>
 <ul>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
 	<a href="index.php" class="btn btn-info btn-lg"><span class="glyphicon glyphicon-log-out"></span> Log out</a> 
 </ul>
	 <style>
 body {
 background-image: url('admin.jpeg');
 background-attachment: fixed;
 background-size: 100%100%;
 }
 </style>
<style>
.dropbtn {
  background-color: #4CAF50;
  color: white;
  padding: 16px;
  font-size: 16px;
  border: none;
  cursor: pointer;
}

.dropdown {
  position: relative;
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: absolute;
  right: 0;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

.dropdown-content a:hover {background-color: #f1f1f1;}

.dropdown:hover .dropdown-content {
  display: block;
}

.dropdown:hover .dropbtn {
  background-color: #3e8e41;
}
</style>
</head>	
<body>

<div class="dropdown" style="float:left;">
  <button class="dropbtn">Chosse</button>
  <div class="dropdown-content" style="left:0;">
  <a href="https://fptapptech.herokuapp.com/displayshop1.php">Shop 1</a>
  <a href="https://fptapptech.herokuapp.com/displayshop2.php">Shop 2</a>
  <a href="#">Link 3</a>
  </div>
</div>

</body>
</html>
