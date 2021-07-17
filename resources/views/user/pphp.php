<html dir="rtl" lang="fa-IR">
<meta charset="utf-8">
    <head>
    <title>index_html</title>
    <style type="text/css">
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
        background-color:cyan;
        
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
         .text {
          color: #f2f2f2;
          font-size: 15px;
          padding: 8px 12px;
           position: absolute;
           bottom: 8px;
           width: 100%;
           text-align: center;
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
        
        
       
        * {box-sizing: border-box;}
        .header {
         overflow: hidden;
         background-color:#3349FF ;
        padding: 5px 10px;
        }
        
        hr {
          border: 1px solid #f1f1f1;
          margin-bottom: 25px;
        }
        
        
        .clearfix::after {
          content: "";
          clear: both;
          display: table;
        }
        ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color:#3399FF;
}

li {
  float:right;
  border-right:1px solid #bbb;
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
  background-color:#3399FF;
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

.active1{
  background-color: #717171;
}

/* Fading animation */
.fade {
  -webkit-animation-name: fade;
  -webkit-animation-duration: 1s;
  animation-name: fade;
  animation-duration: 1s;
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
@media only screen and (max-width: 100px) {
  .text {font-size: 11px}
}
        </style>

   </head>
   <body style="direction: rtl;">
   <div class="header">
   <p style="font-size:25px; text-align: center;color: black;font-weight: bold;">BITSET COMPANY</p>
   </div><br>
   <ul>
   <li><a href="/article">مقاله ها</a></li>
        <li><a href="/proj">درخواست انجام پروژه</a></li>
        <li><a href="/quize">تعیین سطح و شرکت در دوره</a></li>
        <li><a href="/barnameh">برنامه کلاس ها و ثبت نام</a></li>
        <li><a href="/orgnalpage">برگشت</a></li>
        <li><a href="/">خروج</a></li>
        <li style="float:left"><a href="/about">درباره ما</a></li>

      </ul>
      <br>
<?php
      $temp1=@$_GET["text1"];
      $temp2=@$_GET["text2"];
      $temp3=@$_GET["text3"];
      $temp4=@$_GET["text4"];
      $number=0;
   $text=array($temp1,$temp2,$temp3,$temp4);
   $right=array("print","#","int","py");
   $len=count($right);
   if(isset($temp1)&isset($temp2)&isset($temp3)&isset($temp4))
   {
     for($i=0;$i<$len;$i++)
      {
        if($right[$i]==$text[$i])
          $number++;
      }
      if($number==4)
       {
            print "<h1 style = margin-top:50px;float:center;>****شما قادر به کسب تمام نمره شده اید****</h1>";

            print"<div> 
            
            <h3 style = margin-top:50px;float:center;>پیشنهاد ما شرکت در دوره فوق پیشرفته زبان python است.</h3>
            <form action='/trpython' method='get'>
            زبان برنامه نویسیpython<br><br>
            <input type='submit' value='مشاهده برنامه کلاس ها'> <br> <br>
            </form>
            
            
            </div>";

           
       }
     else if($number>2)
      {
        echo "<h1 style=margin:50px;>شما$number سوال را پاسخ داده اید</h1>";
        print"<div> 
            
        <h3 style = margin-top:50px;float:center;>پیشنهاد ما شرکت در دوره پیشرفته زبان python است.</h3>
        <form action='/trpython' method='get'>
        زبان برنامه نویسیpython<br><br>
        <input type='submit' value='مشاهده برنامه کلاس ها'> <br> <br>
        </form>
        
        
        </div>";


      }
      else
      {

        echo "<h1 style=margin:50px;>شما$number سوال را پاسخ داده اید</h1>";
        print"<div> 
            
        <h3 style = margin-top:50px;float:center;>پیشنهاد ما شرکت در دورهاابتدایی زبان python است.</h3>
        <form action='/trpython' method='get'>
        زبان برنامه نویسیpython<br><br>
        <input type='submit' value='مشاهده برنامه کلاس ها'> <br> <br>
        </form>
        
        
        </div>";
      }
       
  }

 ?>
  </body>
   <br>
<hr style="color=black">
<br>
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