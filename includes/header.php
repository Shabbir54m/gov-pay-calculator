<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

// Generate CSRF Token for Form Security
if (empty($_SESSION['csrf_token'])) {
    $_SESSION['csrf_token'] = bin2hex(random_bytes(32));
}

// Security Headers (Clickjacking, XSS, MIME Sniffing protection)
header("X-Frame-Options: DENY");
header("X-XSS-Protection: 1; mode=block");
header("X-Content-Type-Options: nosniff");
header("Referrer-Policy: strict-origin-when-cross-origin");
?>
<!DOCTYPE html>
<html lang="bn">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>জাতীয় বেতনস্কেল ২০২৬ ক্যালকুলেটর (National Pay Scale 2026 Calculator)</title>
    
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Anek+Bangla:wght@300;400;500;600;700;800&family=Noto+Sans+Bengali:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    
    <!-- FontAwesome Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <!-- Custom Style File -->
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body class="text-slate-800 antialiased min-h-screen flex flex-col justify-between" oncontextmenu="return false;" onselectstart="return false;" ondragstart="return false;">

    <header class="bg-gradient-to-r from-emerald-800 via-teal-700 to-emerald-900 text-white shadow-lg sticky top-0 z-50">
        <div class="max-w-7xl mx-auto px-4 py-4 sm:px-6 lg:px-8 flex flex-col sm:flex-row justify-between items-center gap-3">
            <div class="flex items-center space-x-3 space-x-reverse">
                <div class="w-12 h-12 bg-white/10 rounded-full flex items-center justify-center border border-white/20 text-2xl">
                    <i class="fa-solid fa-calculator text-emerald-300"></i>
                </div>
                <div>
                    <h1 class="text-xl sm:text-2xl font-bold tracking-tight">জাতীয় বেতনস্কেল, ২০২৬ ক্যালকুলেটর</h1>
                    <p class="text-xs sm:text-sm text-emerald-100 opacity-90">গণপ্রজাতন্ত্রী বাংলাদেশ সরকার - ১৭ সেপ্টেম্বর ২০২৬ গেজেট অনুযায়ী</p>
                </div>
            </div>
            <div class="text-xs bg-emerald-900/60 border border-emerald-500/30 px-3 py-1.5 rounded-full text-emerald-200 flex items-center gap-2">
                <span class="w-2 h-2 rounded-full bg-emerald-400 animate-pulse"></span>
                <span>গেজেট নং: ৩৪৭-আইন/২০২৬</span>
            </div>
        </div>
    </header>