<html dir="rtl" lang="fa-IR">
<meta charset="utf-8">
    <head>
    <title>index_html</title>
    <style type="text/css">
    .header {
    
    text-align:center;
    color:black;
    
      background-color:blueviolet;
      padding:20px
      
    }   

    * {
      box-sizing: border-box;
    }
        .dropbtn {
           background-color:cornflowerblue;
          color: white;
         padding: 16px;
  font-size: 16px;
  border: none;
  cursor: pointer;
}
body {
        background-repeat: no-repeat;
        background-position: right top;
        background-attachment: scroll;
        background-color:deeppink;
        
    }

.dropdown {
  position: relative;
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

.dropdown-content a:hover {background-color: #f1f1f1}
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: right;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
.dropdown:hover .dropdown-content {
  display: block;
}

.dropdown:hover .dropbtn {
  background-color: #3e8e41;
}
        h4{color:fuchsia;font-style:normal;}
        p{font-style: italic;color: darkblue;}
        h1{color: darkblue;}
        li{color: darkmagenta;}
    
        
        div {
      border-radius: 25px;
      background-color: #f2f2f2;
      padding: 20px;
    } 
         .mySlides {display: none;}
         img {vertical-align: middle;}
         .slideshow-container {
         max-width: 1000px;
         position: relative;
          margin: auto;
         }
        

         .active {
         background-color: #717171;
          }
          
         input[type=text], input[type=password] {
          width: 100%;
          padding: 15px;
          margin: 5px 0 22px 0;
          display: inline-block;
          border: none;
          background: #f1f1f1;
        }
        
        
        input[type=text]:focus, input[type=password]:focus {
          background-color: #ddd;
          outline: none;
        }
        
       
        button {
          background-color:blue;
          color: white;
          padding: 14px 20px;
          margin: 8px 0;
          border: none;
          cursor: pointer;
          width: 100%;
          opacity: 0.9;
        }
        
       
        
        hr {
          border: 1px solid #f1f1f1;
          margin-bottom: 25px;
        }
         
        
       
        ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color:cyan;
}

li {
  float: right;
  border-right:1px solid #bbb;
}
li:last-child {
  border-right: none;
}

li a {
  display: block;
  color:indigo;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

li a:hover:not(.active) {
  background-color:hotpink;
}

.active {
  background-color:cyan;
}



.container {
            margin: 20px auto;
            width: 24%;
            text-align: left;
            border: 1px solid #ABB2B9;
            padding: 14px 26px;
            border-radius: 6px;
        }

        .form-control {
            padding: 8px;
        }

        input {
            border-radius: 5px;
            border: 1px solid #ABB2B9;
            padding: 8px 9px;
        }

        input#articles_id {
            margin-left: 37px;
        }

        input#text {
            margin-left: 37px;
        }

        input[type="submit"] {
            background-color: dodgerblue;
            color: black ;
            cursor: pointer;
        }

        label {
            margin-right: 22px;
        }
        .mySlides {display: none;}
        img {vertical-align: middle;}
        /* Slideshow container */
.slideshow-container {
  max-width: 1000px;
  position: relative;
  margin: auto;
}

