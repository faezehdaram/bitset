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
   </div>
  
   <script>
    week= new Array("يكشنبه","دوشنبه","سه شنبه","چهارشنبه","پنج شنبه","جمعه","شنبه")
    months = new Array("فروردين","ارديبهشت","خرداد","تير","مرداد","شهريور","مهر","آبان","آذر","دي","بهمن","اسفند");
    a = new Date();
    d= a.getDay();
    day= a.getDate();
    month = a.getMonth()+1;
    year= a.getYear();
    year = (year== 0)?2000:year;
    (year<1000)? (year += 1900):true;
    year -= ( (month < 3) || ((month == 3) && (day < 21)) )? 622:621;
    switch (month) {
    case 1: (day<21)? (month=10, day+=10):(month=11, day-=20); break;
    case 2: (day<20)? (month=11, day+=11):(month=12, day-=19); break;
    case 3: (day<21)? (month=12, day+=9):(month=1, day-=20); break;
    case 4: (day<21)? (month=1, day+=11):(month=2, day-=20); break;
    case 5:
    case 6: (day<22)? (month-=3, day+=10):(month-=2, day-=21); break;
    case 7:
    case 8:
    case 9: (day<23)? (month-=3, day+=9):(month-=2, day-=22); break;
    case 10:(day<23)? (month=7, day+=8):(month=8, day-=22); break;
    case 11:
    case 12:(day<22)? (month-=3, day+=9):(month-=2, day-=21); break;
    default: break;
    }
    document.write(" "+week[d]+" "+day+" "+months[month-1]+" "+ year);
    </script> 
      <span style="font-size:20pt;direction:rtl "> 
      <script>showdate() </script>
      </span>
      <h4 id="demo" style=" text-align:center;">PM 6:35:52 </h4>
    <script>

    var myVar = setInterval(myTimer, 1000);
    function myTimer() {
        var d = new Date();
        document.getElementById("demo").innerHTML = d.toLocaleTimeString();
    }
    
    </script>
        <ul>
        <li><a href="/password">تعویض رمز عبور</a></li>
        <li><a href="/article">مقاله ها</a></li>
        <li><a href="/proj">درخواست انجام پروژه</a></li>
        <li><a href="/quize">تعیین سطح و شرکت در دوره</a></li>
        <li><a href="/barnameh">برنامه کلاس ها و ثبت نام</a></li>
        <li><a href="/">خروج</a></li>
        <li style="float:left"><a href="/about">درباره ما</a></li>

      </ul>
      <br>
      
      <div class="slideshow-container">

<div class="mySlides fade">
  <div class="numbertext">1 / 3</div>
  <img src="https://blog.faradars.org/wp-content/uploads/2019/01/best-programing-languages.jpg" style="width:100%">
  <div class="text">Caption Text</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">2 / 3</div>
  <img src="https://lh3.googleusercontent.com/proxy/-LPnld2qzMz9ZZOxCVOmOQvXs3UyM_X1ftlgco7YTQb1rN77VcTnIBiLwq4eL-j-LLQObD63qwS6ihBbmFAOT2Db9R5VTtIlmH4C1_Bir64lPSxtBvYAMNtujZgQ6zRwhmpyKe7P6yyM4E48l5s2" style="width:100%">
  <div class="text">Caption Two</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">3 / 3</div>
  <img src="https://maktabkhooneh.org/mag/wp-content/uploads/2021/01/0-How-To-Become-a-Programmer.jpg" style="width:100%">
  <div class="text">Caption Three</div>
</div>


<br>

<div style="text-align:center">
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
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
  setTimeout(showSlides, 20000); // Change image every 2 seconds
}
</script>

  </div>
</div>
        </div>
        <br>
        <div style="background-image: url('b1.PNG');">
           <p style="font-size:70px;text-align:center;color: white;">تخفیف شگفت انگیز </p>
           <p style="font-size:30px;text-align:center;color: white;">
            رجوع به صفحه آموزش
        </p>

        </div>
        
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