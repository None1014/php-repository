<?php
    error_reporting(0);
    session_start();
    if (!$_SESSION["id"]) {
        echo "please login first";  // 如果用戶未登入，顯示提示訊息
        echo "<meta http-equiv=REFRESH content='3, url=2.login.html'>";  // 3秒後自動跳轉到登入頁面
    }
    else{
        
        $conn=mysqli_connect("120.105.96.90", "immust", "immustimmust", "immust");  // 建立資料庫連結
        $result=mysqli_query($conn, "select * from bulletin where bid={$_GET["bid"]}");  // 從資料庫中查詢指定bid的佈告資料
        $row=mysqli_fetch_array($result);
        $checked1="";  // 初始化佈告類型的選中狀態
        $checked2="";
        $checked3="";
        if ($row['type']==1)  // 根據佈告的類型設置對應的選中狀態
            $checked1="checked";  // 如果佈告類型為1，則設置checked1為"checked"
        if ($row['type']==2)
            $checked2="checked";
        if ($row['type']==3)
            $checked3="checked";
        echo "
        <html>
            <head><title>新增佈告</title></head>
            <body>
                <form method=post action=27.bulletin_edit.php>
                    佈告編號：{$row['bid']}<input type=hidden name=bid value={$row['bid']}><br>
                    標    題：<input type=text name=title value={$row['title']}><br>
                    內    容：<br><textarea name=content rows=20 cols=20>{$row['content']}</textarea><br>
                    佈告類型：<input type=radio name=type value=1 {$checked1}>系上公告 
                            <input type=radio name=type value=2 {$checked2}>獲獎資訊
                            <input type=radio name=type value=3 {$checked3}>徵才資訊<br>
                    發布時間：<input type=date name=time value={$row['time']}><p></p>
                    <input type=submit value=修改佈告> <input type=reset value=清除>
                </form>
            </body>
        </html>
        ";
    }
?>