/* Caption text */
.text {
  color: #f2f2f2;
  font-size: 15px;
  padding: 8px 12px;
  position: absolute;
  bottom: 8px;
  width: 100%;
  text-align: center;
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* The dots/bullets/indicators */
.dot {
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.active {
  background-color: #717171;
}

/* Fading animation */
.fade {
  -webkit-animation-name: fade;
  -webkit-animation-duration: 1.5s;
  animation-name: fade;
  animation-duration: 1.5s;
}

@-webkit-keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

@keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

/* On smaller screens, decrease text size */
@media only screen and (max-width: 300px) {
  .text {font-size: 11px}
}
</style>
        
       

   </head>
   <body style="direction: rtl;">
   <p style="font-size:30px; text-align: center;color: black;">به نام خدا</p>
   
        <ul>
        <li><a href="/proj">درخواست پروژه</a></li>
        <li><a href="/quize">تعیین سطح</a></li>
        <li><a href="/orgnalpage">برگشت</a></li>
        <li><a href="/">خروج</a></li>
        <li style="float:left"><a href="/about">درباره ما</a></li>

      </ul>
       <br>
       <h1 id="home">مقالات </h1>
<br>
      <div>
      <?php
  

     $servername = "127.0.0.1";
$username = "root";
$password = "";
$dbname = "bitset";
$conn = new mysqli($servername, $username,$password, $dbname);
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT id, article_name, collector ,abrevation,link FROM articles";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
echo "<table>
<tr>
  <th >شناسه</th>
  <th >نام مقاله</th>
  <th>گردآورنده</th>
  <th >خلاصه</th>
  <th >لینک تماشا</th>
</tr>";
while($row = $result->fetch_assoc()) {
echo "<tr><td>".$row["id"]."</td><td>".$row["article_name"]."</td> <td>".$row["collector"]."</td> <td> ".$row["abrevation"]."</td><td><a href=".$row["link"].">کلیک کنید</td></tr>";
}
echo "</table>";
} else {
echo "0 results";
}
$conn->close();
    
      ?>

      </div>
      <br>
      <div class="slideshow-container">

<div class="mySlides fade">
  <div class="numbertext">1 / 3</div>
  <img src="https://jamejamonline.ir/Media/Image/1394/01/23/635644263137642647.jpg" style="width:100%">
  <div class="text">Caption Text</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">2 / 3</div>
  <img src="https://isi-isc.com/storage/media-center/images/ac-image-bU1544540755BY.jpeg" style="width:100%">
  <div class="text">Caption Two</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">3 / 3</div>
  <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcShMvOJpJqGRiBLx5fBYe2eLIsrHOXrsP9J-Per_MhwisJEH2_SFNhFqJqng-r6Z-FuWHo&usqp=CAU" style="width:100%">
  <div class="text">Caption Three</div>
</div>

</div>

<script>
var slideIndex = 0;
showSlides();

function showSlides() {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}    
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
  setTimeout(showSlides, 1000); // Change image every 2 seconds
}
</script>

      <br>
      <h1 id="home">نظرات</h1>
      <br>
      <div>
      <?php
      
      $servername = "127.0.0.1";
      $username = "root";
      $password = "";
      $dbname = "bitset";
      
      // Create connection
      $conn = new mysqli($servername, $username,$password, $dbname);
      // Check connection
      if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
      }
      $sql2="SELECT id,name,text,articles_id FROM table__acomment";
      $result2 = $conn->query($sql2);
      
      if($result2->num_rows > 0)
      {
        echo "<table>
<tr>
  <th >شناسه</th>
  <th >نام </th>
  <th>نظر</th>
  <th>مربوط به مقاله</th>

</tr>";
while($row = $result2->fetch_assoc()) 
{
  echo "<tr><td>".$row["id"]."</td><td>".$row["name"]."</td> <td>".$row["text"]."</td> <td> ".$row["articles_id"]."</td></tr>";
}
echo "</table>";
      }
     
    else {
echo "0 results";
}
$conn->close();
      ?>


</div>
<br>
<h1 id="home">ثپت نظرات</h1>
<br>
<div style="background-color: #ABB2B9;">
<form action="/pcomment" method="post">
            <div class="form-control">
                <label for='name'>نام</label>
                <input type="text" id="name" name="name" placeholder="نام خود را وارد کنید" autocomplete="off">
            </div>
            <br>
            <div class="form-control">
                <label for='text'>نظر</label>
                <input type="text" id="text" name="text" placeholder="نظر خود را بنویسید" autocomplete="off">
            </div>
            <br>
            <div class="form-control">
                <label for='anumber'>شماره مقاله</label>
                <input type="text" id="articles_id" name="articles_id" placeholder="شماره مقاله مربوطه" autocomplete="off">
            </div>
            <br>
                <input type="submit" value="ارسال">
            
        </form>
      
</div>
      
    </body>
    <br>
   <hr style="color=black">
   <div>
   <footer background-color:white >
   ایران </br>
        خوزستان </br>
        بندر ماهشهر </br>
        ناحیه صنعتی </br>
        تمامی حقوق این سایت متعلق به شرکت BITSET میباشد
   </footer>
   </div>
        
</html>