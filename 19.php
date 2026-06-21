<html>
    <head><title>修改使用者</title></head>
    <body>
    <?php
    error_reporting(0);
    session_start();
    if (!$_SESSION["id"]) {
        echo "請登入帳號";
        echo "<meta http-equiv=REFRESH content='3, url=2.login.html'>";
    }
    else{   
        $conn=mysqli_connect("120.105.96.90", "immust", "immustimmust", "immust");  // 建立資料庫連結
        $result=mysqli_query($conn, "select * from user where id='{$_GET['id']}'");  // 從資料庫中查詢指定id的使用者資料
        $row=mysqli_fetch_array($result);
        echo "
        <form method=post action=20.user_edit.php>  // 表單提交到20.user_edit.php,使用POST方法
            <input type=hidden name=id value={$row['id']}>
            帳號：{$row['id']}<br> 
            密碼：<input type=text name=pwd value={$row['pwd']}><p></p>
            <input type=submit value=修改>  // 提交按鈕
        </form>
        ";
    }
    ?>
    </body>
</html>