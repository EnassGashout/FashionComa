<?php
    session_start();
?>
<?php
 $servername = "mysql:host=localhost;dbname=items";
 $username = "root";
 $password = "";
 $db = "items";
 $option = array( PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8");

try {
    $con = new PDO($servername , $username , $password , $option );
    $con->setAttribute(PDO::ATTR_ERRMODE , PDO::ERRMODE_EXCEPTION);
}
catch(PDOException $e){
    echo $e->getMessage();
}
 ?>
<!DOCTYPE html>
<html>
<head>

</head>
<body>
<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST"){
        $itemno=$_POST["itemno"];
        $itemname=$_POST["itemname"];
        $itemprice=$_POST["itemprice"];

             global $con;
             $query = $con->prepare("INSERT INTO items SET itemno = ? ,itemname = ? ,itemprice =? ;");

            $query->execute(array($itemno  ,  $itemname , $itemprice )); } 
        ?>
 <h1>أدخل العنصـــــــر</h1>
<form action="<?php echo $_SERVER['PHP_SELF']; ?>" style="border:1px solid #ccc" method="post">
  <div class="container">
    
    <label for="itemno"><b> number</b></label>
    <input type="text" placeholder="item number.." name="itemno" required>
<br>
<br>
    <label for="itemname"><b> name</b></label>
    <input type="text" placeholder="item name.." name="itemname" required>
	<br>
	<br>
    <label for="itemprice"><b>price</b></label>
    <input type="text" placeholder="item price.." name="itemprice" required>
   <div class="">
   <br>
   <br>
      <button type="submit" class=""> ADD ITEM</button>

    </div>
  </div>
</form>
</body>
</html>
