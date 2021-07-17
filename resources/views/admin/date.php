<?php

echo "ok3";
 $id=$_REQUEST["id"];
 $date=$_REQUEST["date"];
if((strlen($id)>0)&&(strlen($date)>0))
{
    $db=mysqli_connect("127.0.0.1","root","","bitset") or die(mysqli_connect_error());
    $result=mysqli_query($db,"UPDATE education SET date='$date' WHERE id=$id");
    mysqli_close($db);
    echo"تغییرات موفق بوده<br />";
}
else{
    echo"نا موفق";
}
?>