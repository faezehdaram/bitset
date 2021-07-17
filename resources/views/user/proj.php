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
        #example1{background-image: url("./vvvvvvvvvv");
                      background-repeat: no-repeat;
                       background-position: center;
                      background-attachment: scroll; 
                      padding: 15pt;
                      
                   }
        #example2{
            background-image: url("./b1");
                      background-repeat: no-repeat;
                       background-position:center;
                      background-attachment: scroll; 
                      padding: 15pt;
        }
        
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
         .text {
          color: #f2f2f2;
          font-size: 15px;
          padding: 8px 12px;
           position: absolute;
           bottom: 8px;
           width: 100%;
           text-align: center;
         }
         .numbertext {
            color: #f2f2f2;
            font-size: 12px;
            padding: 8px 12px;
            position: absolute;
            top: 0;
          }
          


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


         @media only screen and (max-width: 300px) {
          .text {font-size: 11px}
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
        
        button:hover {
          opacity:1;
        }
        
        
        .cancelbtn {
          padding: 14px 20px;
          background-color: #f44336;
        }
        
        
        .cancelbtn, .signupbtn {
          float: left;
          width: 50%;
        }
        
        
        .container {
          padding: 16px;
        }
        
        
        .modal {
          display: none; 
          position: fixed; 
          z-index: 1; 
          left: 0;
          top: 0;
          width: 100%; 
          height: 100%; 
          overflow: auto; 
          background-color: #474e5d;
          padding-top: 50px;
        }
        
        
        .modal-content {
          background-color: #fefefe;
          margin: 5% auto 15% auto; 
          border: 1px solid #888;
          width: 80%; 
        }
        
        
        hr {
          border: 1px solid #f1f1f1;
          margin-bottom: 25px;
        }
         
        
        .close {
          position: absolute;
          right: 35px;
          top: 15px;
          font-size: 40px;
          font-weight: bold;
          color: #f1f1f1;
        }
        
        .close:hover,
        .close:focus {
          color: #f44336;
          cursor: pointer;
        }
        
        
        .clearfix::after {
          content: "";
          clear: both;
          display: table;
        }
        
         
        @media screen and (max-width: 300px) {
          .cancelbtn, .signupbtn {
             width: 100%;
          }
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
  background-color:hotpink;
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
        table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  background-color: white;
  width: 80%;
}

td, th {
  border: 1px solid black;
  text-align: right;
  padding: 8px;
}
        label {
            margin-right: 22px;
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
        </style>

   </head>
   <body style="direction: rtl;">
   <p style="font-size:30px; text-align: left;color: black;">BITSET</p>
        <ul>
        <li><a href="/article">مقاله ها</a></li>
        <li><a href="/quize">تعیین سطح و شرکت در دوره</a></li>
        <li><a href="/barnameh">برنامه کلاس ها و ثبت نام</a></li>
        <li><a href="/orgnalpage">برگشت</a></li>
        <li><a href="/">خروج</a></li>
        <li style="float:left"><a href="/about">درباره ما</a></li>

      </ul>
       <p style="font-size:30px;color: black;">ثبت سفارش</p>
       <div>
       <h3>توجه!!!!!!</h3>
       <p>خوشحالیم از اینکه شرکت مارا برای ارائه خدمات انتخاب کردید</p>
       <p>برای ثبت درخواست خود ابتدا لازم است مشخصات کاملی از پروژه را در فرم زیر ثبت کنید </p>
       <p>حداکثر تا سه روز جواب نهایی را در پایین میتوانید مشاهده کنید</p>
       <p>در صورت موفق نبودن با قیمت ویا مهندسی که پروژه را برعهده گرفته ویا زمان تحویل در خواست خود راحذف کنید.</p>
       <p>و یا با شرکت تماس گرفته  پیشنهاد خود را بگویید.</p>
       <p>شما میتوانید وضعیت روزانه پروژه خود را در جدول جواب نهایی  ستون توضیحات مشاهده کنید.</p>
       <p></p>
       </div>
       <br>
       <div class="grid-container">
       <div class="grid-item">
         <form action="/projact2" method="post" enctype="multipart/form-data">
         <div class="form-control">
              <label for='name'>نام پروژ</label>
                <input type="text" id="name" name="project_name" placeholder="نام " autocomplete="off">
            </div> <br>
            <div class="form-control">
                <label for='name'>توضیحات</label>
                <input type="text" id="name" name="description" placeholder="توضیحات " autocomplete="off">
            </div> <br>
            <div class="form-control">
              <label for='name'>نام کارفرما</label>
                <input type="text" id="name" name="employer" placeholder="نام " autocomplete="off">
            </div> <br>
            <div class="form-control">
                <label for='name'>زمان تحویل پروژه</label>
                <input type="text" id="name" name="date" placeholder="تاریخ" autocomplete="off">
            </div> <br>
           <input type="submit" value="ارسال">
         </form>
         </div>
       </div>
       <br>
       <h1 id="home">جواب نهایی:</h1>
 <div style="background-color:#ABB2B9;">
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

$sql = "SELECT id,project_id,programer_name,description,price,date FROM answer";

$result = $conn->query($sql);


if ($result->num_rows > 0) {
echo "<table>
<tr>
<th >شناسه</th>
<th >شناسه پروژه</th>
<th>نام برنامه نویس</th>
<th >توضیحات برنامه نویس</th>
<th >هزینه</th>
<th >تاریخ تحویل</th>
</tr>";
// output data of each row
while($row = $result->fetch_assoc()) {
echo "<tr><td>".$row["id"]."</td><td>".$row["project_id"]."</td> <td>".$row["programer_name"]."</td> <td> ".$row["description"]."</td><td> ".$row["price"]."</td><td>".$row["date"]."</td></tr>";

}
echo "</table>";
} else {
echo "0 results";
}
$conn->close();
   ?>
   <br>
   <form action="/procomment" method="post">
            <div class="form-control" style=" width: 24%;">
                <label for='name'>شماره شناسه </label>
                <input type="text" id="name" name="name" placeholder="نام خود را وارد کنید" autocomplete="off">
            </div>
            <br>
                <input type="submit" value="حذف درخواست">
            
        </form>
</div>
<br>
<br>
      <h1 id="home">نظرات</h1>
      <br>
      <div style="background-color:#ABB2B9;">
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
      $sql2="SELECT id,name,text,projects_id FROM table__bcomment";
      $result2 = $conn->query($sql2);
      
      if($result2->num_rows > 0)
      {
        echo "<table>
<tr>
  <th >نام </th>
  <th>نظر</th>
  <th>مربوط به پروژه</th>

</tr>";
while($row = $result2->fetch_assoc()) 
{
  echo "<tr><td>".$row["name"]."</td> <td>".$row["text"]."</td> <td> ".$row["projects_id"]."</td></tr>";
}
echo "</table>";
      }
     
    else {
echo "0 results";
}
$conn->close();
      ?>


</div><br>
<h1 id="home">ثپت نظرات:</h1>
<br>
<div style="background-color: #ABB2B9;">
<form action="/procomment" method="post">
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
                <label for='anumber'>شناسه پروژه</label>
                <input type="text" id="projects_id" name="projects_id" placeholder="شماره مقاله مربوطه" autocomplete="off">
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
        بندر ماهشهر  </br>
        ناحیه صنعتی </br>
        تمامی حقوق این سایت متعلق به شرکت BITSET است
   </footer>
        
   </div>
</html>