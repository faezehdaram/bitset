<?php
 $name=$_REQUEST["name"];$lastname=$_REQUEST["lastname"];
 $education_id=$_REQUEST["education_id"];
if((strlen($name)>0)&&(strlen($lastname)>0)&&(strlen($education_id)>0))
{
    $db=mysqli_connect("127.0.0.1","root","","bitset") or die(mysqli_connect_error());
    $result=mysqli_query($db,"INSERT INTO reqclass(name,lastname,education_id)VALUES('$name','$lastname','$education_id');")or die(mysqli_error($db));
    mysqli_close($db);
    echo"ثبت نام با موفقیت انجام شد برای پرداخت شهریه حضوری تشریف بیارید<br />";
}
else{
    echo"wrong input";
}



?>