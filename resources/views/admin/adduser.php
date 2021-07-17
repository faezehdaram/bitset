<?php

echo "ok3";
 $id=$_REQUEST["id"];
 $role_id=$_REQUEST["role_id"];
if((strlen($id)>0)&&(strlen($role_id)>0))
{
    $db=mysqli_connect("127.0.0.1","root","","bitset") or die(mysqli_connect_error());
    $result=mysqli_query($db,"UPDATE users SET role_id='$role_id' WHERE id=$id");
    mysqli_close($db);
    echo"تغییرات موفق بوده<br />";
}
else{
    echo"نا موفق";
}
?>