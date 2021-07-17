<?php

echo "ok3";
 $id=$_REQUEST["id"];
 $price=$_REQUEST["price"];
if((strlen($id)>0)&&(strlen($price)>0))
{
    $db=mysqli_connect("127.0.0.1","root","","bitset") or die(mysqli_connect_error());
    $result=mysqli_query($db,"UPDATE education SET price= '$price' WHERE id=$id");
    mysqli_close($db);
    echo"تغییرات موفق بوده<br />";
}
else{
    echo"نا موفق";
}
?>