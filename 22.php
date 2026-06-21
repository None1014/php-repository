<?php
    error_reporting(0);
    session_start();
    if (!$_SESSION["id"]) {
        echo "please login first";
        echo "<meta http-equiv=REFRESH content='3, url=2.login.html'>";
    }
    else{
        echo "
        <html>
            <head><title>新增佈告</title></head>
            <body>
                <form method=post action=23.bulletin_add.php>  // 表單提交到23.bulletin_add.php,使用POST方法
                    標    題：<input type=text name=title><br>
                    內    容：<br><textarea name=content rows=20 cols=20></textarea><br>  // 佈告內容輸入框
                    佈告類型：<input type=radio name=type value=1>系上公告   // 佈告類型選擇，使用單選按鈕
                            <input type=radio name=type value=2>獲獎資訊
                            <input type=radio name=type value=3>徵才資訊<br>
                    發布時間：<input type=date name=time><p></p>
                    <input type=submit value=新增佈告> <input type=reset value=清除>  // 提交按鈕和重置按鈕
                </form>
            </body>
        </html>
        ";
    }
?>