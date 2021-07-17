<?php

echo "ok3";
 $article_name=$_REQUEST["article_name"];$collector=$_REQUEST["collector"];
 $abrevation=$_REQUEST["abrevation"];$link=$_REQUEST["link"];
if((strlen($article_name)>0)&&(strlen($collector)>0)&&(strlen($abrevation)>0)&&(strlen($link)>0))
{
    $db=mysqli_connect("127.0.0.1","root","","bitset") or die(mysqli_connect_error());
    $result=mysqli_query($db,"INSERT INTO articles(article_name,collector,abrevation,link)VALUES('$article_name','$collector','$abrevation','$link');")or die(mysqli_error($db));
    mysqli_close($db);
    echo"data has been inserted successfully<br />";
}
else{
    echo"wrong input";
}
?>