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
          border: 1px solid black;
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
    </style>
    

</head>
<body style="direction: rtl;">
    <h1 id="home" >BIT SET</h1>
    <p id="demo"></p>
    <script>
        var d = new Date();
        document.getElementById("demo").innerHTML = d;
    </script>
      <br>
      <div>
      <h2>در صورت  کسب نمره کامل یک دوره آموزشی هدیه خواهید گرفت.</h2>
      </div>
      <br>
      
            <div>
           
                        <form action="/cphp" method="GET" enctype="multipart/form-data">
                            <h1>سوال اول:</h1>
                            
                            <p>زبان C چه نوع زبانی است؟</p><br>
                            <input type="radio" name="text1" value="p">زبان پایه <br>
                            <input type="radio" name="text1" value="skh">زبان ساخت یافته <br>
                            <input type="radio" name="text1" value="ghaer">زبان غیر ساخت یافته <br>
                            <input type="radio" name="text1" value="non">هیچکدام
                            <br><br><br>
                            <hr>
                            <h1>سوال دوم:</h1>
                            
                            <p>در این زبان هر دستور به چه چیزی ختم میشود؟</p><br>
                            <input type="radio" name="text2" value="simi">سمیکولن <br>
                            <input type="radio" name="text2" value="cama">کاما <br>
                            <input type="radio" name="text2" value="noghte">نقطه <br>
                            <input type="radio" name="text2" value="donoghte">دونقطه
                            <br><br><br>
                            <hr>
                            <h1>سوال سوم:</h1>
                            
                            <p>برای مقادیر اعشاری از کدام نوع استفاده میشود؟</p>
                            <br>
                            <input type="radio" name="text3" value="double">double <br>
                            <input type="radio" name="text3" value="int">int <br>
                            <input type="radio" name="text3" value="char">char <br>
                            <input type="radio" name="text3" value="flout">flout <br>
                            <br><br><br>
                            <hr>
                            <h1>سوال چهارم:</h1>
                            <p>کدام عملگر زیر نامساوی را تعیین می کند؟</p>
                            <br>
                            <input type="radio" name="text4" value="==">== <br>
                            <input type="radio" name="text4" value="!=">!= <br>
                            <input type="radio" name="text4" value="=">= <br>
                            <input type="radio" name="text4" value="non">هیچکدام
                            <br><br><br>
                            <hr>
                            <h1>سوال پنجم:</h1>
                            
                            <p>در خواندن یک رشته از ورودی معادل دستور printf کدام یک از گزینه های زیر است ؟</p>
                            <br>
                            <input type="radio" name="text5" value="putch">putch <br>
                            <input type="radio" name="text5" value="puts">puts <br>
                            <input type="radio" name="text5" value="gets">gets <br>
                            <input type="radio" name="text5" value="getche">getche
                            <p><input type="submit" value="ارسال"></p>
                        </form>
    
            
            </div>
            <br> <br>
            <form action="/orgnalpage" method="get">
                 <input type="submit" value="بازگشت">
       </form>  
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
