<?php

echo "ok3";
 $name=$_REQUEST["name"];$text=$_REQUEST["text"];
 $articles_id=$_REQUEST["articles_id"];
if((strlen($name)>0)&&(strlen($text)>0)&&(strlen($articles_id)>0))
{
    $db=mysqli_connect("127.0.0.1","root","","bitset") or die(mysqli_connect_error());
    $result=mysqli_query($db,"INSERT INTO table__acomment(text,name,articles_id)VALUES('$text','$name','$articles_id');")or die(mysqli_error($db));
    mysqli_close($db);
    echo"data has been inserted successfully<br />";
}
else{
    echo"wrong input";
}
?>
