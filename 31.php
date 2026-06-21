<html>
    <head><title>明新科技大學資訊管理系</title>  // 網頁標題  
    <meta charset="utf-8">  // 設定網頁的字符編碼為UTF-8
    <link href="https://cdn.bootcss.com/flexslider/2.6.3/flexslider.min.css" rel="stylesheet">  // 引入FlexSlider的CSS樣式表
    <script src="https://cdn.bootcss.com/jquery/2.2.2/jquery.min.js"></script>  // 引入jQuery庫
    <script src="https://cdn.bootcss.com/flexslider/2.6.3/jquery.flexslider-min.js"></script>  // 引入FlexSlider的JavaScript文件          
    <script>
        $(window).load(function() {  // 當網頁加載完成後執行以下程式碼
            $('.flexslider').flexslider({
                animation: "slide",
                rtl: true
            });
        });
    </script>
    <style>  // 設定網頁的CSS樣式
        *{
            margin:0;          // 設定所有元素的外邊距為0
            color:gray;        // 設定所有元素的文字顏色為灰色
            text-align:center; // 設定所有元素的文字水平居中
        }
        /* top */    // 設定網頁頂部區域的樣式
        .top{
             background-color: white;   // 設定頂部區域的背景顏色為白色
        }
        .top .container{   // 設定頂部區域內部容器的樣式
            display: flex;    // 使用彈性盒模型布局
            align-items: center;   // 設定容器內部元素垂直居中對齊
            justify-content: space-between;   // 設定容器內部元素水平分散對齊
            padding:10px;   // 設定容器的內邊距為10像素
        }
        .top .logo{  // 設定頂部區域的logo樣式
            /*border:1px solid red;*/
            font-size: 35px;
            font-weight: bold;  // 設定文字加粗
        }
        .top .logo img{  // 設定頂部區域的logo圖片樣式
            width: 100px;
            vertical-align: middle;
        }
        .top .top-nav{  // 設定頂部區域的導航欄樣式
            /*border:1px solid red;*/  // 設定頂部區域的導航欄樣式
            font-size: 25px;
            font-weight: bold;       
        }
        .top .top-nav a{  // 設定頂部區域的導航欄連結樣式
            text-decoration: none;  // 設定導航欄的連結文字不帶下劃線
        }
        /* nav */
        .nav {    // 設定網頁導航欄的樣式
            background-color:#333;
            display: flex;
            justify-content: center;
        }
        .nav ul {  // 設定導航欄的無序列表樣式
            list-style-type: none;  
            margin: 0; 
            padding: 0; 
            overflow: hidden; 
            background-color: #333; 
        }
        .nav li {  // 設定導航欄的列表項樣式
            float: left; 
        }
        .nav li a {    // 設定導航欄的列表項連結樣式
            display: block;  
            color: white;  
            text-align: center;  
            padding: 14px 16px;  
            text-decoration: none;  
        }
        .nav li a:hover {  // 設定導航欄的列表項連結在鼠標懸停時的樣式
            background-color: #111; 
        }
        /*下拉式選單*/
        .dropdown:hover .dropdown-content {   // 設定下拉選單在鼠標懸停時的顯示樣式
            display: block;   /*使用block呈現上下排列*/
        }
        li.dropdown:hover{
            background-color: #333;  /*設定背景顏色*/
        }
        .dropdown-content {  /*設定下拉選單內容格式*/
            display: none;
            position: absolute;
            background-color: #333;
            min-width: 160px;
            z-index: 1;
        }
        .dropdown-content a {/*設定下拉選單連結內容格式*/
            color: black;
            padding: 12px 16px;
            text-decoration: none;
            display: block;
            text-align: left;
        }

        /* slider */
        .slider{  // 設定幻燈片區域的樣式
            background-color: black;
        }
        /* banner*/
        .banner{  // 設定橫幅區域的樣式
            background-image: linear-gradient(#ABDCFF,#0396FF);
            padding:30px;
        }
        .banner h1{  // 設定橫幅區域的標題樣式
            padding: 20px;
        }        
        /*faculty*/
        .faculty {  // 設定師資介紹區域的樣式
            display: block;
            justify-content: center;
            background-color:white;
            padding:40px;
        }
        .faculty h2 {
            font-size: 25px;
            color: rgb(50,51,52);
            padding-bottom:40px;
        }
        .faculty .container {
            /*border:1px solid red;*/
            display: flex;
            justify-content: space-around;
            align-items: center;
        }
        .faculty .teacher{
            /*border:1px solid blue;*/
            display:block;
            text-decoration: none;
        }
        .faculty .teacher img{
            height: 200px;
            width: 200px;
        }
        .faculty .teacher h3{
            color: White;
            background-color: rgba(39,40,34,.500);
            text-align: center;           
        }
        /*contact*/
        .contact {  // 設定聯絡資訊區域的樣式
            display: block;
            justify-content: center;
            margin-top: 30px;
            margin-bottom: 30px;                
        }
        .contact h2{
            color: rgb(54, 82, 110);
            font-size: 25px;
        }
        .contact .infos{  // 設定聯絡資訊區域內部資訊的樣式
            display:flex;
            margin-top: 30px; 
            justify-content: center;
        }
        .contact .infos .left{
            display:block;
            text-align: left;
            margin-right: 30px;
        }
        .contact .infos .left b{  // 設定聯絡資訊區域內部資訊的左側粗體文字的樣式
            display:block;
            text-align: left;
            margin-top: 10px;
            text-decoration: bold;
            color: Gray;
            font-size: 18px;
            line-height: 18px;
        }
        .contact .infos .left span{  // 設定聯絡資訊區域內部資訊的左側span元素的樣式
            display:block;
            text-align: left;
            margin-top: 10px;
            color: rgba(39,40,34,0.5);
            font-size: 16px;
            padding-left: 27px;
        }
        .contact .infos .right{   // 設定聯絡資訊區域內部資訊的右側區域的樣式
            height: 200px;               
        }
        .contact .infos .right iframe{  // 設定聯絡資訊區域內部資訊的右側iframe元素的樣式
            width: 100%;   // 設定iframe元素的寬度為100%
            height: 100%;
            border: 1px solid rgba(39,40,34,0.50);  // 設定iframe元素的邊框樣式
        }
        /*footer*/
        .footer{   // 設定頁腳區域的樣式
            display: flex;  // 使用彈性盒模型布局
            justify-content: center;  // 設定頁腳區域的內容水平居中對齊
            background-color: rgb(25,26,30);
            padding: 30px 0;
        }
        /*登入畫面css*/
        .modal {
            display: none; /* Hidden by default */
            position: fixed; /* Stay in place */
            z-index: 1; /* Sit on top */
            right: 50;
            top: 50;
            width: 20%; /* Full width */
            height: 20%; /* Full height */
            overflow: auto; /* Enable scroll if needed */
            background-color: rgba(255,255,255,0.9); /* Black w/ opacity */
            padding-top: 50px;
        }  /*登入畫面css*/
        /*佈告欄*/
        .bulletin{   // 設定佈告欄區域的樣式
            display: block;  // 設定佈告欄區域的顯示方式為塊級元素
            justify-content: center;   // 設定佈告欄區域的內容水平居中對齊
            background-color: rgb(255,204,153);
            padding: 30px 0;

        }
        .bulletin h1{
            padding:10px;
        }
        .bulletin table{
            border-collapse:collapse;
            font-family: 微軟正黑體;
            font-size:16px; 
            border:1px solid #000;
        }
        .bulletin table th{
            background-color: #abdcff;
            color: #ffffff;
        }
        .bulletin table td{
            background-color: #ffffff;
            color: #0396ff;
        }
    </style>
    </head>
    <body>
        <div class="top">
            <div class="container">
                <div class="logo">
                  <img src="https://github.com/shhuangmust/html/raw/111-1/IMMUST_LOGO.JPG">
                  明新科技大學資訊管理系
                </div>
                <div class="top-nav">
                  <a href=>明新科大</a>
                  <a href=>明新管理學院</a>
                  <!---跳出登入畫面-->
                  <label onclick="document.getElementById('login').style.display='block'">登入</label>
                  <div id="login" class="modal">
                    <span onclick="document.getElementById('login').style.display='none'">&times; 管理系統登入</span>
                    <form method=post action="10.login.php">
                        帳號：<input type=text name="id"><br />
                        密碼：<input type=password name="pwd"><p></p>
                        <input type=submit value="登入"> <input type=reset value="清除">
                    </form>
                  </div>  
                  <!---登入畫面-->
                </div>
              </div>
        </div>
        <div class="nav">   
            <ul>
                <li><a href="#home">首頁</a></li>
                <li><a href="#introduction">系所簡介</a></li>
                <li  class="dropdown"><a href="#faculty">成員簡介</a>
                    <div class="dropdown-content">
                        <a href="#faculty">黃老師</a>
                        <a href="#faculty">李老師</a>
                        <a href="#faculty">應老師</a>
                    </div>                       
                </li>
                <li><a href="#about">相關資訊</a></li>
            </ul>
        </div>
        <div class="slider">
            <div class="flexslider">
                <ul class="slides">
                    <li><img src="https://github.com/shhuangmust/html/raw/111-1/slider1.JPG" /></li>
                    <li><img src="https://github.com/shhuangmust/html/raw/111-1/slider2.JPG" /></li>
                    <li><img src="https://github.com/shhuangmust/html/raw/111-1/slider3.JPG" /></li>
                </ul>
            </div>
        </div>
        <!---佈告欄--->
        <div class="bulletin">
           <h1>最新公告</h1>
            <?php
                $conn=mysqli_connect("120.105.96.90", "immust", "immustimmust", "immust");
                $result=mysqli_query($conn, "select * from bulletin");
                echo "<table border=2><tr><th>佈告編號</th><th>佈告類別</th><th>標題</th><th>佈告內容</th><th>發佈時間</th></tr>";
                while ($row=mysqli_fetch_array($result)){
                    echo "<tr><td>";
                    echo $row["bid"];
                    echo "</td><td>";
                    if ($row["type"]==1) echo "系上公告";  
                    if ($row["type"]==2) echo "獲獎資訊"; 
                    if ($row["type"]==3) echo "徵才資訊"; 
                    echo "</td><td>"; 
                    echo $row["title"];
                    echo "</td><td>";
                    echo $row["content"]; 
                    echo "</td><td>";
                    echo $row["time"];
                    echo "</td></tr>";
                }
                echo "</table>";
            ?>
        </div>
        <!---佈告欄--->
        <div class="banner" id="introduction">
            <h1>系所簡介</h1>
            <h1>歷年教育部評鑑皆榮獲一等</h1>
            <h1>明新科技大學資訊管理系</h1>
            <h1>全國私立科大第一資管系</h1>
        </div>
        <div class="faculty" id="faculty">
            <h2>師資介紹</h2>
            <div class="container">
                <a class="teacher" href="">
                    <img src="https://github.com/shhuangmust/html/raw/111-1/faculty1.jpg" />
                    <h3>黃老師</h3>
                </a>
                <a class="teacher" href="">
                    <img src="https://github.com/shhuangmust/html/raw/111-1/faculty2.jpg" />
                    <h3>李老師</h3>
                </a>
                <a class="teacher" href="">
                    <img src="https://github.com/shhuangmust/html/raw/111-1/faculty3.jpg" />
                    <h3>應老師</h3>
                </a>        
            </div>
        </div>
        <div class="contact" id="about">
                <h2>相關資訊</h2>
                <div class="infos">
                    <div class="left">
                        <b>明新科技大學管理學院大樓二樓</b>
                        <span>304新竹縣新豐鄉新興路1號</span>
                        <b> 電話:03-5593142</b>
                        <span>分機:3431、3432、3433</span>
                        <b> 傳真:03-5593142</b>
                        <span>分機:3440</span>
                    </div>
                    <div class="right">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3044.185885150929!2d120.98912333466727!3d24.86332844316392!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x34683154faa8283b%3A0x92cb1c5564a574ef!2z5piO5paw56eR5oqA5aSn5a24!5e0!3m2!1szh-TW!2stw!4v1536665837954" frameborder="0" style="border:0" allowfullscreen></iframe>
                    </div>
                </div>
        </div>
        <div class="footer">
            &copy;Copyright 2022 Department of Information Management, MUST. All rights reserved. 維護者 Tony SHHuang
        </div>
     </body>
</html>