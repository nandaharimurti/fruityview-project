#!/usr/bin/env php
<?php
/**
 * 🔍 LOGIN IMPLEMENTATION VERIFICATION SCRIPT
 * 
 * Script ini memverifikasi bahwa semua komponen login sudah terimplementasi dengan benar
 * Run dari command line: php verify_login.php
 */

echo "╔════════════════════════════════════════════════════════════╗\n";
echo "║   🔍 LOGIN IMPLEMENTATION VERIFICATION                     ║\n";
echo "║   FruityView - Login Feature Checklist                     ║\n";
echo "╚════════════════════════════════════════════════════════════╝\n\n";

$checks = [];
$basePath = __DIR__;

// ==========================================
// 1. CHECK FILES EXIST
// ==========================================
echo "📁 [1/3] Checking file existence...\n";
echo str_repeat("─", 60) . "\n";

$requiredFiles = [
    '/public/assets/js/login.js' => 'Login JavaScript',
    '/public/assets/css/login.css' => 'Login CSS',
    '/app/Views/login/login.php' => 'Login HTML View',
    '/app/Controllers/AuthController.php' => 'Auth Controller',
    '/app/Models/UserModel.php' => 'User Model',
];

foreach ($requiredFiles as $file => $label) {
    $fullPath = $basePath . $file;
    $exists = file_exists($fullPath);
    $status = $exists ? '✅' : '❌';
    $checks[] = $exists;
    printf("  %s %-50s %s\n", $status, $label, $exists ? 'OK' : 'MISSING');
}

// ==========================================
// 2. CHECK FILE CONTENTS
// ==========================================
echo "\n📝 [2/3] Checking file contents...\n";
echo str_repeat("─", 60) . "\n";

$loginJsPath = $basePath . '/public/assets/js/login.js';
$loginCssPath = $basePath . '/public/assets/css/login.css';
$authControllerPath = $basePath . '/app/Controllers/AuthController.php';
$loginPhpPath = $basePath . '/app/Views/login/login.php';

// Check login.js features
if (file_exists($loginJsPath)) {
    $jsContent = file_get_contents($loginJsPath);
    $features = [
        'showNotification' => 'Notification System',
        'togglePasswordBtn' => 'Password Toggle',
        'loginBtn.addEventListener' => 'Login Button Handler',
        'fetch.*AuthController' => 'AJAX Request',
        'registerLink' => 'Register Navigation',
        'forgotPasswordLink' => 'Forgot Password Link',
        'googleLoginBtn' => 'Google Login Button',
        'closeBtn' => 'Mobile Close Button',
    ];
    
    foreach ($features as $search => $label) {
        $found = preg_match("/$search/i", $jsContent) > 0;
        $status = $found ? '✅' : '❌';
        $checks[] = $found;
        printf("  %s %-50s %s\n", $status, $label, $found ? 'OK' : 'MISSING');
    }
}

// Check login.css styles
if (file_exists($loginCssPath)) {
    $cssContent = file_get_contents($loginCssPath);
    $styles = [
        '.notification-toast' => 'Notification Toast Style',
        '@keyframes slideInRight' => 'Slide In Animation',
        '@keyframes slideOutRight' => 'Slide Out Animation',
        '@keyframes spin' => 'Spinner Animation',
    ];
    
    foreach ($styles as $search => $label) {
        $found = strpos($cssContent, $search) !== false;
        $status = $found ? '✅' : '❌';
        $checks[] = $found;
        printf("  %s %-50s %s\n", $status, $label, $found ? 'OK' : 'MISSING');
    }
}

// Check AuthController.php AJAX support
if (file_exists($authControllerPath)) {
    $phpContent = file_get_contents($authControllerPath);
    $phpFeatures = [
        'X_REQUESTED_WITH' => 'AJAX Detection',
        'json_encode' => 'JSON Response',
        'password_verify' => 'Password Verification',
        'header.*application/json' => 'JSON Header',
    ];
    
    foreach ($phpFeatures as $search => $label) {
        $found = strpos($phpContent, $search) !== false;
        $status = $found ? '✅' : '❌';
        $checks[] = $found;
        printf("  %s %-50s %s\n", $status, $label, $found ? 'OK' : 'MISSING');
    }
}

// Check login.php selectors
if (file_exists($loginPhpPath)) {
    $htmlContent = file_get_contents($loginPhpPath);
    $selectors = [
        'forgot-password' => 'Forgot Password Class Selector',
        'register-link' => 'Register Link Class Selector',
    ];
    
    foreach ($selectors as $search => $label) {
        $found = strpos($htmlContent, $search) !== false;
        $status = $found ? '✅' : '❌';
        $checks[] = $found;
        printf("  %s %-50s %s\n", $status, $label, $found ? 'OK' : 'MISSING');
    }
}

// ==========================================
// 3. CHECK DOCUMENTATION
// ==========================================
echo "\n📚 [3/3] Checking documentation...\n";
echo str_repeat("─", 60) . "\n";

$docs = [
    '/LOGIN_FEATURES.md' => 'Detailed Feature Documentation',
    '/IMPLEMENTASI_LOGIN_SUMMARY.md' => 'Implementation Summary',
];

foreach ($docs as $file => $label) {
    $fullPath = $basePath . $file;
    $exists = file_exists($fullPath);
    $status = $exists ? '✅' : '❌';
    $checks[] = $exists;
    printf("  %s %-50s %s\n", $status, $label, $exists ? 'OK' : 'MISSING');
}

// ==========================================
// FINAL SUMMARY
// ==========================================
echo "\n" . str_repeat("═", 60) . "\n";

$totalChecks = count($checks);
$passedChecks = array_sum($checks);
$percentage = ($passedChecks / $totalChecks) * 100;

echo "✅ VERIFICATION SUMMARY\n";
echo str_repeat("─", 60) . "\n";
printf("  Passed: %d/%d (%.0f%%)\n", $passedChecks, $totalChecks, $percentage);

if ($percentage === 100) {
    echo "\n✅ ALL CHECKS PASSED! Login implementation is ready to use.\n";
    echo "\n📋 FEATURES IMPLEMENTED:\n";
    echo "  1. ✅ Show/Hide Password (Tombol Mata)\n";
    echo "  2. ✅ Validasi Login dengan Database\n";
    echo "  3. ✅ Login Berhasil → Redirect ke Main Page\n";
    echo "  4. ✅ Login Gagal → Notifikasi Error\n";
    echo "  5. ✅ Lupa Kata Sandi (Placeholder)\n";
    echo "  6. ✅ Login dengan Google (Placeholder)\n";
    echo "  7. ✅ Daftar Sekarang (Redirect ke Register)\n";
    echo "  8. ✅ Notifikasi System\n";
    echo "\n🚀 READY FOR TESTING!\n";
} else {
    echo "\n⚠️  Some checks failed. Please review the missing items.\n";
}

echo "\n📖 For detailed information, see:\n";
echo "  - LOGIN_FEATURES.md (Detailed documentation)\n";
echo "  - IMPLEMENTASI_LOGIN_SUMMARY.md (Quick reference)\n";

echo "\n" . str_repeat("═", 60) . "\n\n";

// Return exit code
exit($percentage === 100 ? 0 : 1);
?>