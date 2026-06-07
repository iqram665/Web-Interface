<?php
// ডেটাবেজ কনফিগারেশন
$host = "localhost";
$user = "root";
$password = "";
$dbname = "design_db";

// MySQL ডেটাবেজের সাথে কানেকশন তৈরি
$conn = new mysqli($host, $user, $password, $dbname);

// কানেকশন চেক করা
if ($conn->connect_error) {
    $db_status = "❌ Connection Failed: " . $conn->connect_error;
} else {
    $db_status = "🟩 Connected Successfully to MySQL Database!";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Asset Manager Backend</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-[#0f172a] text-white font-sans flex items-center justify-center h-screen">

    <div class="bg-[#1e293b] p-8 rounded-2xl shadow-2xl border border-slate-700 max-w-md w-full text-center">
        <h1 class="text-2xl font-bold mb-4 bg-gradient-to-r from-indigo-400 to-pink-500 bg-clip-text text-transparent">
            AssetHub PHP Backend
        </h1>
        <p class="text-sm text-slate-400 mb-6">Welcome to your OOP PHP & MySQL project environment.</p>
        
        <!-- ডেটাবেজ স্ট্যাটাস দেখাবে -->
        <div class="p-4 rounded-xl bg-slate-900/50 border border-slate-800 text-sm font-medium">
            <?php echo $db_status; ?>
        </div>
    </div>

</body>
</html>