<?php

echo "ok3";
 $id=$_REQUEST["id"];
 $lessom_time=$_REQUEST["lessom_time"];
if((strlen($id)>0)&&(strlen($lessom_time)>0))
{
    $db=mysqli_connect("127.0.0.1","root","","bitset") or die(mysqli_connect_error());
    $result=mysqli_query($db,"UPDATE education SET lessom_time= '$lessom_time' WHERE id=$id");
    mysqli_close($db);
    echo"تغییرات موفق بوده<br />";
}
else{
    echo"نا موفق";
}
?>