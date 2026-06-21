<html>
    <head><title>新增使用者</title></head>
    <body>
<?php        
    error_reporting(0);  // 關閉錯誤訊息顯示
    session_start();
    if (!$_SESSION["id"]) { // 檢查是否已登入，若未登入則提示並跳轉到登入頁面
        echo "請登入帳號";
        echo "<meta http-equiv=REFRESH content='3, url=2.login.html'>";  // 3秒後自動跳轉到登入頁面
    }
    else{    
        echo "  
            <form action=15.user_add.php method=post>  // 表單提交到15.user_add.php,使用POST方法
                帳號：<input type=text name=id><br>
                密碼：<input type=text name=pwd><p></p>
                <input type=submit value=新增> <input type=reset value=清除>  // 提交按鈕和重置按鈕
            </form>
        ";
    }
?>
    </body>
</html>