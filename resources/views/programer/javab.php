<?php

echo "ok3";
 $project_id=$_REQUEST["project_id"];$programer_name=$_REQUEST["programer_name"];
 $description=$_REQUEST["description"];$date=$_REQUEST["date"];
 $price=$_REQUEST["price"];
if((strlen($project_id)>0)&&(strlen($programer_name)>0)&&(strlen($description)>0)&&(strlen($price)>0)&&(strlen($date)>0))
{
    $db=mysqli_connect("127.0.0.1","root","","bitset") or die(mysqli_connect_error());
    $result=mysqli_query($db,"INSERT INTO answer(project_id,programer_name,description,price,date)VALUES('$project_id','$programer_name','$description','$price','$date');")or die(mysqli_error($db));
    mysqli_close($db);
    echo"نظر با موفقیت اضافه شد<br />";
}
else{
    echo"نا موفق";
}
?>