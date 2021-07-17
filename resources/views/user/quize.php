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
    </style>
    

</head>
<body style="direction: rtl;">
    <h1 id="home" style="float:center">BIT SET</h1>
    <p id="demo"></p>
    <script>
        var d = new Date();
        document.getElementById("demo").innerHTML = d;
    </script>
    
    <ul>
    <li><a href="/article">مقاله ها</a></li>
        <li><a href="/proj">درخواست انجام پروژه</a></li>
        <li><a href="/barnameh">برنامه کلاس ها و ثبت نام</a></li>
        <li><a href="/orgnalpage">برگشت</a></li>
        <li><a href="/">خروج</a></li>
        <li style="float:left"><a href="/about">درباره ما</a></li>

      </ul>
      <br>
      <div>
      <p>پس از نتیجه ازمون شما میتوانید در سطح مربوطه در هر یک از زبان های ارایه شده شرکت کنید.</p>
      <p>سطح ارایه شده پیشنهادی وبا توجه به نتیجه ازمون شماست.</p>
      </div>
      <br>
            
      <h3>زبان خود را انتخاب کنید؟</h3>
       <br>
       <div>
         <form action="/c" method="get">
            زبان برنامه نویسیC<br><br>
            <input type="submit" value="شروع آزمون"> <br> <br>
         </form>
         <form action="/c++" method="get">
                     زبان برنامه نویسی++C
                     <br><br>
                     <input type="submit" value="شروع آزمون">
        </form> <br>
        <form action="/python" method="get">
                 زبان برنامه نویسیpython
                 <br><br>
                 <input type="submit" value="شروع آزمون">
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
