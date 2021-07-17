<?php

echo "ok3";
 $project_name=$_REQUEST["project_name"];$description=$_REQUEST["description"];
 $employer=$_REQUEST["employer"];$date=$_REQUEST["date"];
if((strlen($project_name)>0)&&(strlen($description)>0)&&(strlen($employer)>0)&&(strlen($date)>0))
{
    $db=mysqli_connect("127.0.0.1","root","","bitset") or die(mysqli_connect_error());
    $result=mysqli_query($db,"INSERT INTO projects(project_name,description,employer,date)VALUES('$project_name','$description','$employer','$date');")or die(mysqli_error($db));
    mysqli_close($db);
    echo"درس با موفقیت اضافه شد<br />";
}
else{
    echo"نا موفق";
}
?>