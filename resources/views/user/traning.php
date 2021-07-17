<html dir="rtl" lang="fa-IR">
<meta charset="utf-8">
<head>
    <title>contest</title>
    
    <style>
    .header {
    
    text-align:center;
    color:black;
    
      background-color:blueviolet;
      padding:20px
      
    }   

    * {
      box-sizing: border-box;
    }

        
    body {
        background-repeat: no-repeat;
        background-position: right top;
        background-attachment: scroll;
        background-color:deeppink;
        
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
  background-color:hotpink;
}

li {
  float: left;
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
    div {
      border-radius: 25px;
      background-color: #f2f2f2;
      padding: 20px;
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
    <h1 id="home" >BIT SET</h1>
    <p id="demo"></p>
    <script>
        var d = new Date();
        document.getElementById("demo").innerHTML = d;
    </script>
    
    <ul>
        <li><a href="/proj">درخواست پروژه</a></li>
        <li><a href="/quize">آزمونک</a></li>
        <li><a href="/article">مقاله ها</a></li>
        <li><a href="/orgnalpage">برگشت</a></li>
        <li><a href="/">خروج</a></li>
        <li style="float:left"><a href="/about">درباره ما</a></li>

      </ul>
      <br>
     
            <div>
            زبان خود را انتخاب کنید؟

            <form action="/">
  <input type="radio" id="C" name="fav_language" value="C">
  <label for="C">C</label><br>
  <input type="radio" id="C++" name="fav_language" value="C++">
  <label for="C++">C++</label><br>
  <input type="radio" id="javascript" name="fav_language" value="JavaScript">
  <label for="javascript">JavaScript</label> <br> <br>
<input type="submit" value="ارسال">
</form> 
            
            </div>
        
            <br>
<h1 id="home">ثپت نظرات</h1>
<br>
<div style="background-color: #ABB2B9;">
<form action="/tcomment" method="post">
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
        <h1 id="home">موفق باشید</h1>

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
