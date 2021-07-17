<?php

echo "ok3";
 $id=$_REQUEST["id"];
if((strlen($id)>0))
{
    $db=mysqli_connect("127.0.0.1","root","","bitset") or die(mysqli_connect_error());
    $result=mysqli_query($db,"DELETE FROM education WHERE id=$id");
    mysqli_close($db);
    echo"عملیات با موفقیت انجام شد<br />";
}
else{
    echo"ناموفق";
}
?>