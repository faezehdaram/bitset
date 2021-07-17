<?php

echo "ok3";
 $article_name=$_REQUEST["article_name"];$id=$_REQUEST["id"];
if((strlen($article_name)>0)&&(strlen($id)>0))
{
    $db=mysqli_connect("127.0.0.1","root","","bitset") or die(mysqli_connect_error());
    $result=mysqli_query($db,"DELETE FROM articles WHERE id=$id");
    mysqli_close($db);
    echo"data has been inserted successfully<br />";
}
else{
    echo"wrong input";
}
?>