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

.grid-container{
    display:grid;
    grid-template-columns:auto auto;
    background-color:#ABB2B9;
    padding:10px;
    grid-gap:20px;
}
.grid-item{
    background-color:white;
    border:1px solid rgba(0,0,0,0.8);
    padding:20px;
    text-align:right;

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
       
</style>
        
       

   </head>
   <body style="direction: rtl;">
   <p style="font-size:30px; text-align: center;color: black;">به نام خدا</p>
   
        <ul>
        <li><a href="/onlyforadmin">برگشت</a></li>
        <li><a href="/">خروج</a></li>
        <li style="float:left"><a href="/about">درباره ما</a></li>

      </ul>
       <br>
       <h1 id="home">برنامه کلاس‌ها:</h1>
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

$sql = "SELECT id, lesson_name,lessom_time ,profossor,student_num,price,date FROM education";

$result = $conn->query($sql);


if ($result->num_rows > 0) {
echo "<table>
<tr>
<th >شناسه درس</th>
  <th >نام درس</th>
  <th>زمان برگذاری</th>
  <th >مدرس</th>
  <th >تعداد زبان آموزان</th>
  <th >هزینه</th>
  <th >تاریخ شروع</th>
</tr>";
// output data of each row
while($row = $result->fetch_assoc()) {
echo "<tr><td>".$row["id"]."</td> <td>".$row["lesson_name"]."</td> <td>".$row["lessom_time"]."</td> <td> ".$row["profossor"]."</td><td> ".$row["student_num"]."</td><td> ".$row["price"]."</td><td> ".$row["date"]."</td></tr>";
}
echo "</table>";
} else {
echo "0 results";
}
$conn->close();
    
      ?>
       </div>
       <br>
       <div class="grid-container">
       <div class="grid-item">
       <h3>حذف کلاس:</h3> <br>
       <form action="/delclass" method="post">
            <div class="form-control">
                <label for='name'>شناسه درس</label>
                <input type="text" id="name" name="id" placeholder="نام " autocomplete="off">
            </div> <br>
                <input type="submit" value="حذف">
        </form>
       
       </div>
       <div class="grid-item">
       <h3>تغییر استاد:</h3> <br>
       <form action="/ostad" method="post">
       <div class="form-control">
       <label for='name'>شناسه درس</label>
                <input type="text" id="name" name="id" placeholder="نام " autocomplete="off">
            </div> <br>
            <div class="form-control">
                <label for='name'>نام استاد جایگزین</label>
                <input type="text" id="name" name="profossor" placeholder="نام " autocomplete="off">
            </div> <br>
                <input type="submit" value="اعمال تغییرات">
        </form>
       </div>
       <div class="grid-item">
       <h3>تغییر  زمان کلاس:</h3> <br>
       <form action="/time" method="post">
       <div class="form-control">
       <label for='name'>شناسه درس</label>
                <input type="text" id="name" name="id" placeholder="نام " autocomplete="off">
            </div> <br>
            <div class="form-control">
                <label for='name'>زمان جدید</label>
                <input type="text" id="name" name="lessom_time" placeholder="زمان" autocomplete="off">
            </div> <br>
                <input type="submit" value="اعمال تغییرات">
        </form>
       </div>
       <div class="grid-item">
       <h3>تغییر  هزینه کلاس:</h3> <br>
       <form action="/price" method="post">
       <div class="form-control">
       <label for='name'>شناسه درس</label>
                <input type="text" id="name" name="id" placeholder="نام " autocomplete="off">
            </div> <br>
            <div class="form-control">
                <label for='name'>هزینه جدید</label>
                <input type="text" id="name" name="price" placeholder="نام " autocomplete="off">
            </div> <br>
                <input type="submit" value="اعمال تغییرات">
        </form>
       </div>
       <div class="grid-item">
       <h3>تغییر  تاریخ برگزاری:</h3> <br>
       <form action="/date" method="post">
       <div class="form-control">
       <label for='name'>شناسه درس</label>
                <input type="text" id="name" name="id" placeholder="نام " autocomplete="off">
            </div> <br>
            <div class="form-control">
                <label for='name'>تاریخ جدید</label>
                <input type="text" id="name" name="date" placeholder="نام " autocomplete="off">
            </div> <br>
                <input type="submit" value="اعمال تغییرات">
        </form>
       </div>
       <div class="grid-item">
       <h3>اضافه کردن کلاس:</h3> <br>
       <form action="/addclass" method="post">
       <div class="form-control">
                <label for='name'>نام درس</label>
                <input type="text" id="name" name="lesson_name" placeholder="نام " autocomplete="off">
            </div> <br>
            <div class="form-control">
                <label for='name'>زمان برگزاری</label>
                <input type="text" id="name" name="lessom_time" placeholder="زمان برگزاری" autocomplete="off">
            </div> <br>
            <div class="form-control">
                <label for='name'>مدرس</label>
                <input type="text" id="name" name="profossor" placeholder="مدرس" autocomplete="off">
            </div> <br>
            <div class="form-control">
                <label for='name'>تعداد دانش آموزان</label>
                <input type="text" id="name" name="student_num" placeholder="تعداد " autocomplete="off">
            </div> <br>
            <div class="form-control">
                <label for='name'>هزینه</label>
                <input type="text" id="name" name="price" placeholder="هزینه" autocomplete="off">
            </div> <br>
            <div class="form-control">
                <label for='name'>تاریخ شروع کلاس</label>
                <input type="text" id="name" name="date" placeholder="تاریخ" autocomplete="off">
            </div> <br>
                <input type="submit" value="ارسال">
        </form>
       </div>
       
       </div>

    </body>
    <br>
   <hr style="color=black">
   <div id="footer">
  
   ایران </br>
        خوزستان </br>
        بندر ماهشهر </br>
        ناحیه صنعتی </br>
        تمامی حقوق این سایت متعلق به شرکت BITSET میباشد
   
   </div>
        
</html>