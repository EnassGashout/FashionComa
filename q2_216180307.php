<?php 
include "dbconfig.php";
?>
<!DOCTYPE html>
<html>
<head>
<title> FinalExam </title>

</head>
<body>

<?php 
try{
$itemnumber= $_POST['itemno'];
$itemname= $_POST['itemname'];
$itemprice= $_POST['itemprice'];

$query= "INSERT INTO items(itemno,itemname,itemprice) VALUES (:itemnum,:itemname, :itemprice)";
$stmt=$DB_con-> prepare($query);

$stmt->bindParam(':itemnum',$itemnumber);
$stmt->bindParam(':itemname',$itemname);
$stmt->bindParam(':itemprice',$itemprice);

if($stmt->execute())
{
echo "You added successfully:".$itemname;
}
}
catch (Exception $ex)
{
echo $ex->getMessage();
}
?>


</body>
</html> 
