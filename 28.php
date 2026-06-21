<?php
    error_reporting(0);
    session_start();
    if (!$_SESSION["id"]) {
        echo "請登入帳號";
        echo "<meta http-equiv=REFRESH content='3, url=2.login.html'>";
    }
    else{   
        $conn=mysqli_connect("120.105.96.90", "immust", "immustimmust", "immust");  // 建立資料庫連結
        $sql="delete from bulletin where bid='{$_GET["bid"]}'";  // 刪除佈告的SQL命令
        #echo $sql;
        if (!mysqli_query($conn,$sql)){
            echo "佈告刪除錯誤";  // 如果執行刪除佈告的SQL命令失敗，則顯示錯誤訊息
        }else{
            echo "佈告刪除成功";
        }
        echo "<meta http-equiv=REFRESH content='3, url=11.bulletin.php'>";  // 3秒後自動跳轉到佈告欄列表頁面
    }
?>