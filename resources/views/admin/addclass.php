<?php

echo "ok3";
 $lesson_name=$_REQUEST["lesson_name"];$lessom_time=$_REQUEST["lessom_time"];
 $profossor=$_REQUEST["profossor"];$student_num=$_REQUEST["student_num"];
 $price=$_REQUEST["price"];$date=$_REQUEST["date"];
if((strlen($lesson_name)>0)&&(strlen($lessom_time)>0)&&(strlen($profossor)>0)&&(strlen($student_num)>0)&&(strlen($price)>0)&&(strlen($date)>0))
{
    $db=mysqli_connect("127.0.0.1","root","","bitset") or die(mysqli_connect_error());
    $result=mysqli_query($db,"INSERT INTO education(lesson_name,lessom_time,profossor,student_num,price,date)VALUES('$lesson_name','$lessom_time','$profossor','$student_num','$price','$date');")or die(mysqli_error($db));
    mysqli_close($db);
    echo"درس با موفقیت اضافه شد<br />";
}
else{
    echo"نا موفق";
}
?>