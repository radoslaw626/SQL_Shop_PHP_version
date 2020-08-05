<?php
session_start();
require_once "connect.php";
if($_SESSION['loggedIn'] !=true){
    header('Location: index.php');
}
?>
<html lang="pl">
<head>
    <style>
        table, th, td {
            border: 1px solid black;
            border-collapse: collapse;
            padding: 15px;
        }
    </style>
<title> Grocery Shopping Online </title>
</head>
<body>
<h1>Your profile:</h1>
<?php
echo "<p>Hello back ".$_SESSION['user'].'.';
echo "<br><br/>";
$connection=new mysqli($host,$dbUser,$dbPassword,$dbName);
if($connection->connect_errno!=0)
{
    echo "Error";
}
else{
$sql ="select * from products";
    $result = $connection->query($sql);
    if ($result->num_rows > 0) {
  echo "<table><tr><th>ID</th><th>Name</th><th>Quantity</th><th>Price</th></tr>";
  while($row = $result->fetch_assoc()) {
      echo "<tr><td>".$row["id"]."</td><td>".$row["product"]."</td><td>".$row["quantity"]."</td><td> ".$row["price"]."</td></tr>";
  }
  echo "</table>";
} else {
        echo "0 results";
    }
$connection->close();
}
?>
<br><br/>
<a href="logout.php"> Log out</a>
</body>
</html>
